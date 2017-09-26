<?php
function detail_produit($id) {


  $reponse= connect()->prepare('
  SELECT i.description description_article, i.name nom_article,  img.nom nom_image
  FROM informatique i
  INNER JOIN images img
  ON i.id = img.id_produits
  WHERE i.id = ?

   ');


   $req = connect()->prepare('UPDATE informatique SET vue = vue + 1 WHERE id = :id');
   $req->execute(array(
   'id' => $_POST['id'],
   ));

  $reponse->execute([$id]);
$produit = $reponse->fetchAll();
return $produit;
}


 ?>
