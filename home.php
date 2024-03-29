<?php session_start();  if(!$_SESSION["Usuario_Activo"]){header("location:index.html");}?>

<!DOCTYPE html>
<html lang="es">
<head>
	
	<title>Univalle</title>
    <meta charset="UTF-8">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    
     <!-- Normalize CSS -->
	<link rel="stylesheet" href="css/normalize.css">
    
     <!-- Materialize CSS -->
	<link rel="stylesheet" href="css/materialize.min.css">
    
     <!-- Material Design Iconic Font CSS -->
	<link rel="stylesheet" href="css/material-design-iconic-font.min.css">
    
    <!-- Malihu jQuery custom content scroller CSS -->
	<link rel="stylesheet" href="css/jquery.mCustomScrollbar.css">
    
    <!-- Sweet Alert CSS -->
    <link rel="stylesheet" href="css/sweetalert.css">
    
    <!-- MaterialDark CSS -->
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
    <!-- Nav Lateral -->
    <section class="NavLateral full-width ">
        <div class="NavLateral-FontMenu full-width ShowHideMenu"></div>

        <div class="NavLateral-content full-width ">

            <header class="NavLateral-title full-width center-align #d50000 red accent-4">
                ADMINISTRACIÓN <i class="zmdi zmdi-close NavLateral-title-btn ShowHideMenu"></i>

            </header>

            <figure class="full-width NavLateral-logo">
                <img src="assets/img/logounivalle.jpg" alt="material-logo" class="responsive-img center-box">
                <figcaption class="center-align">Universidad del valle caicedonia</figcaption>
            </figure> 

            <div class="NavLateral-Nav">
                <ul class="full-width">
                    <!--ESTE MANEJA EL PRIMER LINK-->
                    <li>
                        <a href="#" class="NavLateral-DropDown  waves-effect waves-light"><i class="zmdi zmdi-language-css3 zmdi-hc-fw"></i> 
                        <i class="zmdi zmdi-chevron-down NavLateral-CaretDown"></i>Cultura</a>

                        <ul class="full-width">

                        
                            <li> <a  href="php/CMusica.php" class="waves-effect waves-light" id="se_ecoge_musica">Música</a></li>
                            <li class="NavLateralDivider"></li>

                            <li><a href="php/CTeatro.php" class="waves-effect waves-light">Teatro</a></li>
                            <li class="NavLateralDivider"></li>
                            <li><a href="php/CDanza.php" class="waves-effect waves-light">Danza</a></li>
                            <li class="NavLateralDivider"></li>
                            <li><a href="php/CCanto.php" class="waves-effect waves-light">Canto</a></li>
                            <li class="NavLateralDivider"></li>
                            
                        </ul>

                    </li>

                    <li class="NavLateralDivider"></li>
                    <li>
                        <a href="#" class="NavLateral-DropDown  waves-effect waves-light"><i class="zmdi zmdi-language-css3 zmdi-hc-fw"></i> 
                        <i class="zmdi zmdi-chevron-down NavLateral-CaretDown"></i>Deporte</a>

                        <ul class="full-width">
 
                            <li><a href="php/DfutbolSala.php" class="waves-effect waves-light">Futbol sala</a></li>
                            <li class="NavLateralDivider"></li>
                            <li><a href="php/DBaloncesto.php" class="waves-effect waves-light">Baloncesto</a></li>
                            <li class="NavLateralDivider"></li>
                            <li><a href="php/DNatacion.php" class="waves-effect waves-light">Natación</a></li>
                            <li class="NavLateralDivider"></li>
                            <li><a href="php/DVoleybol.php" class="waves-effect waves-light">Voleybol</a></li>
                            <li class="NavLateralDivider"></li>
                            <li><a href="php/DTenisdeMesa.php" class="waves-effect waves-light">Tenis de mesa</a></li>
                            <li class="NavLateralDivider"></li>
                            <li><a href="php/DAjedrez.php" class="waves-effect waves-light">Ajedrez</a></li>
                            <li class="NavLateralDivider"></li>
                            <li><a href="php/DAtletismo.php" class="waves-effect waves-light">Atletismo</a></li>
                            <li class="NavLateralDivider"></li>
                            <li><a href="php/DFutbol.php" class="waves-effect waves-light">Futbol</a></li>
                        </ul>   

                    </li>

                    <li class="NavLateralDivider"></li>
                    <li>
                        <a href="#" class="NavLateral-DropDown  waves-effect waves-light"><i class="zmdi zmdi-widgets zmdi-hc-fw"></i> <i class="zmdi zmdi-chevron-down NavLateral-CaretDown"></i> Exito Academico</a>
                        <ul class="full-width">
                            <li><a href="button.html" class="waves-effect waves-light">Uno</a></li>
                            <li class="NavLateralDivider"></li>
                            <li><a href="form.html" class="waves-effect waves-light">Dos</a></li>
                        </ul>
                    </li>
                    <li class="NavLateralDivider"></li>
                    <li>
                        <a href="#" class="NavLateral-DropDown  waves-effect waves-light"><i class="zmdi zmdi-close-circle zmdi-hc-fw"></i><i class="zmdi zmdi-chevron-down NavLateral-CaretDown"></i>Otros</a>
                        <ul class="full-width">
                            <li><a href="template.html" class="waves-effect waves-light">Blank Page</a></li>                            
                        </ul>

                           


                    </li>   


                </ul>
            </div>  
        </div>  
    </section>

    <!-- Page content -->
    <section class="ContentPage full-width">
        <!-- Nav Info -->
        <div class="ContentPage-Nav full-width ">
            <ul class="full-width">
                <!--<li class="btn-MobileMenu ShowHideMenu"><a href="#" class="tooltipped waves-effect waves-light" data-position="bottom" data-delay="50" data-tooltip="Menu"><i class="zmdi zmdi-more-vert"></i></a></li>-->
                <li><figure><img src="assets/img/user.png" alt="UserImage"></figure></li>
                <li style="padding:0 5px;"><?php echo $_SESSION["Usuario_Activo"]?></li>

               <!-- <li><a href="#" class="tooltipped waves-effect waves-light btn-ExitSystem" data-position="bottom" data-delay="50" data-tooltip="Logout"><i class="zmdi zmdi-power"></i></a></li>
                <li><a href="#" class="tooltipped waves-effect waves-light btn-Search" data-position="bottom" data-delay="50" data-tooltip="Search"><i class="zmdi zmdi-search"></i></a></li>
                <li>
                    <a href="#" class="tooltipped waves-effect waves-light btn-Notification" data-position="bottom" data-delay="50" data-tooltip="Notifications">
                        <i class="zmdi zmdi-notifications"></i>
                        <span class="ContentPage-Nav-indicator bg-danger">2</span>
                    </a>
                </li>-->
            </ul>   
        </div>

        <!-- Notifications area -->
        <!--<section class="z-depth-3 NotificationArea">
            <div class="full-width center-align NotificationArea-title">Notifications <i class="zmdi zmdi-close btn-Notification"></i></div>
            <a href="#" class="waves-effect Notification">
                <div class="Notification-icon"><i class="zmdi zmdi-accounts-alt bg-info"></i></div>
                <div class="Notification-text">
                    <p>
                        <i class="zmdi zmdi-circle tooltipped" data-position="left" data-delay="50" data-tooltip="Notification as UnRead"></i>
                        <strong>New User Registration</strong> 
                        <br>
                        <small>Just Now</small>
                    </p>
                </div>
            </a>  
            <a href="#" class="waves-effect Notification">
                <div class="Notification-icon"><i class="zmdi zmdi-cloud-download bg-primary"></i></div>
                <div class="Notification-text">
                    <p>
                        <i class="zmdi zmdi-circle-o tooltipped" data-position="left" data-delay="50" data-tooltip="Notification as Read"></i>
                        <strong>New Updates</strong> 
                        <br>
                        <small>30 Mins Ago</small>
                    </p>
                </div>
            </a>
            <a href="#" class="waves-effect Notification">
                <div class="Notification-icon"><i class="zmdi zmdi-upload bg-success"></i></div>
                <div class="Notification-text">
                    <p>
                        <i class="zmdi zmdi-circle tooltipped" data-position="left" data-delay="50" data-tooltip="Notification as UnRead"></i>
                        <strong>Archive uploaded</strong> 
                        <br>
                        <small>31 Mins Ago</small>
                    </p>
                </div>
            </a> 
            <a href="#" class="waves-effect Notification">
                <div class="Notification-icon"><i class="zmdi zmdi-mail-send bg-danger"></i></div>
                <div class="Notification-text">
                    <p>
                        <i class="zmdi zmdi-circle-o tooltipped" data-position="left" data-delay="50" data-tooltip="Notification as Read"></i>
                        <strong>New Mail</strong> 
                        <br>
                        <small>37 Mins Ago</small>
                    </p>
                </div>
            </a>
            <a href="#" class="waves-effect Notification">
                <div class="Notification-icon"><i class="zmdi zmdi-folder bg-primary"></i></div>
                <div class="Notification-text">
                    <p>
                        <i class="zmdi zmdi-circle-o tooltipped" data-position="left" data-delay="50" data-tooltip="Notification as Read"></i>
                        <strong>Folder delete</strong> 
                        <br>
                        <small>1 hours Ago</small>
                    </p>
                </div>
            </a>  
        </section>-->

                <div class="row" style="">
                    <div class="col s12 center-align">
                      <div class="card">
                        <div class="card-image">
                          <img src="assets/img/logounivalle.jpg">
                          <span class="card-title">Caicedonia</span>
                        </div>
                        <div class="card-content">
                          <p>La universidad del valle sede caicedonia implemeta es app para gestionar </p>
                        </div>
                        <div class="card-action">
                          <a href="#">This is a link</a>
                        </div>
                      </div>
                    </div>
                  </div>

            

        <!-- Footer -->   
        <footer class="footer-MaterialDark">
            <div class="container">
                <div class="row">
                    <div class="col l6 s12">
                        <h5 class="white-text">Univalle caicedonia</h5>
                        <p class="grey-text text-lighten-4">
                            To better support on CSS components and icons, please visit the official websites of the technologies used.
                            <br>
                            Para mejor soporte sobre los componentes CSS e iconos, por favor visite los sitios web oficiales de las tecnologias usadas
                        </p>
                    </div>
                    <div class="col l4 offset-l2 s12">
                        <h5 class="white-text">Gestion administrativa</h5>
                        <ul>
                            <li><a class="grey-text text-lighten-3" href="http://materializecss.com/">Materialize</a></li>
                            <li><a class="grey-text text-lighten-3" href="http://zavoloklom.github.io/material-design-iconic-font/icons.html">Material Design Iconic Font</a></li>
                            <li><a class="grey-text text-lighten-3" href="http://t4t5.github.io/sweetalert/">Sweet Alert</a></li>
                            <li><a class="grey-text text-lighten-3" href="http://manos.malihu.gr/jquery-custom-content-scroller/">jQuery custom content scroller</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="NavLateralDivider"></div>
            <div class="footer-copyright">
                <div class="container center-align">
                    © 2019 Universidad del valle sede caicedonia
                </div>
            </div>
        </footer>
    </section>
    
    <!-- Sweet Alert JS -->
    <script src="js/sweetalert.min.js"></script>
    
    <!-- jQuery -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
	<script>window.jQuery || document.write('<script src="js/jquery-2.2.0.min.js"><\/script>')</script>
    
    <!-- Materialize JS -->
	<script src="js/materialize.min.js"></script>
    
    <!-- Malihu jQuery custom content scroller JS -->
	<script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
    
    <!-- MaterialDark JS -->
	<script src="js/main.js"></script>
</body>
</html>