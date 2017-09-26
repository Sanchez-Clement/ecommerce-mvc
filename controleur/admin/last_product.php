<?php
require 'modele/admin/last_product.php';

$lastvues = lastvue();


foreach ($lastvues as $cle => $lastvue) {
    $lastvues[$cle]['name'] = htmlspecialchars($lastvue['name']);
    $lastvues[$cle]['auteur'] = htmlspecialchars($lastvue['auteur']);
}

require 'vue/admin/last_product.php';
