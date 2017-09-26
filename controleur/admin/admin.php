<?php
if (!isset($_SESSION["pseudo"])) {
require "vue/admin/connexion.php";
} else {
  require "vue/admin/admin.php";
require "vue/admin/add_product.php";
require "controleur/admin/top_vue.php";
require "vue/admin/add_admin.php";
require "controleur/admin/last_product.php";
}



 ?>
