<div class="starter-template container">
    <div class="row">
        <div class="col-md-4">

        </div>
        <div class="col-md-4">
            <form method="POST" action="traitement.php" class="needs-validation" novalidate>
                <div class="form-group">
                    <label>Civilité :</label>
                    <select class="form-control" name="civilite" required>
                        <option value="" selected>Choisissez votre civilité :</option>
                        <option>Monsieur</option>
                        <option>Madame</option>
                        <option>Mademoiselle</option>
                    </select>
                    <div class="valid-feedback">
                        Champ correct!
                    </div>
                    <div class="invalid-feedback">
                        Veuillez selectionner une civilité.
                    </div>
                </div>
                <div class="form-group">
                    <label>NOM : (*)</label>
                    <input type="text" class="form-control" name="nom" placeholder="NOM" maxlength="100" required>
                    <div class="valid-feedback">
                        Champ correct!
                    </div>
                    <div class="invalid-feedback">
                        Veuillez entrer un nom.
                    </div>
                </div>
                <div class="form-group">
                    <label>Prénom : (*)</label>
                    <input type="text" class="form-control" name="prenom" placeholder="Prénom" maxlength="55" required>
                    <div class="valid-feedback">
                        Champ correct!
                    </div>
                    <div class="invalid-feedback">
                        Veuillez entrer un prénom.
                    </div>
                </div>
                <div class="form-group">
                    <label>Téléphone : (*)</label>
                    <input type="tel" class="form-control" name="telephone" placeholder="ex: 0690123456" maxlength="15"
                        required>
                    <div class="valid-feedback">
                        Champ correct!
                    </div>
                    <div class="invalid-feedback">
                        Veuillez entrer un numéro de téléphone.
                    </div>
                </div>
                <div class="form-group">
                    <label>Email : (*)</label>
                    <input type="email" class="form-control" name="email" placeholder="ex: azerty@azerty.com"
                        maxlength="160" required>
                    <div class="valid-feedback">
                        Champ correct!
                    </div>
                    <div class="invalid-feedback">
                        Veuillez entrer une adresse email.
                    </div>
                </div>
                <div class="form-group">
                    <label>Mot de passe :</label>
                    <input type="password" class="form-control" name="motdepasse" minlength="6" maxlength="20">
                    <div class="valid-feedback">
                        Champ correct!
                    </div>
                </div>
                <div class="form-group">
                    <label>Adresse :</label>
                    <input type="text" class="form-control" name="adresse" maxlength="60">
                    <div class="valid-feedback">
                        Champ correct!
                    </div>
                </div>
                <div class="form-group">
                    <label>Adresse complémentaire :</label>
                    <input type="text" class="form-control" name="complementaire">
                    <div class="valid-feedback">
                        Champ correct!
                    </div>
                </div>
                <div class="form-group">
                    <label>Code postale :</label>
                    <input type="text" class="form-control" name="postal" maxlength="5">
                    <div class="valid-feedback">
                        Champ correct!
                    </div>
                </div>
                <div class="form-group">
                    <label>Ville :</label>
                    <input type="text" class="form-control" name="ville" maxlength="40">
                    <div class="valid-feedback">
                        Champ correct!
                    </div>
                </div>
                <div class="form-group">
                    <label>Pays :</label>
                    <select class="form-control" name="pays">
                        <option value="" selected>Choisissez votre pays :</option>
                        <option>Guadeloupe</option>
                        <option>Martinique</option>
                        <option>La Réunion</option>
                        <option>France</option>
                    </select>
                    <div class="valid-feedback">
                        Champ correct!
                    </div>
                </div>
                <p class="champ-obligatoire">(*) Champ obligatoire</p>
                <button type="submit" class="btn btn-primary">Submit</button>
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
        <div class="col-md-4">

        </div>
    </div>
