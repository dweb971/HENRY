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

<title>Formation - Logiciel et Sécurité</title>
</head>

<body>

    <div class="container">
        <ul class="margin">
            <li><a href="https://sqwazyxter-formation.com/index.php"> Accueil</a></li>
            <li class="ariane"><a href="https://sqwazyxter-formation.com/catalogue.php">Catalogue</a></li>
            <li class="ariane">Formation Logiciel et Sécurité</li>
        </ul>
    </div>


    <h3 class="h3">FORMATION LOGICIELS ET SÉCURITÉ</h3>


    <div class="container">
        <div class="row">
            <div class="col-3">

            </div>
            <div class="col-4">
                <img src="img/proteger-attaques.jpg" alt="" srcset="">
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
                                <td>Cybersécurité</td>
                                <td>SXS01</td>
                                <td>Protection des donnes personnelles et nouveau règlement Européen - Les impacts</td>
                                <td>7h</td>
                                <td>pro</td>
                                <td>Aucun</td>
                                <td> <a href="viewCart.php">Ajouter au panier</a></td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>Cybersécurité</td>
                                <td>SXS02</td>
                                <td>Sensiblilisation a la sécutité pour les décideurs</td>
                                <td>7h</td>
                                <td>Pro</td>
                                <td>Aucun</td>
                                <td> <a href="viewCart.php">Ajouter au panier</a></td>
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td>Cybersécurité</td>
                                <td>SXS03</td>
                                <td>Sensiblilisation a la sécutité pour les utlisateurs</td>
                                <td>7h</td>
                                <td>Intermédiaire</td>
                                <td>Aucun</td>
                                <td> <a href="viewCart.php">Ajouter au panier</a></td>
                            </tr>
                            <tr>
                                <th scope="row">4</th>
                                <td>Cybersécurité</td>
                                <td>SXS04</td>
                                <td>Se protéger contre les virus et malwares</td>
                                <td>14h</td>
                                <td>Tout expert</td>
                                <td>bonnes
                                    connaissances de
                                    la gestion de
                                    postes windows
                                    en réseau</td>
                                    <td> <a href="viewCart.php">Ajouter au panier</a></td>
                            </tr>
                            <tr>
                                <th scope="row">5</th>
                                <td>Cybersécurité</td>
                                <td>SXS05</td>
                                <td>Sécurité WIFI</td>
                                <td>14h</td>
                                <td>Tout Expert</td>
                                <td>bonnes
                                    connaissances
                                    réseaux et
                                    protocoles TCP/IP</td>
                                    <td> <a href="viewCart.php">Ajouter au panier</a></td>


                            </tr>
                            <tr>
                                <th scope="row">6</th>
                                <td>Cybersécurité</td>
                                <td>SXS06</td>
                                <td>Sécurité Windows</td>
                                <td>21h</td>
                                <td>Tout Expert</td>
                                <td>bonnes
                                    connaissances
                                    administration
                                    windows réseau
                                    et système
                                    vitualisé</td>
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