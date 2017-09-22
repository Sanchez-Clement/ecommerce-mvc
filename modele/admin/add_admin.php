<?php
function addAdmin ($userName,$userPassword ) {
global $bdd;
  $req = $bdd->prepare('INSERT INTO administration (pseudo, passwords) VALUES(:pseudo, :passwords)');
  $req->execute(array(
  'pseudo' => $userName,
  'passwords' => sha1($userPassword)


  ));
}

 ?>
