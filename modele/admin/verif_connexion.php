<?php
function connexion($pseudo, $passwords) {

  $reponse = connect()->prepare('SELECT id, pseudo, passwords FROM administration WHERE pseudo = :pseudo AND passwords = :passwords');
  $reponse->execute(array(
  'pseudo' => $pseudo ,
  'passwords' => $passwords
  ));
  $connexion = $reponse->fetchAll();
  return $connexion;
}






 ?>
