<?php
require 'modele/admin/top_vue.php';

$topvues = topvue();


foreach($topvues as $cle => $topvue)
{
    $topvues[$cle]['name'] = htmlspecialchars( $topvue['name']);
    $topvues[$cle]['vue'] = $topvue['vue'];

}

require 'vue/admin/top_vue.php';

 ?>
