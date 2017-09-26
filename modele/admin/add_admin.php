<?php
function addAdmin($userName, $userPassword)
{

    $req = connect()->prepare('INSERT INTO administration (pseudo, passwords) VALUES(:pseudo, :passwords)');
    $req->execute(array(
  'pseudo' => $userName,
  'passwords' => sha1($userPassword)


  ));
}
