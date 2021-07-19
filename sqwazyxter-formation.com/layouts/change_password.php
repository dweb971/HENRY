<?php   
    // Démarrage de la session 
    session_start();
    // Include de la base de données
    require_once '../config.php';


    // Si la session n'existe pas 
    if(!isset($_SESSION['user']))
    {
        header('Location:../index.php');
        die();
    }


    // Si les variables existent 
    if(!empty($_POST['current_password']) && !empty($_POST['new_password']) && !empty($_POST['new_password_retype'])){
        // XSS 
        $current_password = htmlspecialchars($_POST['current_password']);
        $new_password = htmlspecialchars($_POST['new_password']);
        $new_password_retype = htmlspecialchars($_POST['new_password_retype']);


        $check_password  = $bdd->prepare('SELECT password FROM utilisateur WHERE email = :email');
        $check_password->execute(array(
            "email" => $_SESSION['email']
        ));
        $data_password = $check_password->fetch();

        if(password_verify($current_password, $data_password['password']))
        {
            if($new_password == $new_password_retype){

                $cost = ['cost' => 12];
                $new_password = password_hash($new_password, PASSWORD_BCRYPT, $cost);
                $update = $bdd->prepare('UPDATE utilisateur SET password = :password WHERE email = :email');
                $update->execute(array(
                    "password" => $new_password,
                    "email" => $_SESSION['user']
                ));
                header('Location: ../index.php?err=success_password');
                die();
            }
            else {
                header('Location: ../index.php?err=retype_password');
                die();
            }
        }
        else{
            header('Location: ../index.php?err=current_password');
            die();
        }



    }
?>