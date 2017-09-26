<?php

function topvue() {

  $reponse = connect()->query('SELECT id, name,vue FROM informatique ORDER BY vue DESC LIMIT 0 , 5');
$topvues = $reponse -> fetchAll();
return $topvues;
}

 ?>
