<?php
function connexion($pseudo, $passwords) {
global $bdd;
  $reponse = $bdd->prepare('SELECT id, pseudo, passwords FROM administration WHERE pseudo = :pseudo AND passwords = :passwords');
  $reponse->execute(array(
  'pseudo' => $pseudo ,
  'passwords' => $passwords
  ));
  $connexion = $reponse->fetchAll();
  return $connexion;
}






 ?>
