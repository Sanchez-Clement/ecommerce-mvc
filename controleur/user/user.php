<?php if (!isset($_POST['id'])) {
require "controleur/user/list_produit.php";

} else {
  require "detail_produit_post.php";
} ?>
