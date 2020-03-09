<?php

	include('./php/traduction.php');

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <!-- meta -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- favicon -->
    <link rel="icon" href="img/logo.png" />
    <title>IceBerg</title>
    <!-- CSS -->
    <!-- main -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/style.css">
    <meta name="keywords" content="Agence Iceberg, Iceberg, Agence Web, Création de site web, Référencement, Formation">
    <meta name="authors" content="Tristan Degueurce &amp; Yann Ther &amp; Jennifer Hyard &amp; Doryan Maguier">
    <meta name="description" content="Agence Iceberg à La Rochelle : Création de sites web, référencement, formation...">
    <meta property="og:title" content="Agence Iceberg - La Rochelle">
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://agence-iceberg.lpmiaw.univ-lr.fr/">
    <meta property="og:description" content="Agence Iceberg à La Rochelle : Création de sites web, référencement, formation...">
</head>
<body>
        <div class="loader"></div>
        <!-- burger -->
        <header>
            <a href="#Accueil"> <img src="img/logo.png" alt="logo" class="logo"> </a>
            <span id="burger"><img src="img/burger.png" alt="burger" class="burger"></span>
        </header>
        <!-- menu -->
        <section id="menuSection" class="menu displayBurger">
            <span class="close">
                <img id="close" src="img/close.png" alt="close">
            </span>
            <nav class="element">
                <ul id="menu">
                    <li> <a href="./index.php#Accueil" class="aMenu" id="Acc"><?php echo $trans[ 'menu_accueil' ]?></a> </li>
                    <li> <a href="./index.php#Presentation" class="aMenu" id="Pre"><?php echo $trans[ 'menu_presentation' ]?></a> </li>
                    <li> <a href="./index.php#Equipe" class="aMenu" id="Equ"><?php echo $trans[ 'menu_equipe' ]?></a> </li>
                    <li> <a href="./index.php#Projets" class="aMenu" id="Pro"><?php echo $trans[ 'menu_projets' ]?></a> </li>
                    <li> <a href="./index.php#Contact" class="aMenu" id="Con">Contact</a> </li>
                    <li> <a href="index.php?lang=fr" class="aMenu">FR</a> / <a href="index.php?lang=en" class="aMenu">EN</a>
                    <li> <a href="https://www.instagram.com/agence_iceberg/?hl=fr"><i class="fab fa-instagram reseauSoc"></i></a> <a href="https://www.facebook.com/Agence-Iceberg-100899134649290/?ref=search&__tn__=%2Cd%2CP-R&eid=ARBZ0YA06I7Y2TJ_Jdinkaybrow8y9VHlwy_g5xBhsHRHgGq1ncH36copIe4yn4k9oX-kyI3G2UNS2II"><i class="fab fa-facebook-square reseauSoc"></i></a> </li>
                </ul>
            </nav>
        </section>
        <!-- page -->
        <section data-scroll="section1" id="Accueil" class="section accueil">
            <div id="mainTitle" class="mainTitle">
                <div class="typewriter">
                    <div class="typewriter-text">
                        <h1><span class="color">ICE</span>BERG</h1>
                    </div>
                </div>
                <p class="slogan"><?php echo $trans[ 'slogan' ]?></p>
            </div>
            <a href="#Presentation" class="button"><?php echo $trans[ 'button' ]?></a>
        </section>
        <main data-scroll="section2" id="Presentation" class="section presentation">
            <h2 data-aos="zoom-in"><?php echo $trans[ 'premier_h2' ]?></h2>
            <h3 data-aos="zoom-in"><?php echo $trans[ 'premier_h3' ]?></h3>
            <div id="divPres" class="divPres">
                    <p data-aos="zoom-in"><?php echo $trans[ 'agence_presentation' ]?></p>
                    <a data-aos="fade-up" href="pages/presentation.php" class="buttonPlus"><?php echo $trans[ 'button' ]?></a>
            </div>
        </main>
        <aside data-scroll="section3" id="Equipe" class="section equipe">

            <h2 data-aos="zoom-in"><?php echo $trans[ 'agence_equipe' ]?></h2>
            <h3 data-aos="zoom-in"><?php echo $trans[ 'agence_equipe_sub' ]?></h3>
            <div class="teamGroup mobileHide">
                <article data-aos="fade-right" data-aos-duration="1000" class="globalDiv">
                    <header class="infoDiv">
                        <img class="iconHead" src="img/icons/crown.svg" alt="lunettes">
                        <h3 class="nameP"> Tristan DEGUEURCE </h3>
                        <span class="nameP Orange"><?php echo $trans['agence_equipe_tristan']?></span>
                    </header>
                    <div class="teteDiv">
                        <a href="pages/equipe.php#tristan"><img src="img/team/tristan.png" alt="teamTristan" class="teamList" id="teamTristan"></a>
                    </div>
                </article>

                <article data-aos="fade-up-right" data-aos-duration="1000" class="globalDiv">
                    <header class="infoDiv">
                        <img class="iconHead" src="img/icons/beret.svg" alt="lunettes">
                        <h3 class="nameP"> Jennifer HYARD </h3>
                        <span class="nameP Orange"><?php echo $trans['agence_equipe_jennifer']?></span>
                    </header>
                    <div class="teteDiv">
                        <a href="pages/equipe.php#jennifer"><img src="img/team/jennifer.png" alt="teamJennifer" class="teamList" id="teamJennifer"></a>
                    </div>
                </article>

                <article data-aos="fade-up-left" data-aos-duration="1000" class="globalDiv">
                    <header class="infoDiv">
                        <img class="iconHead" src="img/icons/lunettes.svg" alt="lunettes">
                        <h3 class="nameP"> Yann THER </h3>
                        <span class="nameP Orange"><?php echo $trans['agence_equipe_dev']?></span>
                    </header>
                    <div class="teteDiv">
                        <a href="pages/equipe.php#yann"><img src="img/team/yann.png" alt="teamYann" class="teamList" id="teamYann"></a>
                    </div>
                </article>

                <article data-aos="fade-left" data-aos-duration="1000" class="globalDiv">
                    <header class="infoDiv">
                        <img class="iconHead" src="img/icons/pipe.svg" alt="pipe">
                        <h3 class="nameP"> Doryan MAGUIER</h3>
                        <span class="nameP Orange"><?php echo $trans['agence_equipe_dev']?></span>
                    </header>
                    <div class="teteDiv">
                        <a href="pages/equipe.php#doryan"><img src="img/team/doryan.png" alt="teamDoryan" class="teamList" id="teamDoryan"></a>
                    </div>
                </article>

            </div>
            <div class="teamGroupMobile pcHide">
                <img src="img/down.png" alt="leftTeam" class="leftTeam" id="leftButton">
                <a href="pages/equipe.php#tristan"><img src="img/team/tristan.png" alt="Tristan" data-info="<?php echo $trans['agence_equipe_tristan']?>" class="carousel head" id="1"></a>
                <a href="pages/equipe.php#jennifer"><img src="img/team/jennifer.png" alt="Jennifer" data-info="<?php echo $trans['agence_equipe_jennifer']?>" class="head mobileHide" id="2"></a>
                <a href="pages/equipe.php#yann"><img src="img/team/yann.png" alt="Yann" data-info="<?php echo $trans['agence_equipe_dev']?>" class="head mobileHide" id="3"></a>
                <a href="pages/equipe.php#doryan"><img src="img/team/doryan.png" alt="Doryan" data-info="<?php echo $trans['agence_equipe_dev']?>" class="head mobileHide" id="4"></a>
                <img src="img/down.png" alt="rightTeam" class="rightTeam" id="rightButton">
                <h3 class="headName" id="headName">Tristan</h3>
                <p class="headRole" id="headRole"><?php echo $trans['agence_equipe_tristan']?></p>
            </div>
        </aside>
        <section data-scroll="section4" id="Projets" class="section projets">
                <h2 data-aos="zoom-in"><?php echo $trans['agence_projet']?></h2>
                <h3 data-aos="zoom-in"><?php echo $trans['agence_projet_sub']?></h3>
                <div class="project" id="projectContainer">
                    <div class="row">
                        <div data-aos="fade-down-right" class="cell" id="tandamis">
                            <a href="https://velo-ecole.fr/" target="_blank"> <div class="cellInside"> <img src="img/client/logo/logoTandamis.png" alt="Instagram" class="logoClient"> </div> </a>
                        </div>
                        <div data-aos="fade-down" class="cell" id="unsouffledair">
                            <a href="http://unsouffledair.fr/" target="_blank"> <div class="cellInside"> <img src="img/client/logo/logoUnsouffledair.png" alt="Instagram" class="logoClient"> </div> </a>
                        </div>
                        <div data-aos="fade-down-left" class="cell mobileHide">
                            <a href="#Projets"> <div class="cellInside"> <img src="img/client/logo/logo.png" alt="Instagram" class="logoClient"> </div> </a>
                        </div>
                    </div>

                    <div class="row">
                        <div data-aos="fade-right" class="cell">
                            <a href="#Projets"> <div class="cellInside"> <img src="img/client/logo/logo.png" alt="Instagram" class="logoClient"> </div> </a>
                        </div>
                        <div class="cell">
                            <a href="#Projets"> <div class="cellInside"> <img src="img/client/logo/logo.png" alt="Instagram" class="logoClient"> </div> </a>
                        </div>
                        <div data-aos="fade-left" class="cell mobileHide">
                            <a href="#Projets"> <div class="cellInside"> <img src="img/client/logo/logo.png" alt="Instagram" class="logoClient"> </div> </a>
                        </div>
                    </div>

                    <div class="row">
                        <div data-aos="fade-up-right" class="cell mobileHide">
                            <a href="#Projets"> <div class="cellInside"> <img src="img/client/logo/logo.png" alt="Instagram" class="logoClient"> </div> </a>
                        </div>
                        <div data-aos="fade-up" class="cell mobileHide">
                            <a href="#Projets"> <div class="cellInside"> <img src="img/client/logo/logo.png" alt="Instagram" class="logoClient"> </div> </a>
                        </div>
                        <div data-aos="fade-up-left" class="cell mobileHide">
                            <a href="#Projets"> <div class="cellInside"> <img src="img/client/logo/logo.png" alt="Instagram" class="logoClient"> </div> </a>
                        </div>
                    </div>
                </div>
                <div class="pcHide" id="projectMore"><a href="pages/projets.php" class="buttonPlus"><?php echo $trans['button']?></a></div>
        </section>
        <section data-scroll="section5" id="Contact" class="section contact">
            <div class="contactZone">
                <h2 data-aos="zoom-in">Contact</h2>
                <h3 data-aos="zoom-in"><?php echo $trans['agence_contact_sub']?></h3>
                <form data-aos="zoom-out-down" id="form" action="php/mail.php" method="post">
                    <div class="formulaire">
                        <input type="text" placeholder="<?php echo $trans['agence_form_nom']?>*" id="name" name="name">
                        <input type="text" placeholder="Email*" id="email" name="mail">
                        <input type="text" placeholder="<?php echo $trans['agence_form_objet']?>*" id="objet" class="objet required" name="objet">
                        <textarea placeholder="Message*" id="message" class="required" name="message"></textarea>
                    </div>
                    <button data-aos="fade-left" class="sendMail"><?php echo $trans['agence_form_valider']?></button>
                </form>
                <p class="legal">&copy; ICEBERG | <a class="legal" href="./pages/mentions.php"><?php echo $trans['mentions'] ?></a></p>
            </div>
        </section>
        
        <div class="arrowCenter pcHide">
                <img id="arrowUp" class="arrowUp mobileHide" src="img/down.png" alt="up">
                <img id="dropDown" class="dropDown mobileHide" src="img/down.png" alt="down">
        </div>
        <!-- js -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
        <!-- main -->
        <script src="js/main.js"></script>
        <script src="js/gestion_scroll.js"></script>
        <!-- fontawesome -->
        <script src="https://kit.fontawesome.com/cdfbda9fdc.js" crossorigin="anonymous"></script>
</body>
</html>
