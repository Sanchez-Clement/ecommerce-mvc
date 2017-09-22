<?php session_start();
// include "php/infoSite.php"
?>





<!doctype html>

<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Clément</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        <!-- Place favicon.ico in the root directory -->
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link rel="stylesheet" href="css/normalize.css">

        <link rel="stylesheet" href="css/materialize.min.css">
        <link rel="stylesheet" href="css/main.css">

<script src="https://use.fontawesome.com/88840399dd.js"></script>

        <script src="js/vendor/modernizr-2.8.3.min.js"></script>
    </head>
    <body>
      <header id="entete">


      <nav class="lime ">
        <div class="nav-wrapper">
          <a href="index.php" class="brand-logo"><img src="img/logo.png" alt="" id="logoimage"></a>
      <a href="#" data-activates="mobile-demo" class="button-collapse" ><i class="material-icons">menu</i></a>
          <ul id="nav-mobile" class="right hide-on-med-and-down">
            <li><a href=""><i class="material-icons">search</i></a></li>
            <li><a href=""><i class="material-icons">view_module</i></a></li>

            <li><a href="index.php?section=admin"><i class="material-icons">account_circle</i></a></li>

            <?php if (isset($_SESSION['pseudo'])) { ?>
            <li><a href="php/logout.php" ><i class="material-icons">cancel</i></a></li>
            <?php } ?>
          </ul>
          <ul class="side-nav" id="mobile-demo">
            <li><a href=""><i class="material-icons">search</i></a></li>
            <li><a href=""><i class="material-icons">view_module</i></a></li>

            <li><a href="php/admin.php"><i class="material-icons">account_circle</i></a></li>
            <li><a href="php/logout.php" ><i class="material-icons">cancel</i></a></li>
          </ul>


        </div>
      </nav>
      </header>
      <main class ="row">
