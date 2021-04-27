<?php include("includes/header.php"); ?>
<title>Sqwazyxter-formation - Réservation</title>
</head>

<body>
    <div class="">
        <ul class="margin2">
            <li><a href="index.php"> Accueil</a></li>
            <li class="ariane">Réservation</li>
        </ul>
    </div>

    <div class="container">
        <div class="row">
            <h3 class="titleAchat">RÉSERVATION</h3>
        </div>
    </div>
    <form action="traitementReservation.php" method="post" class="needs-validation" novalidate>
        <h4 class="placeStep1">ETAPE 1 - Entrez votre nom et prénom</h4>


        <div class="container">
            <div class="row">
                <div class="col-4">
                    <div class="form-group">
                        Nom (*) :
                        <input type="text" class="form-control" id="nomForm" placeholder="NOM" name="nomForm" maxlength="1000"
                            minlength="1" required>
                        <div class="valid-feedback">
                            Bon !
                        </div>
                        <div class="invalid-feedback">
                            Indiquez votre NOM !
                        </div>
                    </div>
                    <div class="form-group">
                        Prenom (*) :
                        <input type="text" class="form-control" id="prenomForm" placeholder="Prénom" name="prenomForm" maxlength="1984"
                            minlength="2" required>
                        <div class="valid-feedback">
                            Bon !
                        </div>
                        <div class="invalid-feedback">
                            Indiquez votre prénom !
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <h4 class="placeStep1">ETAPE 2 - Choisissez une Salle</h4>

        <div class="container">
            <div class="row">
                <div class="col-4">
                    <img src="img/salle-informatique.jpg" alt="" class="tailleImg2">
                    <input class="advc_checkboxSearch" type="radio" value="salle1" name="salleFrm">
                    Salle 1
                </div>
                <div class="col-4">

                    <img src="img/salle-informatique.jpg" alt="" class="tailleImg2">
                    <input class="advc_checkboxSearch" type="radio" value="salle2" name="salleFrm">
                    Salle 2
                </div>
                <div class="col-4">
                    <img src="img/salle-informatique.jpg" alt="" class="tailleImg2">
                    <input class="advc_checkboxSearch" type="radio" value="salle3" name="salleFrm">
                    Salle 3
                </div>
            </div>
        </div>


        <h4 class="placeStep1">ETAPE 3 - Choisissez la date</h4>
        <div class="container">
            <div class="row">
                <select class="custom-select" id="selectedM" required>
                    <option value="1" id="mois">Janvier</option>
                    <option value="2" id="mois">Février</option>
                    <option value="3" id="mois">Mars</option>
                    <option value="4" id="mois">Avril</option>
                    <option value="5" id="mois">Mai</option>
                    <option value="6" id="mois">Juin</option>
                    <option value="7" id="mois">Juillet</option>
                    <option value="8" id="mois">Août</option>
                    <option value="9" id="mois">Septembre</option>
                    <option value="10" id="mois">Octobre</option>
                    <option value="11" id="mois">Novembre</option>
                    <option value="12" id="mois">Décembre</option>
                </select>
                <table class="table table-bordered table-sm" id="agenda" required>
                    <thead>
                        <!--entête tableau-->
                        <tr>
                            <th> Lundi </th>
                            <th> Mardi </th>
                            <th> Mercredi </th>
                            <th> Jeudi </th>
                            <th> Vendredi </th>
                            <th> Samedi </th>
                            <th> Dimanche </th>
                        </tr>
                    </thead>
                    <tbody>
                        <!--corps du tableau-->
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                    </tbody>
                </table>
                <h4 class="placeStep1">Réserver pour :</h4>
                <div class="form-group">
                    <div class="placeStep1 form-check">
                        <input class="form-check-input" type="radio" name="periodeFrm" id="exampleRadios1"
                            value="matin">
                        <label class="form-check-label" for="exampleRadios1">
                            La matinée
                        </label>
                    </div>
                    <div class="placeStep1 form-check">
                        <input class="form-check-input" type="radio" name="periodeFrm" id="exampleRadios2"
                            value="apresmidi">
                        <label class="form-check-label" for="exampleRadios2">
                            L'après-midi
                        </label>
                    </div>
                    <div class="placeStep1 form-check">
                        <input class="form-check-input" type="radio" name="periodeFrm" id="exampleRadios2"
                            value="journee">
                        <label class="form-check-label" for="exampleRadios2">
                            La journée
                        </label>
                    </div>
                    <div class="valid-feedback">
                        Bon !
                    </div>
                    <div class="invalid-feedback">
                        Indiquez la periode !
                    </div>
                </div>
                <div>
                    <input type="hidden" name="rdvFrm" value="" id="rdvFrm" required>
                    <input type="hidden" name="action" value="rdv">
                </div>

            </div>

        </div>
        <h4 class="placeStep1">ETAPE 4 - Valider</h4>

        <div class="container">
            <div class="row">
                <button type="submit" class="btn btn-primary marge-bouton btnPlace">Valider</button>
            </div>
        </div>
    </form>

    <?php include("includes/footer.php"); ?>