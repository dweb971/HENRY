<?php 
    require_once 'config.php';

    if(!empty($_POST['nom']) && !empty($_POST['prenom']) && !empty($_POST['email']) && !empty($_POST['date_naissance']) && !empty($_POST['password']) && !empty($_POST['password_retype']))
    {
        $nom = htmlspecialchars(strtoupper($_POST['nom']));
        $prenom = htmlspecialchars(ucfirst($_POST['prenom']));
        $email = htmlspecialchars(strtolower($_POST['email']));
        $dateN = date('Y-m-d',strtotime($_POST['date_naissance']));
        $password = htmlspecialchars($_POST['password']);
        $password_retype = htmlspecialchars($_POST['password_retype']);

        //sa fonctione

        $check = $bdd->prepare('SELECT nom, email, password FROM utilisateur WHERE email = ?');
        $check->execute(array($email));
        $data = $check->fetch();
        $row = $check->rowCount();

        if($row == 0){ 
            if(strlen($nom) <= 1000){
                if(strlen($prenom) <= 1984){
                if(strlen($email) <= 100){
                    if(filter_var($email, FILTER_VALIDATE_EMAIL)){
                        if($password === $password_retype){

                            $cost = ['cost' => 12];
                            $password = password_hash($password, PASSWORD_BCRYPT, $cost);
                            
                            $ip = $_SERVER['REMOTE_ADDR'];

                            /*
                                Pour ceux qui souhaite mettre en place un système de mot de passe oublié, pensez à mettre le champ token dans votre requête
                                $insert = $bdd->prepare('INSERT INTO utilisateurs(nom, email, password, ip, token) VALUES(:nom, :email, :password, :ip, :token)');
                                $insert->execute(array(
                                    'nom' => $nom,
                                    'email' => $email,
                                    'password' => $password,
                                    'ip' => $ip,
                                    'token' =>  bin2hex(openssl_random_nom_bytes(24))
                                ));
                              */
                            
                            $insert = $bdd->prepare('INSERT INTO utilisateur(nom, prenom, email, date_naissance, password, ip) VALUES(:nom, :prenom, :email, :date_naissance, :password, :ip)');
                            $insert->execute(array(
                                'nom' => $nom,
                                'prenom' => $prenom,
                                'email' => $email,
                                'date_naissance' => $dateN,
                                'password' => $password,
                                'ip' => $ip
                            ));

                            header('Location:inscription.php?reg_err=success');
                            die();
                        }else{ header('Location: inscription.php?reg_err=password'); die();}
                    }else{ header('Location: inscription.php?reg_err=email'); die();}
                }else{ header('Location: inscription.php?reg_err=email_length'); die();}
            }else{ header('Location: inscription.php?reg_err=prenom_lenght'); die();}
            }else{ header('Location: inscription.php?reg_err=nom_length'); die();}
        }else{ header('Location: inscription.php?reg_err=already'); die();}
    }

    ?>