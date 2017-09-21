<?php require "modele/user/get_produits.php";
$produits = get_produits();


foreach($produits as $cle => $produit)
{
    $produits[$cle]['id_article'] = $produit['id_article'];
    $produits[$cle]['nom_image'] = htmlspecialchars($produit['nom_image']);
    $produits[$cle]['nom_article'] = htmlspecialchars($produit['nom_article']);
    $produits[$cle]["accroche_artcile"] = htmlspecialchars($produit["accroche_artcile"]);
}


?>


<?php require "vue/user/user.php"; ?>
