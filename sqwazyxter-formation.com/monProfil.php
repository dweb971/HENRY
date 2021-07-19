<?php
  session_start(); 
  session_reset();
  include('config.php'); 
  // S'il n'y a pas de session alors on ne va pas sur cette page
  if(isset($_SESSION['user']))
  {
      require_once 'includes/headerOnline.php'; 
       
       
  }
  else {
      require_once 'includes/header.php'; 
  }

  if(!isset($_SESSION['user'])){ 
    header('Location: index.php'); 
    exit; 
  }
 
  
  
  
?>

<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Mon profil</title>
  <head>
  <body>
    <h2>Voici le profil de <?php echo($_SESSION ['user'] .' '. $_SESSION ['prenom']); ?></h2>
    <div>Quelques informations sur vous : </div>
    <ul>
      <li>Votre nom est : <?php echo($_SESSION ['user']);?></li>
      <li>Votre prénom est : <?php echo($_SESSION ['prenom']);?></li>
      <li>Votre id est : <?php echo($_SESSION ['id']);?></li>
      <li>Votre mail est : <?php echo($_SESSION ['email']);?></li>
      <li>Votre compte a été crée le : <?php echo($_SESSION ['date']);?></li>
      <li>Votre date de naissance est : <?php echo($_SESSION ['dateN']);?></li>
    </ul>
    <div class="container">
    
   
    <div class="row">
    <div class="col-md-4">
   <a href="#"><button type="button" data-toggle="modal" data-target="#myModal" class="btn btn-primary" id="btn">Modifier mes informations</button></a>

    </div>
    <di class="col-md-8">
    <div class="modal" id="myModal" tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Modifiez vos informations</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form method="post" class="needs-validation" novalidate>
          <div class="form-group">
          <label for="id"></label>
          <input class="form-control" type="hidden" placeholder="indiquer l'ID de votre compte" name="id" value="<?php echo ($_SESSION['id']); ?>" required> 
          </div>  
          <div class="form-group">
          <label for="nom">Nom *</label>
          <input class="form-control"  type="text" placeholder="Votre nom" name="nom" value="<?php echo ($_SESSION['user']); ?>" onchange="this.value = this.value.toUpperCase();" required> 
          <div class="valid-feedback">
                    Parfait !
                </div>
                <div class="invalid-feedback">
                    Indiquez votre Nom!
                </div>
          </div>  
          <div class="form-group">
          <label for="prenom">Prenom *</label>
          <input class="form-control" type="text" placeholder="Votre prénom" name="prenom" value="<?php echo ($_SESSION['prenom']); ?>" onchange="this.value = this.value.charAt(0).toUpperCase() + this.value.substr(1);" required> 
          <div class="valid-feedback">
                    Parfait !
                </div>
                <div class="invalid-feedback">
                    Indiquez votre Prénom!
                </div>   
          </div>
         <div class="form-group">
         <label for="email">Email *</label>
          <input class="form-control" type="email" placeholder="Adresse mail" value="<?php echo ($_SESSION['email']); ?>" name="email" required>
          <div class="valid-feedback">
                    Parfait !
                </div>
                <div class="invalid-feedback">
                    Indiquez votre Email!
                </div>
          </div>
          <div class="form-group">
                <label>Date de naissance *</label>
                <input type="date" name="date_naissance" class="form-control" value="<?php echo ($_SESSION['dateN']); ?>" required>
                <div class="valid-feedback">
                    Parfait !
                </div>
                <div class="invalid-feedback">
                    Indiquez votre Date de naissance!
                </div>
            </div>
          <div class="form-group">
         <label for="email">Mot de passe actuel *</label>
          <input class="form-control" type="password" placeholder="Mot de passe" name="current_password" required>
          <div class="valid-feedback">
                    Parfait !
                </div>
                <div class="invalid-feedback">
                    Indiquez votre Mot de passe actuel!
                </div>
          </div>
          <button type="submit" class="btn btn-primary" name="update">Sauvegarder les informations</button>
          <p>Tous les champs avec un (*) sont obligatoire</p>
      </form>
  </body>
</html>

<?php

$connection = mysqli_connect("localhost","sqwazyxter","sqwazyxter");
$db = mysqli_select_db($connection,'sqwazyxter');







if(!empty($_POST['current_password'] && !empty($_POST['nom']) && !empty($_POST['prenom']) && !empty($_POST['email'])))
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


  $query = "UPDATE `utilisateur` SET nom='$_POST[nom]', prenom='$_POST[prenom]',email='$_POST[email]', date_naissance='$_POST[date_naissance]' where id=$_POST[id] ";
  
  $query_run = mysqli_query($connection,$query);

  if($query_run)
  {
      echo '<script type="text/javascript"> alert("Vos informations ont  bien été modifié")</script>';
  }
}
        }else {
          echo '<script type="text/javascript"> alert("Mot de passe actuel incorrect !")</script>';
        }
      }
    
      
?>
 
                       
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
      </div>
    </div>
  </div>
</div>

    </di>
    </div>
    </div>
  </body>
</html>
<script>
    // Example starter JavaScript for disabling form submissions if there are invalid fields
    (function() {
        'use strict';
        window.addEventListener('load', function() {
            // Fetch all the forms we want to apply custom Bootstrap validation styles to
            var forms = document.getElementsByClassName('needs-validation');
            // Loop over them and prevent submission
            var validation = Array.prototype.filter.call(forms, function(form) {
                form.addEventListener('submit', function(event) {
                    if (form.checkValidity() === false) {
                        event.preventDefault();
                        event.stopPropagation();
                    }
                    form.classList.add('was-validated');
                }, false);
            });
        }, false);
    })();
    </script>

<?php include("includes/footer.php"); ?>

<!-- Optional JavaScript; choose one of the two! -->

<!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous">
</script>