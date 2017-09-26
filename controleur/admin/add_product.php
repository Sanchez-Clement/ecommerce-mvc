<?php
session_start();
// verification de l'extension de l'image

$extension =["image/jpg","image/jpeg","image/png", "image/svg" ];
if (!in_array($_FILES['image']['type'], $extension)) {
    $_SESSION['errorproduct'] = "type de fichier non accepté";
    header('Location: ../../index.php?section=admin');


    // verification du poids de l'image
} elseif ($_FILES['image']['size'] >= 1000000) {
    $_SESSION['errorproduct'] = "Poids > 1 MO";
    header('Location: ../../index.php?section=admin');
} else {
    $_SESSION['errorproduct']=null;
    $nom = htmlspecialchars($_POST['titre']);
    $accroche = htmlspecialchars($_POST['accroche']);
    $prix = htmlspecialchars($_POST['prix']);
    $description= htmlspecialchars($_POST['description']);
    $pseudo = $_SESSION["pseudo"];
    $imagenom = htmlspecialchars($_FILES['image']['name']);
    $imagetype = htmlspecialchars($_FILES['image']['type']);
    $imagesize = htmlspecialchars($_FILES['image']['size']);



    require "../../modele/connexion_sql.php";
    require "../../modele/admin/add_product.php";


    addProduct($description, $nom, $accroche, $prix, $pseudo, $imagenom, $imagetype, $imagesize);


    $target_file = "../../img/produits/" .$_FILES['image']['name'] ;

    move_uploaded_file($_FILES['image']['tmp_name'], $target_file);
    header('Location: ../../index.php?section=admin');
}
