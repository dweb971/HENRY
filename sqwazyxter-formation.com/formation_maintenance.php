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

<title>Formation - Maintenance</title>
</head>

<body>

    <div class="container">
        <ul class="margin">
            <li><a href="https://sqwazyxter-formation.com/index.php"> Accueil</a></li>
            <li class="ariane"><a href="https://sqwazyxter-formation.com/catalogue.php">Catalogue</a></li>
            <li class="ariane">Formation Maintenance</li>
        </ul>
    </div>


    <h3 class="h3">FORMATION MAINTENANCE</h3>


    <div class="container">
        <div class="row">
            <div class="col-3">

            </div>
            <div class="col-4">
                <img src="img/maintenance.png" alt="" srcset="">
            </div>
            <div class="col-5">

            </div>
        </div>
    </div>



    <form action="insertCart.php" method="post">
        <div class="">
            <div class="row">
                <div class="col-12">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Domaine</th>
                                <th scope="col">ref.produit</th>
                                <th scope="col">intitulé de la formation</th>
                                <th scope="col">Durée</th>
                                <th scope="col">Public ou niveau</th>
                                <th scope="col">Prérequis</th>
                                <th scope="col">Panier</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>Support PC</td>
                                <td>SMX01</td>
                                <td>Maintenance et configuration</td>
                                <td>28H</td>
                                <td>tout Expert</td>
                                <td>connaissances

                                    micro-
                                    informatique...</td>
                                <td> <a href="viewCart.php">Ajouter au panier</a></td>
                            </tr>

                        </tbody>
                    </table>
                    <a href="test.php">Test de niveau</a>
                </div>

            </div>
        </div>

        <input type="hidden" name="name" value="FormationDev">
        <input type="hidden" name="prix" value="300$">

    </form>

    <?php include("includes/footer.php"); ?>