<?php require "modele/connexion_sql.php" ?>
<?php require "vue/header.php" ?>
<?php if (isset($_GET["section"]) && $_GET["section"]=="admin") {
    require "controleur/admin/admin.php";
} else {
    require "controleur/user/user.php";
}?>
<?php require "vue/footer.php" ?>
