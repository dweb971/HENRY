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
 <?php
                if(isset($_GET['true']) == "created"){
            ?>
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>Bravo!</strong> Votre produit a été ajouter au panier avec succes.
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            <?php
                }
            ?>




    <title>sqwazyxter/Formation - Accueil</title>


    <div class="container marge-accueil">
        <div class="row">
            <div class="col-2">

            </div>
            <div class="col-8">
                <h1>BIENVENUE SUR SQWAZYXTER</h1>
            </div>
            <div class="col-2">
           
            </div>
        </div>
        <div class="row">
            <div class="col-3">

            </div>
            <div class="col-6">
                <p>
                    Notre site vous propose dans un premier temps des formations qualifiantes que vous pouvez retrouver à la vente dans le <a href="catalogue.php">catalogue</a>.
                    De plus, vous pouvez consulter vos formations et leurs avancements dans l'onglet <a href="accompagnement.php">accompagnement</a>.<br><br>
                    Vous aurez aussi la possibilité de <a href="reservation.php">réserver</a> une salle.
                    Enfin, vous pouvez demander un <a href="rendez-vous.php">rendez-vous</a>.
                </p>
            </div>
            <div class="col-3">

            </div>
        </div>
    </div>
    <?php include("includes/footer.php"); ?>
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
    -->
</body>

</html>