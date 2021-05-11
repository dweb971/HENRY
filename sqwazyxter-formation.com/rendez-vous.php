<?php include("includes/header.php"); ?>
<title>sqwazyxter/Formation - Rendez-vous</title>
</head>

<body>

    <h1>RENDEZ-VOUS</h1>
    <form action="traitement.php" method="post" class="needs-validation" novalidate>
        <div class="container">
            <div class="row">
                <div class="col-6">

                    <div class="form-group">
                        <input type="text" class="form-control" id="nomFrm" placeholder="NOM" name="nomFrm"
                            maxlength="1000" minlength="1" required>
                        <div class="valid-feedback">
                            Bon !
                        </div>
                        <div class="invalid-feedback">
                            Indiquez votre NOM !
                        </div>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="prenomFrm" placeholder="Prénom" name="prenomFrm"
                            maxlength="1984" minlength="2" required>
                        <div class="valid-feedback">
                            Bon !
                        </div>
                        <div class="invalid-feedback">
                            Indiquez votre prénom !
                        </div>
                    </div>
                    <div class="form-group">
                        <input type="tel" class="form-control" id="telFrm" placeholder="Téléphone" name="telFrm"
                            maxlength="13" required>
                        <div class="valid-feedback">
                            Bon !
                        </div>
                        <div class="invalid-feedback">
                            Indiquez votre téléphone!
                        </div>
                    </div>
                    <div class="form-group">
                        <input type="mail" class="form-control" id="emailFrm" placeholder="Email" name="emailFrm"
                            maxlength="5977" minlength="7" required>
                        <div class="valid-feedback">
                            Bon !
                        </div>
                        <div class="invalid-feedback">
                            Indiquez votre email!
                        </div>
                    </div>
                    <div class="form-group">
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="raisonFrm"
                            placeholder="Raison de la visite"></textarea>
                        <div class="valid-feedback">
                            Bon !
                        </div>
                    </div>
                </div>
                <div class="col-6">
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
                        <div class="valid-feedback">
                            Looks good!
                        </div>
                        <div class="invalid-feedback">
                            Indiquez un mois !
                        </div>
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
                        <div class="invalid-feedback" id="agendaFrm">
                        Choisissez une date!
                    </div>
                    </table>
                    <div>
                        <select class="custom-select" id="heure" required>
                            <option value="" selected>Choisir une heure</option>
                            <option value="7:00">7h00</option>
                            <option value="7:40">7h40</option>
                            <option value="8:00">8h00</option>
                            <option value="8:40">8h40</option>
                            <option value="9:00">9h00</option>
                            <option value="9:40">9h40</option>
                            <option value="10:00">10h00</option>
                            <option value="10:40">10h40</option>
                            <option value="11:00">11h00</option>
                            <option value="11:40">11h40</option>
                            <option value="14:00">14h00</option>
                            <option value="14:30">14h30</option>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                            <div class="invalid-feedback">
                                Indiquez une heure!
                            </div>
                        </select>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                            <label class="form-check-label" for="defaultCheck1">
                                J'accepte le <a href="RGPD.php">Règlement Général sur la Protection des Données.</a>
                            </label>
                        </div>
                    </div>
                    <div>
                        <input type="hidden" name="rdvFrm" value="" id="rdvFrm" required>
                        <input type="hidden" name="heureFrm" value="" id="heureFrm" required>
                        <input type="hidden" name="action" value="rdv">
                    </div>
                    <div class="row">
                        <div class="col-10">

                        </div>
                        <div class="col-2">
                            <button type="submit" class="btn btn-primary marge-bouton">Valider</button>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>




    <?php include("includes/footer.php"); ?>