<?php
ini_set('display_errors', 1);

//autoloader
spl_autoload_register(function ($name) {
    echo "Tentative de chargement de $name.\n";
    throw new Exception("Impossible de charger $name.");
});
try {
    // instanciation des classes
    include("scripts/Connect.php");
    include("scripts/Client.php");
 
 } catch (Exception $e) {
     echo $e->getMessage(), "\n";
 }

$action = $_POST['action'];
if($action === 'rdv'){

    //creation obj PDO
    $db = new Connect();

    //traitement formulaire rdv
    $client = new Client($db);
    $client->prise_rdv($_POST);
}
