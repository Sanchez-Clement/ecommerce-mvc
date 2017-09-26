<?php
session_start();
$pseudo = htmlspecialchars($_POST["pseudo"]);
$passwords = sha1($_POST["password_user"]);
require "../../modele/connexion_sql.php";
require "../../modele/admin/verif_connexion.php";
$connexion = connexion($pseudo, $passwords);
if (!isset($connexion)){
header ('Location: ../../index.php?section=admin');

} else {
  $_SESSION["pseudo"] = $connexion[0]["pseudo"];
  $_SESSION['id'] = $connexion[0]["id"];

  header ('Location: ../../index.php?section=admin');
}
 ?>
