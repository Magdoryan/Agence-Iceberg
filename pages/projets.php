<?php

	include('../php/traduction.php');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- favicon -->
    <link rel="icon" href="img/logo.png" />
    <title>Projet</title>
    <!-- CSS -->
    <link rel="stylesheet" href="../css/reset.css">
    <link rel="stylesheet" href="../css/pages.css">
</head>
<body class="body projets">
    <!-- burger -->
    <header>
        <a href="../index.php#Accueil"> <img src="../img/logo.png" alt="logo" class="logo"> </a>
        <span id="burger"><a href="#"> <img src="../img/burger.png" alt="burger" class="burger"> </a> </span>
    </header>
    <!-- menu -->
    <section id="menuSection" class="menu displayBurger">
        <nav class="close">
            <img id="close" src="../img/close.png" alt="close">
        </nav>
        <nav class="element">
            <ul id="menu">
                <li> <a href="../index.php#Accueil" class="aMenu" id="Acc"><?php echo $trans[ 'menu_accueil' ]?></a> </li>
                <li> <a href="../index.php#Presentation" class="aMenu" id="Pre"><?php echo $trans[ 'menu_presentation' ]?></a> </li>
                <li> <a href="../index.php#Equipe" class="aMenu" id="Equ"><?php echo $trans[ 'menu_equipe' ]?></a> </li>
                <li> <a href="../index.php#Projets" class="aMenu" id="Pro"><?php echo $trans[ 'menu_projets' ]?></a> </li>
                <li> <a href="../index.php#Contact" class="aMenu" id="Con">Contact</a> </li>
                <li> <a href="../index.php?lang=fr" class="aMenu">FR</a> / <a href="../index.php?lang=en" class="aMenu">EN</a>
                <li> <a href="https://www.instagram.com/agence_iceberg/?hl=fr"><i class="fab fa-instagram padding"></i></a> <a href="https://www.facebook.com/Agence-Iceberg-100899134649290/?ref=search&__tn__=%2Cd%2CP-R&eid=ARBZ0YA06I7Y2TJ_Jdinkaybrow8y9VHlwy_g5xBhsHRHgGq1ncH36copIe4yn4k9oX-kyI3G2UNS2II"><i class="fab fa-facebook-square padding"></i></a> </li>
            </ul>
        </nav>
    </section>
    <h1><?php echo $trans['agence_projet']?></h1>
    <h2><?php echo $trans['agence_projet_sub']?></h2>
    <section class="total">
        <div class="row">
            <div class="cell">
                <a href="#Projets"> <div class="cellInside"> <img src="../img/client/logo/logo.png" alt="Instagram" class="logoClient"> </div> </a>
            </div>
        </div>
        <div class="row">
            <div class="cell">
                <a href="#Projets"> <div class="cellInside"> <img src="../img/client/logo/logo.png" alt="Instagram" class="logoClient"> </div> </a>
            </div>
        </div>
        <div class="row">
            <div class="cell">
                <a href="#Projets"> <div class="cellInside"> <img src="../img/client/logo/logo.png" alt="Instagram" class="logoClient"> </div> </a>
            </div>
        </div>
        <div class="row">
            <div class="cell">
                <a href="#Projets"> <div class="cellInside"> <img src="../img/client/logo/logo.png" alt="Instagram" class="logoClient"> </div> </a>
            </div>
        </div>
        <div class="row">
            <div class="cell">
                <a href="#Projets"> <div class="cellInside"> <img src="../img/client/logo/logo.png" alt="Instagram" class="logoClient"> </div> </a>
            </div>
        </div>
        <div class="row">
            <div class="cell">
                <a href="#Projets"> <div class="cellInside"> <img src="../img/client/logo/logo.png" alt="Instagram" class="logoClient"> </div> </a>
            </div>
        </div>
        <div class="row">
            <div class="cell">
                <a href="#Projets"> <div class="cellInside"> <img src="../img/client/logo/logo.png" alt="Instagram" class="logoClient"> </div> </a>
            </div>
        </div>
        <div class="row">
            <div class="cell">
                <a href="#Projets"> <div class="cellInside"> <img src="../img/client/logo/logo.png" alt="Instagram" class="logoClient"> </div> </a>
            </div>
        </div>
        <div class="row">
            <div class="cell">
                <a href="#Projets"> <div class="cellInside"> <img src="../img/client/logo/logo.png" alt="Instagram" class="logoClient"> </div> </a>
            </div>
        </div>
    </section>
    <!-- js -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <!-- main -->
        <script src="../js/main.js"></script>
</body>
</html>
