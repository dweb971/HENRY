<?php

    session_start();
    ini_set('display_error', 1);
    
   
 
    if (!isset($_SESSION['id'])){
        header('Location: index.php');
        exit;
    }
  
    
 ?>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Modifier votre profil</title>
    </head>
    <body>      
        <div>Modification</div>
        <form method="post">
          
            <input type="text" placeholder="indiquer l'ID de votre compte" name="id">   

            <input type="text" placeholder="Votre nom" name="nom">   
           
            <input type="text" placeholder="Votre prénom" name="prenom">   
           
            <input type="email" placeholder="Adresse mail" name="email">

            <input type="password" placeholder="entrez votre mot de passe actuel" name="current_password" required>

            <button type="submit" name="update">Modifier</button>
        </form>
    </body>
</html>

<?php

$connection = mysqli_connect("localhost","sqwazyxter","sqwazyxter");
$db = mysqli_select_db($connection,'sqwazyxter');
if(!empty($_POST['current_password']))
{
    $current_password = htmlspecialchars($_POST['current_password']);


    $check_password  = $bdd->prepare('SELECT password FROM utilisateur WHERE email = :email');
        $check_password->execute(array(
            "email" => $_SESSION['email']
        ));
        $data_password = $check_password->fetch();

        if(password_verify($current_password, $data_password['password']))
        {

if(isset($_POST['update']))
{
    $id = $_POST['id'];


    $query = "UPDATE `utilisateur` SET nom='$_POST[nom]', prenom='$_POST[prenom]',email='$_POST[email]' where id=$_POST[id] ";

    $query_run = mysqli_query($connection,$query);

    if($query_run)
    {
        echo '<script type="text/javascript"> alert("client modifié")</script>';
    }else {
        echo '<script type="text/javascript"> alert("client non modifié")</script>';
    }
}
}
}
?>