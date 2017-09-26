<?php
function get_produits() {


$reponse = connect()->query('
SELECT i.id id_article, i.name nom_article, i.accroche accroche_artcile, img.nom nom_image
FROM informatique i
INNER JOIN images img
ON i.id = img.id_produits
 ');

 $produits= $reponse->fetchAll();
 return $produits;
}
 ?>
