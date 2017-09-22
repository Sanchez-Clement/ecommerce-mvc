<?php

function lastvue() {
  global $bdd;
  $reponse = $bdd->query('SELECT id, name,auteur FROM informatique ORDER BY id DESC LIMIT 0 , 5');
  $lastvues = $reponse -> fetchAll();
  return $lastvues;
}


 ?>
