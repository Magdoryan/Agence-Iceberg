<?php

    include('../php/traduction.php');

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <!-- meta -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- favicon -->
    <link rel="icon" href="../img/logo.png" />
    <title> <?php echo $trans[ 'presentation_onglet' ]?></title>
    <!-- CSS -->
    <!-- main -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" href="../css/reset.css">
    <link rel="stylesheet" href="../css/pages.css">
</head>
<body>
    <!-- burger -->
        <header>
            <a href="../index.php#Accueil"> <img src="../img/logo.png" alt="logo" class="logo"> </a>
            <span id="burger"><a href="#Accueil"> <img src="../img/burger.png" alt="burger" class="burger"> </a> </span>
        </header>
        <!-- menu -->
        <section id="menuSection" class="menu displayBurger">
            <span class="close">
                <img id="close" src="../img/close.png" alt="close">
            </span>
            <nav class="element">
                <ul id="menu">
                    <li> <a href="../index.php#Accueil" class="aMenu" id="Acc"><?php echo $trans[ 'menu_accueil' ]?></a> </li>
                    <li> <a href="../index.php#Presentation" class="aMenu" id="Pre"><?php echo $trans[ 'menu_presentation' ]?></a> </li>
                    <li> <a href="../index.php#Equipe" class="aMenu" id="Equ"><?php echo $trans[ 'menu_equipe' ]?></a> </li>
                    <li> <a href="../index.php#Projets" class="aMenu" id="Pro"><?php echo $trans[ 'menu_projets' ]?></a> </li>
                    <li> <a href="../index.php#Contact" class="aMenu" id="Con">Contact</a> </li>
                    <li> <a href="presentation.php?lang=fr" class="aMenu">FR</a> / <a href="presentation.php?lang=en" class="aMenu">EN</a>
                    <li> <a href="https://www.instagram.com/agence_iceberg/?hl=fr"><i class="fab fa-instagram reseauSoc"></i></a> <a href="https://www.facebook.com/Agence-Iceberg-100899134649290/?ref=search&__tn__=%2Cd%2CP-R&eid=ARBZ0YA06I7Y2TJ_Jdinkaybrow8y9VHlwy_g5xBhsHRHgGq1ncH36copIe4yn4k9oX-kyI3G2UNS2II"><i class="fab fa-facebook-square reseauSoc"></i></a> </li>
                </ul>
            </nav>
        </section>
        <!-- page -->
        <main class="pres">
            <section class="head">
                <h1><?php echo $trans['premier_h2'] ?></h1>
            </section>

            <article class="present">
                <h2 data-aos="fade-down"><?php echo $trans['menu_presentation']?></h2>
                <p><?php echo $trans['presentation_agence']?></p>
            </article>

            <section class="serv">
                <article class="serv1">
                    <h2 data-aos="fade-right" data-aos-duration="1000"><?php echo $trans['presentation_service']?></h2>
                    <div data-aos="zoom-in" data-aos-duration="1000" class="icontitle">
                        <img src="../img/icons/www.png" alt="pictogramme recherche web">
                        <h3><?php echo $trans['presentation_service1']?></h3>
                    </div>
                    <p><?php echo $trans['presentation_service1_texte']?></p>
                </article>
                <section class="serv2">
                    <div data-aos="zoom-in" data-aos-duration="1000" class="icontitle">
                        <img src="../img/icons/report.png" alt="report">
                        <h3>Webmarketing</h3>
                    </div>
                    <p><?php echo $trans['presentation_service2_texte']?></p>
                </section>
                <section class="serv3">
                    <div data-aos="zoom-in" data-aos-duration="1000" class="icontitle">
                        <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="500px" height="500px" viewBox="0 0 500 500" enable-background="new 0 0 500 500" xml:space="preserve">
                            <g>
                                <g>
                                    <path fill="#5CB5E6" d="M128.733,106.775c-9.377-9.692-22.298-15.147-35.783-15.108h-2.566
                                        c-13.472-0.027-26.374,5.427-35.742,15.108c-8.813,9.06-13.492,21.357-12.934,33.983l0.975,22.434
                                        c1.477,25.671,22.958,45.596,48.667,45.142h0.633c25.709,0.454,47.19-19.471,48.667-45.142l1.017-22.434
                                        C142.225,128.132,137.545,115.835,128.733,106.775z M124,162.5c-1.129,16.732-15.252,29.598-32.017,29.167H91.35
                                        c-16.764,0.432-30.887-12.434-32.017-29.167l-0.292-6.808c15.885-0.708,31.139-6.431,43.566-16.35
                                        c5.125,7.579,12.862,13.005,21.733,15.242L124,162.5z M113.55,123.108c-0.463-3.554-3.149-6.414-6.667-7.1
                                        c-3.505-0.725-7.078,0.89-8.85,4c-0.108,0.175-10.45,16.534-39.633,19.034c-0.072-7.721,2.898-15.16,8.267-20.708
                                        c6.222-6.411,14.782-10.021,23.717-10h2.566c8.935-0.021,17.495,3.589,23.717,10c4.861,5.065,7.747,11.706,8.133,18.717
                                        C119.033,134.473,114.85,129.289,113.55,123.108z"/>
                                </g>
                            </g>
                            <g>
                                <g>
                                    <path fill="#5CB5E6" d="M453.732,306.774c-9.377-9.692-22.298-15.147-35.783-15.108h-2.566
                                        c-13.473-0.027-26.374,5.428-35.742,15.108c-8.813,9.061-13.492,21.357-12.933,33.983l0.975,22.434
                                        c1.478,25.67,22.957,45.596,48.667,45.141h0.633c25.709,0.455,47.189-19.471,48.667-45.141l1.017-22.434
                                        C467.224,328.132,462.545,315.835,453.732,306.774z M449.999,340.082l-1,22.417c-1.129,16.732-15.252,29.599-32.017,29.167h-0.633
                                        c-16.765,0.432-30.888-12.435-32.017-29.167l-1.001-22.458c-0.321-8.074,2.692-15.924,8.334-21.709
                                        c6.222-6.41,14.782-10.02,23.717-10h2.566c8.935-0.02,17.495,3.59,23.717,10C447.317,324.127,450.332,331.995,449.999,340.082z"/>
                                </g>
                            </g>
                            <g>
                                <g>
                                    <path fill="#5CB5E6" d="M257.431,121.191c-8.941-8.649-23.131-8.649-32.073,0l-93.033,93.033c-1.564,1.564-3.688,2.444-5.9,2.441
                                        H41.667c-23,0.027-41.64,18.667-41.667,41.667v116.666c0,13.808,11.193,25,25,25c2.838,0,5.656-0.482,8.333-1.425v9.758
                                        c0,4.603,3.731,8.334,8.333,8.334h100c4.602,0,8.333-3.731,8.333-8.334V273.217c-0.001-2.109,0.797-4.141,2.233-5.684
                                        l105.742-113.725C266.832,144.652,266.588,130.049,257.431,121.191z M246.073,142.155c-0.03,0.029-0.06,0.059-0.09,0.086
                                        L140,256.191c-4.292,4.63-6.674,10.711-6.667,17.025v126.782H50V275c0-4.603-3.731-8.334-8.333-8.334s-8.333,3.731-8.333,8.334
                                        v99.999c0,4.603-3.731,8.333-8.333,8.333s-8.333-3.73-8.333-8.333V258.333c0-13.808,11.193-25,25-25h84.758
                                        c6.636,0.021,13.005-2.617,17.683-7.325l93.033-93.033c2.537-2.406,6.514-2.406,9.05,0
                                        C248.693,135.542,248.641,139.653,246.073,142.155z"/>
                                </g>
                            </g>
                            <g>
                                <g>
                                    <path fill="#5CB5E6" d="M91.667,241.666c-4.602,0-8.333,3.731-8.333,8.333v100c0,4.603,3.731,8.333,8.333,8.333
                                        s8.333-3.73,8.333-8.333V250C100,245.397,96.269,241.666,91.667,241.666z"/>
                                </g>
                            </g>
                            <g>
                                <g>
                                    <path fill="#5CB5E6" d="M270.357,306.774c-9.367-9.681-22.27-15.136-35.741-15.108h-2.567
                                        c-13.472-0.027-26.374,5.428-35.741,15.108c-8.813,9.061-13.493,21.357-12.934,33.983l0.975,22.434
                                        c1.477,25.67,22.957,45.596,48.667,45.141h0.633c25.71,0.455,47.189-19.471,48.667-45.141l0.975-22.434
                                        C283.851,328.132,279.17,315.835,270.357,306.774z M266.666,340.082l-1,22.417c-1.129,16.732-15.252,29.599-32.017,29.167h-0.633
                                        c-16.765,0.432-30.887-12.435-32.017-29.167l-1-22.458c-0.322-8.074,2.692-15.924,8.333-21.709c6.222-6.41,14.782-10.02,23.716-10
                                        h2.567c8.935-0.02,17.495,3.59,23.717,10C263.984,324.127,267,331.995,266.666,340.082z"/>
                                </g>
                            </g>
                            <g>
                                <g>
                                    <path fill="#5CB5E6" d="M276.391,416.666h-86.116c-22.233,0.022-40.252,18.041-40.275,40.274v34.726
                                        c0,4.602,3.731,8.333,8.333,8.333s8.333-3.731,8.333-8.333V456.94c0.013-13.033,10.576-23.595,23.608-23.608h86.116
                                        c13.033,0.014,23.596,10.575,23.608,23.608v34.726c0,4.602,3.731,8.333,8.334,8.333c4.602,0,8.333-3.731,8.333-8.333V456.94
                                        C316.644,434.707,298.624,416.688,276.391,416.666z"/>
                                </g>
                            </g>
                            <g>
                                <g>
                                    <path fill="#5CB5E6" d="M459.724,416.666h-86.116c-22.233,0.022-40.252,18.041-40.274,40.274v34.726
                                        c0,4.602,3.73,8.333,8.333,8.333c4.602,0,8.333-3.731,8.333-8.333V456.94c0.014-13.033,10.576-23.595,23.608-23.608h86.116
                                        c13.034,0.014,23.595,10.575,23.608,23.608v34.726c0,4.602,3.731,8.333,8.334,8.333c4.602,0,8.333-3.731,8.333-8.333V456.94
                                        C499.976,434.707,481.957,416.688,459.724,416.666z"/>
                                </g>
                            </g>
                            <g>
                                <g>
                                    <path fill="#5CB5E6" d="M475.416,0h-292.5c-13.685,0.133-24.68,11.315-24.583,25v125c0,4.602,3.731,8.333,8.333,8.333
                                        S175,154.602,175,150V50h308.333v200c0.107,4.485-3.432,8.21-7.916,8.333H191.041c-4.602,0-8.333,3.731-8.333,8.333
                                        s3.731,8.334,8.333,8.334h284.375c13.684-0.134,24.68-11.316,24.583-25V25C500.096,11.315,489.1,0.133,475.416,0z M483.332,33.333
                                        H175V25c-0.107-4.484,3.433-8.21,7.917-8.333h292.5c4.484,0.123,8.023,3.849,7.916,8.333V33.333z"/>
                                </g>
                            </g>
                            <g>
                                <g>
                                    <path fill="#5CB5E6" d="M458.332,106.25c-4.602,0-8.333,3.731-8.333,8.333v118.75c0,4.602,3.731,8.333,8.333,8.333
                                        c4.603,0,8.334-3.731,8.334-8.333v-118.75C466.666,109.981,462.935,106.25,458.332,106.25z"/>
                                </g>
                            </g>
                            <g>
                                <g>
                                    <path fill="#5CB5E6" d="M424.999,158.333c-4.602,0-8.333,3.731-8.333,8.333v66.667c0,4.602,3.731,8.333,8.333,8.333
                                        c4.603,0,8.333-3.731,8.333-8.333v-66.667C433.332,162.064,429.602,158.333,424.999,158.333z"/>
                                </g>
                            </g>
                            <g>
                                <g>
                                    <path fill="#5CB5E6" d="M391.666,141.667c-4.603,0-8.334,3.731-8.334,8.333v83.333c0,4.602,3.731,8.333,8.334,8.333
                                        c4.602,0,8.333-3.731,8.333-8.333V150C399.999,145.397,396.268,141.667,391.666,141.667z"/>
                                </g>
                            </g>
                            <g>
                                <g>
                                    <path fill="#5CB5E6" d="M358.333,191.666c-4.603,0-8.334,3.731-8.334,8.333v33.333c0,4.602,3.731,8.333,8.334,8.333
                                        c4.602,0,8.333-3.731,8.333-8.333V200C366.666,195.397,362.935,191.666,358.333,191.666z"/>
                                </g>
                            </g>
                            <g>
                                <g>
                                    <path fill="#5CB5E6" d="M462.957,68.066c-3.829-2.554-9.004-1.521-11.558,2.309l-28.45,42.667l-26.283-19.708
                                        c-3.668-2.78-8.895-2.059-11.675,1.608c-0.317,0.418-0.593,0.864-0.825,1.333l-32.45,64.908L319.999,185
                                        c-3.682,2.762-4.428,7.984-1.666,11.667c2.761,3.683,7.984,4.428,11.666,1.667l33.334-25c1.05-0.773,1.906-1.78,2.5-2.942
                                        l28.857-57.733l25.309,19.008c3.682,2.761,8.905,2.017,11.667-1.666c0.093-0.123,0.181-0.249,0.267-0.376l33.333-50
                                        C467.82,75.796,466.786,70.621,462.957,68.066z"/>
                                </g>
                            </g>
                            <g>
                                <g>
                                    <path fill="#5CB5E6" d="M299.999,66.667H200c-4.602,0-8.333,3.731-8.333,8.333s3.731,8.333,8.333,8.333h100
                                        c4.603,0,8.334-3.731,8.334-8.333S304.602,66.667,299.999,66.667z"/>
                                </g>
                            </g>
                            <g>
                                <g>
                                    <path fill="#5CB5E6" d="M349.999,66.667h-16.666c-4.603,0-8.334,3.731-8.334,8.333s3.731,8.333,8.334,8.333h16.666
                                        c4.603,0,8.334-3.731,8.334-8.333S354.602,66.667,349.999,66.667z"/>
                                </g>
                            </g>
                        </svg>
                        <h3>Formation</h3>
                    </div>
                    <p><?php echo $trans['presentation_service3_texte']?></p>
                </section>
            </section>

            <article class="methode">
                <h2 data-aos="fade-down"><?php echo $trans['presentation_methode']?></h2>
                <div>
                    <img data-aos="zoom-in" data-aos-duration="1000" src="../img/icons/team.png" alt="picto team">
                    <h3 data-aos="zoom-in" data-aos-duration="1000"><?php echo $trans['presentation_methode_agile']?></h3>
                    <p><?php echo $trans['presentation_methode_texte']?></p>
                </div>
            </article>

            <div class="imgPara"></div>

            <p class="sousPara"><?php echo $trans['presentation_methode_texte2']?></p>

            <article class="contactPres">
                <h2 data-aos="fade-down" data-aos-duration="1000"><?php echo $trans['presentation_contact_titre']?></h2>
                <a data-aos="zoom-in" data-aos-duration="1000" href="../index.php#Contact"><img src="../img/icons/email.svg" alt="pictogramme email"></a>
                <p data-aos-duration="1000"><?php echo $trans['presentation_contact_texte']?></p>
            </article>

        </main>
        <!-- js -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
        <!-- main -->
        <script src="../js/main.js"></script>
        <!-- fontawesome -->
        <script src="https://kit.fontawesome.com/cdfbda9fdc.js" crossorigin="anonymous"></script>
</body>
</html>
