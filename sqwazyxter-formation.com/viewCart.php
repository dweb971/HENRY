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

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Shoping Cart</title>
    <link rel="stylesheet" href="css/style.css">
    <script src="js/bootstrap.js"></script>
</head>
<body>
    <div class="container">
    
        <div class="row">
            <h1 class="text-center border-bottom pb-4 mb-4">Produit(s) de votre panier</h1>
            <?php
                if(isset($_GET['value']) == "updated"){
            ?>
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <strong>Bravo!</strong> Votre produit a été mis a jour.
                    
                </div>
            <?php
                }else if(isset($_GET['value']) == "deleted"){
            ?>
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>Attention!</strong> Votre produit a été retiré du panier.
                    
                </div>
            <?php
                }
            ?>
        </div>

        <div class="row">
            <table class="table">
                <thead>
                    <tr>
                        <td>Sno</td>
                        <td>Nom</td>
                        <td>Prix</td>
                        <td>Quantité</td>
                        <td>Total</td>
                        <td>Modifier</td>
                        <td>Supprimer</td>
                
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $sno = 1;
                        $t = 0;
                        foreach($_SESSION as $product){
                            $p = 0;
                            $q = 0;
                            echo "<form action='editCart.php' method='POST'>";
                            echo "<tr>";
                                echo "<td>".$sno++."</td>";
                                foreach($product as $key => $value){
                                    if($key == 0){
                                        echo "<td>".$value."</td>";
                                        echo "<input type='hidden' name='pro$key' value='".$value."'>";
                                    }else if($key == 1){
                                        echo "<td>".$value."</td>";
                                        echo "<input type='hidden' name='pro$key' value='".$value."'>";
                                        $p = $value;
                                    }else if($key == 2){
                                        echo "<td><input placeholder='indiquer la quantité' type='text' name='pro$key' value='".$value."' class='form-control'></td>";
                                        $q = $value;
                                    }
                                }
                                $t = $p * $q;
                                echo "<td>".$t."</td>";
                                echo "<td><input type='submit' name='event' value='Update' class='btn btn-warning'></td>";
                                echo "<td><input type='submit' name='event' value='Delete' class='btn btn-danger'></td>";
                            echo "</tr>";
                            echo "</form>";
                        }
                    ?>
                </tbody>
            </table>
        </div>

    </div>
</body>
</html>