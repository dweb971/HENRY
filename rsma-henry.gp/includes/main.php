<body>
    <div class="page-wrapper bg-gra-03 p-t-45 p-b-50">
        <div class="wrapper wrapper--w790">
            <div class="card-5">
                <div class="card-heading">
                    <h2 class="title">Formulaire d'inscription</h2>
                </div>
                <div class="card-body">
                    <form method="POST" action="traitement.php" class="needs-validation" novalidate>
                        <div class="form-row">
                            <div class="name">Civilité (*)</div>
                            <div class="value">
                                <div class="input-group">
                                    <div class="rs-select2 js-select-simple select--no-search">
                                        <select name="civilite" required>
                                            <option disabled="disabled" selected="selected" value="">Choisissez votre civilité :
                                            </option>
                                            <option value="monsieur">Monsieur</option>
                                            <option value="madame">Madame</option>
                                            <option value="mademoiselle">Mademoiselle</option>
                                        </select>
                                        <div class="select-dropdown"></div>
                                        <div class="valid-feedback">
                                            Champ correct!
                                        </div>
                                        <div class="invalid-feedback">
                                            Veuillez selectionner une civilité.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-row m-b-55">
                            <div class="name">Nom (*)</div>
                            <div class="value">
                                <div class="row row-space">
                                    <div class="col-6">
                                        <div class="input-group-desc">
                                            <input class="input--style-5" type="text" name="prenom" maxlength="55" placeholder="Prénom" required>
                                            <div class="valid-feedback">
                                                Champ correct!
                                            </div>
                                            <div class="invalid-feedback">
                                                Veuillez entrer un prénom.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="input-group-desc">
                                            <input class="input--style-5" type="text" name="nom" maxlength="100" placeholder="NOM" required>
                                            <div class="valid-feedback">
                                                Champ correct!
                                            </div>
                                            <div class="invalid-feedback">
                                                Veuillez entrer un nom.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Téléphone (*)</div>
                            <div class="value">
                                <div class="row row-refine">
                                    <div class="col-9">
                                        <div class="input-group-desc">
                                            <input class="input--style-5" type="text" name="telephone" maxlength="15" required>
                                            <div class="valid-feedback">
                                                Champ correct!
                                            </div>
                                            <div class="invalid-feedback">
                                                Veuillez entrer un numéro de téléphone.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-3">

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Email (*)</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="email" name="email" maxlength="160" required>
                                    <div class="valid-feedback">
                                        Champ correct!
                                    </div>
                                    <div class="invalid-feedback">
                                        Veuillez entrer une adresse email.
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Mot de passe</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="password" name="motdepasse" minlength="6" maxlength="20">
                                    <div class="valid-feedback">
                                        Champ correct!
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Adresse</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="text" name="adresse" maxlength="60">
                                    <div class="valid-feedback">
                                        Champ correct!
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Adresse complémentaire</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="text" name="complementaire">
                                    <div class="valid-feedback">
                                        Champ correct!
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Code Postal</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="text" name="postal" maxlength="5">
                                    <div class="valid-feedback">
                                        Champ correct!
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Ville</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="text" name="ville" maxlength="40">
                                    <div class="valid-feedback">
                                        Champ correct!
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Pays</div>
                            <div class="value">
                                <div class="input-group">
                                    <div class="rs-select2 js-select-simple select--no-search">
                                        <select name="pays">
                                            <option disabled="disabled" selected="selected" value="">Choisissez votre pays :</option>
                                            <option value="guadeloupe">Guadeloupe</option>
                                            <option value="martinique">Martinique</option>
                                            <option value="reunion">La Réunion</option>
                                            <option value="france">France</option>
                                        </select>
                                        <div class="valid-feedback">
                                            Champ correct!
                                        </div>
                                        <div class="select-dropdown"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <button class="btn btn--radius-2 btn--red" style="background: #ff4b5a;" type="submit">Enregistrer</button>
                        </div>
                    </form>
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
                </div>
            </div>
        </div>
    </div>