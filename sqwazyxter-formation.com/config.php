<?php 
    try 
    {
        $bdd = new PDO("mysql:host=localhost;dbname=sqwazyxter;charset=utf8", "sqwazyxter", "sqwazyxter");
    }
    catch(Exception $e)
    {
        die('Erreur : '.$e->getMessage());
    }
    ?>