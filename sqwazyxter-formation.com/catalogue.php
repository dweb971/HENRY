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
    <title>sqwazyxter/Formation - Catalogue</title>
    <div class="">
        <ul class="margin2">
            <li><a href="index.php"> Accueil</a></li>
            <li class="ariane">Catalogue</li>
        </ul>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>CATALOGUE</h1>
            </div>
        </div>
        </div>

        <div class="container">
        <div class="row">
        <div class="col-6 centre">
                <a href="https://sqwazyxter-formation.com/formation_informatique.php" class="style-lien">
                    <img src="img/excel.jpg" alt="image de formation" class="taille-image">
                    <p>FORMATION INFORMATIQUES</p>
                </a>
            </div>
            <div class="col-6 centre">
                <a href="https://sqwazyxter-formation.com/formation_logiciel.php" class="style-lien">
                    <img src="img/proteger-attaques.jpg" alt="image de formation" class="taille-image">
                    <p>FORMATION LOGICIELS ET SÉCURITÉ</p>
                </a>
            </div>
        </div>
        <div class="row">
        <div class="col-6 centre">
                <a href="https://sqwazyxter-formation.com/formation_systeme.php" class="style-lien">
                    <img src="img/620px-GNU_and_Tux.svg.png" alt="image de formation" class="taille-image">
                    <p>FORMATION SYSTÈME D'EXPLOITATION</p>
                </a>
            </div>
       
        
            <div class="col-6 centre">
                <a href="https://sqwazyxter-formation.com/formation_maintenance.php" class="style-lien">
                    <img src="img/maintenance.png" alt="image de formation" class="taille-image">
                    <p>FORMATION MAINTENANCE</p>
                </a>
            </div>
        </div>
        </div>  

    <?php include("includes/footer.php"); ?>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous">
    </script>


    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
    -->
</body>

</html>
