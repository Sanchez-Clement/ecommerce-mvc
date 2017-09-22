<?php
function addProduct ($description,$nom,$accroche ,$prix,$pseudo,$imagenom,$imagetype,$imagesize) {
global $bdd;

      $req = $bdd->prepare('INSERT INTO informatique (description, name, accroche, prix,auteur) VALUES(:description, :name, :accroche, :prix, :auteur)');
      $req->execute(array(
  'description' => $description,
  'name' => $nom,
  'accroche' => $accroche ,
  'prix' => $prix,
  'auteur' => $_SESSION["pseudo"]

  ));
      // recupération de l'ID du produit créer
      $idLastProduct = $bdd ->  lastInsertId();


      // requete pour ajouter l'image à la table image avec l'id du produot
      $req = $bdd->prepare('INSERT INTO images (nom, id_produits, type, size) VALUES(:name, :id_produits, :type, :size)');
      $req->execute(array(
  'name' => $_FILES['image']['name'],
  'id_produits' => $idLastProduct,
  'type' => $_FILES['image']['type'] ,
  'size' => $_FILES['image']['size']


  ));



}



 ?>
