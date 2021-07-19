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

<title>Formation - Systeme d'exploitation</title>
</head>

<body>

    <div class="container">
        <ul class="margin">
            <li><a href="https://sqwazyxter-formation.com/index.php"> Accueil</a></li>
            <li class="ariane"><a href="https://sqwazyxter-formation.com/catalogue.php">Catalogue</a></li>
            <li class="ariane">Formation Systeme d'exploitation</li>
        </ul>
    </div>


    <h3 class="h3">FORMATION SYSTÈME D'EXPLOITATION</h3>


    <div class="container">
        <div class="row">
            <div class="col-3">

            </div>
            <div class="col-4">
                <img src="img/620px-GNU_and_Tux.svg.png" alt="" srcset="">
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
                                <td>GNU/LINUX</td>
                                <td>SXL01</td>
                                <td>Présentation et prise en main de votre ordinateur sous GNU/LINUX</td>
                                <td>7h</td>
                                <td>tout public</td>
                                <td>Aucun</td>
                                <td> <a href="viewCart.php">Ajouter au panier</a></td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>GNU/LINUX</td>
                                <td>SXL02</td>
                                <td>Sécuriser le système -Les techniques de sécurisation</td>
                                <td>35h</td>
                                <td>Public Expert</td>
                                <td>Aucun</td>
                                <td> <a href="viewCart.php">Ajouter au panier</a></td>
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td>GNU/LINUX</td>
                                <td>SXS03</td>
                                <td>Administration niveau I - installation et mise en œuvre</td>
                                <td>35h</td>
                                <td>public Expert</td>
                                <td>avoir suivi " linux
                                    commandes de
                                    base"</td>
                                    <td> <a href="viewCart.php">Ajouter au panier</a></td>
                            </tr>
                            <tr>
                                <th scope="row">4</th>
                                <td>GNU/LINUX</td>
                                <td>SXL03</td>
                                <td>Sécuriser le système -Les techniques de sécurisation</td>
                                <td>35h</td>
                                <td>Public Expert</td>
                                <td>avoir suivi " linux
                                    administration
                                    niveau I"</td>
                                    <td> <a href="viewCart.php">Ajouter au panier</a></td>
                            </tr>
                            <tr>
                                <th scope="row">5</th>
                                <td>GNU/LINUX</td>
                                <td>SXL04</td>
                                <td>Les services réseaux - La puissance des outils Open Source</td>
                                <td>35h</td>
                                <td>Tout Expert</td>
                                <td>avoir suivi " linux
                                    administration
                                    niveau I"</td>
                                    <td> <a href="viewCart.php">Ajouter au panier</a></td>


                            </tr>
                            <tr>
                                <th scope="row">6</th>
                                <td>GNU/LINUX</td>
                                <td>SXL05</td>
                                <td>Commandes de base - Les bases pour l'administration</td>
                                <td>21h</td>
                                <td>intermédiaire</td>
                                <td>aucun</td>
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