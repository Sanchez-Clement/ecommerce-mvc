<?php
if (!isset($_SESSION["pseudo"])) {
require "vue/admin/connexion.php";
} else {
require "controleur/admin/add_product.php";
require "controleur/admin/top_vue.php";
require "controleur/admin/add_admin.php";
require "controleur/admin/last_product.php";
}



 ?>
