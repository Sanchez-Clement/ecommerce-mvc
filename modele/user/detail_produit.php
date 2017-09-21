<?php
function detail_produit($id) {
global $bdd;
  $reponse= $bdd->prepare('
  SELECT i.description description_article, i.name nom_article,  img.nom nom_image
  FROM informatique i
  INNER JOIN images img
  ON i.id = img.id_produits
  WHERE i.id = ?

   ');
  $reponse->execute([$id]);
$produit = $reponse->fetchAll();
return $produit;
}


 ?>
