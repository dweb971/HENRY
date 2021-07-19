
<div class="container">
    <div class="row">
        <div class="col-12">
            <h1>Mon compte</h1>
            <h2>Bonjour <?php echo $_SESSION['user']; ?>!</h2>
            <h3>salut <?php echo $_SESSION['prenom'];  ?></h3>
        </div>
    </div>
</div>

<div class="container">
<div class="row">
<div class="col-md-6">
<a class="btn btn-light" href="#" data-toggle="modal" data-target="#change_password"> Changer mon mot de passe</a>
</div>
<div class="col-md-6">
<a class="btn btn-light" href="https://sqwazyxter-formation.com/monProfil.php"> Acceder a mes informations personelles</a>
<a class="dropdown-item " href="deconnexion.php"><font color="red">Deconnexion</font></a>
</div>
</div>
</div>



