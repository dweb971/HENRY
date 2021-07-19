<?php 
    session_start();
   
if(isset($_SESSION['user']))
{
    require_once 'includes/headerOnline.php';   
}
else {
    require_once 'includes/header.php'; 
}
?>
    <link rel="stylesheet" href="style1.css">

    <title>Achat</title>
  </head>
  <body>
    
  <div class="">
  <ul class="margin2">
  <li ><a href="#">  Accueil</a></li>
  <li class="ariane">Achat</li>
</ul> 
  </div>


  <div class="container">
  <div class="row">
  <h3 class="titleAchat">ACHAT</h3>
  </div>
  </div>
            <p class="placeStep1">ETAPE 1 - Sélectionner une formation</p>
            <div class="container">
            <div class="row">
            <div class="col-4">
            <a href="https://sqwazyxter-formation.com/formation_detail.php">
       <img class="tailleImg" src="img/formationPic.jpg" alt=""/>
       <p class="txtF">Formation 1 </p>
       </a>
            </div>
            <div class="col-4">
            <a href="#">
       <img class="tailleImg" src="img/formationPic.jpg" alt=""/>
       <p class="txtF">Formation 2 </p>
       </a>
            </div>
            <div class="col-4">
            <a href="#">
       <img class="tailleImg" src="img/formationPic.jpg" alt=""/>
       <p class="txtF">Formation 3 </p>
       </a>
            </div>
            </div>
            </div>

            <div class="row">
            <p class="placeStep1">ETAPE 2</p>
            </div>
            <div class="row down">
            <a class="placeStep1" href="http://">+ ajouter au panier</a>
            </div>

            <div class="row">
            <p class="placeStep1">ETAPE 3</p>
            </div>
            <div class="row">
            <p class="placeStep1">Séléctionner un moyen de paiement</p>
            </div>

            <div class="container">
                <div class="row">
                    <div class="col-8">
                    <a href="#">
       <img class="imgPaiement" src="img/mode de paiement.png" alt=""/>
            </a>
                    </div><div class="col-4">
                        
                    </div>
                </div>
            </div>
            <div class="row">
        <div class="col-4">
        <button type="submit" class="btn btn-primary marge-bouton btnPlace">Valider</button>
        </div>
        <div class="col-8">
       
        </div>
      </div>
      <?php include("includes/footer.php"); ?>
            

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
    -->
  </body>
</html>
