<?php echo $_POST['id'];
require "modele/connexion_sql.php";
require "modele/user/detail_produit.php";
$produit = detail_produit($_POST['id']);
require "vue/user/detail_produit.php"

 ?>
