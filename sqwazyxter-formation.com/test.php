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




<title>Test de niveau</title>


<div class="container">
    <div class="row">
        <h2>Test de niveau en informatique</h2>
    </div>
    <div class="row">
        <h4>Cochez les cases selon votre niveau :</h4>
    </div>
    <div class="row">
        <div class="col-12">
            <form action="traitementTest.php" method="POST" class="needs-validation" novalidate>
                <h4 class="gras">Savez-vous ? :</h4>
                <div class="form-group" required>
                    1. Ouvrir une session windows ?
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="question1" value="debutant" required>
                        <label class="form-check-label">
                            Débutant
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="question1" value="intermediaire" required>
                        <label class="form-check-label">
                            Intermédiaire
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="question1" value="avance" required>
                        <label class="form-check-label">
                            Avancé
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="question1" value="inconnu" required>
                        <label class="form-check-label">
                            Inconnu
                        </label>
                        <div class="valid-feedback">
                            Ok
                        </div>
                        <div class="invalid-feedback">
                            Veuillez cocher une réponse.
                        </div>
                    </div>
                </div><br>
                <div class="form-group">
                    2. Créer un dossier informatique ?
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="question2" value="debutant" required>
                        <label class="form-check-label">
                            Débutant
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="question2" value="intermediaire" required>
                        <label class="form-check-label">
                            Intermédiaire
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="question2" value="avance" required>
                        <label class="form-check-label">
                            Avancé
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="question2" value="inconnu" required>
                        <label class="form-check-label">
                            Inconnu
                        </label>
                        <div class="valid-feedback">
                            Ok
                        </div>
                        <div class="invalid-feedback">
                            Veuillez cocher une réponse.
                        </div>
                    </div>
                </div><br>
                <div class="form-group">
                    3. Copier coller un document ou du texte ?
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="question3" value="debutant" required>
                        <label class="form-check-label">
                            Débutant
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="question3" value="intermediaire" required>
                        <label class="form-check-label">
                            Intermédiaire
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="question3" value="avance" required>
                        <label class="form-check-label">
                            Avancé
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="question3" value="inconnu" required>
                        <label class="form-check-label">
                            Inconnu
                        </label>
                        <div class="valid-feedback">
                            Ok
                        </div>
                        <div class="invalid-feedback">
                            Veuillez cocher une réponse.
                        </div>
                    </div>
                </div><br>
                <div class="form-group">
                    4. Retrouver une information sur internet ?
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="question4" value="debutant" required>
                        <label class="form-check-label">
                            Débutant
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="question4" value="intermediaire" required>
                        <label class="form-check-label">
                            Intermédiaire
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="question4" value="avance" required>
                        <label class="form-check-label">
                            Avancé
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="question4" value="inconnu" required>
                        <label class="form-check-label">
                            Inconnu
                        </label>
                        <div class="valid-feedback">
                            Ok
                        </div>
                        <div class="invalid-feedback">
                            Veuillez cocher une réponse.
                        </div>
                    </div>
                </div><br>
                <div class="form-group">
                    5. Récupérer une image sur le web ?
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="question5" value="debutant" required>
                        <label class="form-check-label">
                            Débutant
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="question5" value="intermediaire" required>
                        <label class="form-check-label">
                            Intermédiaire
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="question5" value="avance" required>
                        <label class="form-check-label">
                            Avancé
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="question5" value="inconnu" required>
                        <label class="form-check-label">
                            Inconnu
                        </label>
                        <div class="valid-feedback">
                            Ok
                        </div>
                        <div class="invalid-feedback">
                            Veuillez cocher une réponse.
                        </div>
                    </div>
                </div><br>
                <div class="form-group">
                    6. Aller sur un site internet de l'état ?
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="question6" value="debutant" required>
                        <label class="form-check-label">
                            Débutant
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="question6" value="intermediaire" required>
                        <label class="form-check-label">
                            Intermédiaire
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="question6" value="avance" required>
                        <label class="form-check-label">
                            Avancé
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="question6" value="inconnu" required>
                        <label class="form-check-label">
                            Inconnu
                        </label>
                        <div class="valid-feedback">
                            Ok
                        </div>
                        <div class="invalid-feedback">
                            Veuillez cocher une réponse.
                        </div>
                    </div>
                </div><br>
                <div class="form-group">
                    7. Ecrire un courriel ?
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="question7" value="debutant" required>
                        <label class="form-check-label">
                            Débutant
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="question7" value="intermediaire" required>
                        <label class="form-check-label">
                            Intermédiaire
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="question7" value="avance" required>
                        <label class="form-check-label">
                            Avancé
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="question7" value="inconnu" required>
                        <label class="form-check-label">
                            Inconnu
                        </label>
                        <div class="valid-feedback">
                            Ok
                        </div>
                        <div class="invalid-feedback">
                            Veuillez cocher une réponse.
                        </div>
                    </div>
                </div><br>
                <div class="form-group">
                    8. Envoyer un mél avec une pièce jointe ?
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="question8" value="debutant" required>
                        <label class="form-check-label">
                            Débutant
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="question8" value="intermediaire" required>
                        <label class="form-check-label">
                            Intermédiaire
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="question8" value="avance" required>
                        <label class="form-check-label">
                            Avancé
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="question8" value="inconnu" required>
                        <label class="form-check-label">
                            Inconnu
                        </label>
                        <div class="valid-feedback">
                            Ok
                        </div>
                        <div class="invalid-feedback">
                            Veuillez cocher une réponse.
                        </div>
                    </div>
                </div><br>
                <div class="form-group">
                    9. Créer un diaporama ?
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="question9" value="debutant" required>
                        <label class="form-check-label">
                            Débutant
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="question9" value="intermediaire" required>
                        <label class="form-check-label">
                            Intermédiaire
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="question9" value="avance" required>
                        <label class="form-check-label">
                            Avancé
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="question9" value="inconnu" required>
                        <label class="form-check-label">
                            Inconnu
                        </label>
                        <div class="valid-feedback">
                            Ok
                        </div>
                        <div class="invalid-feedback">
                            Veuillez cocher une réponse.
                        </div>
                    </div>
                </div><br>
                <div class="form-group">
                    10. Animer les transitions entre slide ?
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="question10" value="debutant" required>
                        <label class="form-check-label">
                            Débutant
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="question10" value="intermediaire" required>
                        <label class="form-check-label">
                            Intermédiaire
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="question10" value="avance" required>
                        <label class="form-check-label">
                            Avancé
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="question10" value="inconnu" required>
                        <label class="form-check-label">
                            Inconnu
                        </label>
                        <div class="valid-feedback">
                            Ok
                        </div>
                        <div class="invalid-feedback">
                            Veuillez cocher une réponse.
                        </div>
                    </div>
                </div><br>
                <div class="form-group">
                    11. Créer un document texte ?
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="question11" value="debutant" required>
                        <label class="form-check-label">
                            Débutant
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="question11" value="intermediaire" required>
                        <label class="form-check-label">
                            Intermédiaire
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="question11" value="avance" required>
                        <label class="form-check-label">
                            Avancé
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="question11" value="inconnu" required>
                        <label class="form-check-label">
                            Inconnu
                        </label>
                        <div class="valid-feedback">
                            Ok
                        </div>
                        <div class="invalid-feedback">
                            Veuillez cocher une réponse.
                        </div>
                    </div>
                </div><br>
                <div class="form-group">
                    12. Mettre en forme un document texte ?
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="question12" value="debutant" required>
                        <label class="form-check-label">
                            Débutant
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="question12" value="intermediaire" required>
                        <label class="form-check-label">
                            Intermédiaire
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="question12" value="avance" required>
                        <label class="form-check-label">
                            Avancé
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="question12" value="inconnu" required>
                        <label class="form-check-label">
                            Inconnu
                        </label>
                        <div class="valid-feedback">
                            Ok
                        </div>
                        <div class="invalid-feedback">
                            Veuillez cocher une réponse.
                        </div>
                    </div>
                </div><br>
                <div class="form-group">
                    13. Réaliser un calcul automatique avec tableur ?
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="question13" value="debutant" required>
                        <label class="form-check-label">
                            Débutant
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="question13" value="intermediaire" required>
                        <label class="form-check-label">
                            Intermédiaire
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="question13" value="avance" required>
                        <label class="form-check-label">
                            Avancé
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="question13" value="inconnu" required>
                        <label class="form-check-label">
                            Inconnu
                        </label>
                        <div class="valid-feedback">
                            Ok
                        </div>
                        <div class="invalid-feedback">
                            Veuillez cocher une réponse.
                        </div>
                    </div>
                </div><br>
                <div class="form-group">
                    14. Organiser et classer des documents ?
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="question14" value="debutant" required>
                        <label class="form-check-label">
                            Débutant
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="question14" value="intermediaire" required>
                        <label class="form-check-label">
                            Intermédiaire
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="question14" value="avance" required>
                        <label class="form-check-label">
                            Avancé
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="question14" value="inconnu" required>
                        <label class="form-check-label">
                            Inconnu
                        </label>
                        <div class="valid-feedback">
                            Ok
                        </div>
                        <div class="invalid-feedback">
                            Veuillez cocher une réponse.
                        </div>
                    </div>
                </div><br>
                <div class="form-group">
                    15. Affecter une macro à un bouton ?
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="question15" value="debutant" required>
                        <label class="form-check-label">
                            Débutant
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="question15" value="intermediaire" required>
                        <label class="form-check-label">
                            Intermédiaire
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="question15" value="avance" required>
                        <label class="form-check-label">
                            Avancé
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="question15" value="inconnu" required>
                        <label class="form-check-label">
                            Inconnu
                        </label>
                        <div class="valid-feedback">
                            Ok
                        </div>
                        <div class="invalid-feedback">
                            Veuillez cocher une réponse.
                        </div>
                    </div>
                </div><br>
                <div class="form-group">
                    16. Appliquer les principes de rédaction de courriel ?
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="question16" value="debutant" required>
                        <label class="form-check-label">
                            Débutant
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="question16" value="intermediaire" required>
                        <label class="form-check-label">
                            Intermédiaire
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="question16" value="avance" required>
                        <label class="form-check-label">
                            Avancé
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="question16" value="inconnu" required>
                        <label class="form-check-label">
                            Inconnu
                        </label>
                        <div class="valid-feedback">
                            Ok
                        </div>
                        <div class="invalid-feedback">
                            Veuillez cocher une réponse.
                        </div>
                    </div>
                </div><br>
                <div class="form-group">
                    17. Exploiter une base de donnée ?
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="question17" value="debutant" required>
                        <label class="form-check-label">
                            Débutant
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="question17" value="intermediaire" required>
                        <label class="form-check-label">
                            Intermédiaire
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="question17" value="avance" required>
                        <label class="form-check-label">
                            Avancé
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="question17" value="inconnu" required>
                        <label class="form-check-label">
                            Inconnu
                        </label>
                        <div class="valid-feedback">
                            Ok
                        </div>
                        <div class="invalid-feedback">
                            Veuillez cocher une réponse.
                        </div>
                    </div>
                </div><br>
                <div class="form-group">
                    18. Créer un document de plusieurs pages ?
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="question18" value="debutant" required>
                        <label class="form-check-label">
                            Débutant
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="question18" value="intermediaire" required>
                        <label class="form-check-label">
                            Intermédiaire
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="question18" value="avance" required>
                        <label class="form-check-label">
                            Avancé
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="question18" value="inconnu" required>
                        <label class="form-check-label">
                            Inconnu
                        </label>
                        <div class="valid-feedback">
                            Ok
                        </div>
                        <div class="invalid-feedback">
                            Veuillez cocher une réponse.
                        </div>
                    </div>
                </div><br>
                <div class="form-group">
                    19. Insérer un graphique ?
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="question19" value="debutant" required>
                        <label class="form-check-label">
                            Débutant
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="question19" value="intermediaire" required>
                        <label class="form-check-label">
                            Intermédiaire
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="question19" value="avance" required>
                        <label class="form-check-label">
                            Avancé
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="question19" value="inconnu" required>
                        <label class="form-check-label">
                            Inconnu
                        </label>
                        <div class="valid-feedback">
                            Ok
                        </div>
                        <div class="invalid-feedback">
                            Veuillez cocher une réponse.
                        </div>
                    </div>
                </div><br>
                <button type="submit" class="btn btn-primary">Valider</button><br>
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
<?php include("includes/footer.php"); ?>