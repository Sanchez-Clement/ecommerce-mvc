<?php
$userName = htmlspecialchars($_POST['userName']);
$userPassword = htmlspecialchars($_POST['userPassword']);

require '../../modele/connexion_sql.php';
require '../../modele/admin/add_admin.php';

addAdmin ($userName,$userPassword ) ;

header('Location: ../../index.php?section=admin');
