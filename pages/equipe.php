<?php

	include('../php/traduction.php');

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- favicon -->
    <link rel="icon" href="../img/logo.png" />
    <title>Iceberg - Equipe</title>
    <!-- CSS -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" href="../css/reset.css">
    <link rel="stylesheet" href="../css/pages.css">
</head>
<body>
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
                <li> <a href="equipe.php?lang=fr" class="aMenu">FR</a> / <a href="equipe.php?lang=en" class="aMenu">EN</a>
                <li> <a href="https://www.instagram.com/agence_iceberg/?hl=fr"><i class="fab fa-instagram reseauSoc"></i></a> <a href="https://www.facebook.com/Agence-Iceberg-100899134649290/?ref=search&__tn__=%2Cd%2CP-R&eid=ARBZ0YA06I7Y2TJ_Jdinkaybrow8y9VHlwy_g5xBhsHRHgGq1ncH36copIe4yn4k9oX-kyI3G2UNS2II"><i class="fab fa-facebook-square reseauSoc"></i></a> </li>
            </ul>
        </nav>
    </section>
    <h1 class="equipeTitre"><?php echo $trans['agence_equipe']?></h1>

    <section class="equipeT2 marginE" id="tristan">
        <article class="losange">
            <div>
                <img data-aos="zoom-in" src="../img/team/tristan02.png" alt="tristan">
                <p>Tristan</p>
            </div>
        </article>
        <div class="infoP">
            <div data-aos="fade-down-left" class="textContainer">
                <img src="../img/question.png" alt="question">
                <p class="text"><?php echo $trans['agence_equipe_tristan']?></p>
            </div>
            <div data-aos="fade-left" class="textContainer">
                <img src="../img/speaking.png" alt="question">
                <blockquote class="text"> " <?php echo $trans['equipe_tristan_citation']?> "</blockquote>
            </div>
            <div data-aos="fade-up-left" class="textContainer">
                <img src="../img/parchemin.png" alt="question">
                <p class="text"> <?php echo $trans['equipe_tristan_texte']?> </p>
            </div>
        </div>
    </section>
    <section class="equipeT1" id="jennifer">
        <div class="infoP">
            <div data-aos="fade-down-right" class="textContainer">
                <img  src="../img/question.png" alt="question">
                <p class="text"> <?php echo $trans['agence_equipe_jennifer']?></p>
            </div>
            <div data-aos="fade-right" class="textContainer">
                <img src="../img/speaking.png" alt="question">
                <blockquote class="text"> " <?php echo $trans['equipe_jennifer_citation']?> "</blockquote>
            </div>
            <div data-aos="fade-up-right" class="textContainer">
                <img src="../img/parchemin.png" alt="question">
                <p class="text"><?php echo $trans['equipe_jennifer_texte']?></p>
            </div>
        </div>
        <article class="losange">
            <div>
                <img data-aos="zoom-in" src="../img/team/jennifer02.png" alt="jennifer">
                <p>Jennifer</p>
            </div>
        </article>
    </section>
    <section class="equipeT2" id="yann">
        <article class="losange">
            <div>
                <img data-aos="zoom-in" src="../img/team/yann02.png" alt="yann">
                <p>Yann</p>
            </div>
        </article>
        <div class="infoP">
            <div data-aos="fade-down-left" class="textContainer">
                <img src="../img/question.png" alt="question">
                <p class="text"><?php echo $trans['agence_equipe_dev']?></p>
            </div>
            <div data-aos="fade-left" class="textContainer">
                <img src="../img/speaking.png" alt="question">
                <blockquote class="text"> " <?php echo $trans['equipe_yann_citation']?> "</blockquote>
            </div>
            <div data-aos="fade-up-left" class="textContainer">
                <img src="../img/parchemin.png" alt="question">
                <p class="text"><?php echo $trans['equipe_yann_texte']?></p>
            </div>
        </div>
    </section>
    <section class="equipeT1" id="doryan">
        <div class="infoP">
            <div data-aos="fade-down-right" class="textContainer">
                <img src="../img/question.png" alt="question">
                <p class="text"><?php echo $trans['agence_equipe_dev']?></p>
            </div>
            <div data-aos="fade-right" class="textContainer">
                <img src="../img/speaking.png" alt="question">
                <blockquote class="text">" <?php echo $trans['equipe_doryan_citation']?> "</blockquote>
            </div>
            <div data-aos="fade-up-right" class="textContainer">
                <img src="../img/parchemin.png" alt="question">
                <p class="text"><?php echo $trans['equipe_doryan_texte']?></p>
            </div>
        </div>
        <article class="losange">
            <div>
                <img data-aos="zoom-in" src="../img/team/doryan02.png" alt="Doryan">
                <p>Doryan</p>
            </div>
        </article>
    </section>
    
    <!-- js -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <!-- main -->
        <script src="../js/main.js"></script>
    <!-- fontawesome -->
    <script src="https://kit.fontawesome.com/cdfbda9fdc.js" crossorigin="anonymous"></script>
</body>
</html>
