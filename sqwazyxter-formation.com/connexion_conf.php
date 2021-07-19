<?php 
    session_start();
    require_once 'config.php';

    if(!empty($_POST['email']) && !empty($_POST['password']))
    {
        $email = htmlspecialchars($_POST['email']);
        $password = htmlspecialchars($_POST['password']);

        $check = $bdd->prepare('SELECT nom, email, prenom, date_inscription, id, date_naissance, password FROM utilisateur WHERE email = ?');
        $check->execute(array($email));
        $data = $check->fetch();
        $row = $check->rowCount();

        if($row == 1)
        {
            if(filter_var($email, FILTER_VALIDATE_EMAIL))
            {
                
                if(password_verify($password, $data['password']))
                {
                    $_SESSION['user'] = $data['nom'];
                    $_SESSION['prenom'] = $data['prenom'];
                    $_SESSION['email'] = $data['email'];
                    $_SESSION['date'] = $data['date_inscription'];
                    $_SESSION['id'] = $data['id'];
                    $_SESSION['dateN'] = $data['date_naissance'];

                   
                  
                  
                    header('Location: monCompte.php');
                    die();
                }else{ header('Location: connexion.php?login_err=password'); die(); }
            }else{ header('Location: connexion.php?login_err=email'); die(); }
        }else{ header('Location: connexion.php?login_err=already'); die(); }
    }
    ?>