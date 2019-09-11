<!-- 
* Copyright 2016 Carlos Eduardo Alfaro Orellana
-->
<!DOCTYPE html>
<html lang="es">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Univalle</title>
    
    <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      <!-- Esta lìnea es fundamental para que funcione JQUERY -->
     <script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="crossorigin="anonymous"></script>


     <!-- Normalize CSS -->
    <link rel="stylesheet" href="./../css/normalize.css">
    
     <!-- Materialize CSS -->
    <link rel="stylesheet" href="./../css/materialize.min.css">
    
     <!-- Material Design Iconic Font CSS -->
    <link rel="stylesheet" href="./../css/material-design-iconic-font.min.css">
    
    <!-- Malihu jQuery custom content scroller CSS -->
    <link rel="stylesheet" href="./../css/jquery.mCustomScrollbar.css">
    
    <!-- Sweet Alert CSS -->
    <link rel="stylesheet" href="./../css/sweetalert.css">
    
    <!-- MaterialDark CSS -->
    <link rel="stylesheet" href="./../css/style.css">
</head>
<body>
    <!-- Nav Lateral -->
    <section class="NavLateral full-width ">
        <div class="NavLateral-FontMenu full-width ShowHideMenu"></div>

        <div class="NavLateral-content full-width ">

            <header class="NavLateral-title full-width center-align #d50000 red accent-4">
                ADMINISTRACION <i class="zmdi zmdi-close NavLateral-title-btn ShowHideMenu"></i>
            </header>

            <figure class="full-width NavLateral-logo">
                <img src="./../assets/img/logounivalle.jpg" alt="material-logo" class="responsive-img center-box">
                <figcaption class="center-align">Universidad del valle caicedonia</figcaption>
            </figure> 

            <div class="NavLateral-Nav">
                <ul class="full-width">
                    <!--ESTE MANEJA EL PRIMER LINK-->
                    <li>
                        <a href="#" class="NavLateral-DropDown  waves-effect waves-light"><i class="zmdi zmdi-language-css3 zmdi-hc-fw"></i> 
                        <i class="zmdi zmdi-chevron-down NavLateral-CaretDown"></i>Cultura</a>

                        <ul class="full-width">

                        
                           <li><a  href="CMusica.php" class="waves-effect waves-light" id="se_ecoge_musica">Musica</a></li>
                            <li class="NavLateralDivider"></li>

                            <li><a href="CTeatro.php" class="waves-effect waves-light">Teatro</a></li>
                            <li class="NavLateralDivider"></li>
                            <li><a href="CDanza.php" class="waves-effect waves-light">Danza</a></li>
                            <li class="NavLateralDivider"></li>
                            <li><a href="CCanto.php" class="waves-effect waves-light">Canto</a></li>
                            <li class="NavLateralDivider"></li> 
                        </ul>

                    </li>

                    <li class="NavLateralDivider"></li>
                    <li>
                        <a href="#" class="NavLateral-DropDown  waves-effect waves-light"><i class="zmdi zmdi-language-css3 zmdi-hc-fw"></i> 
                        <i class="zmdi zmdi-chevron-down NavLateral-CaretDown"></i>Deporte</a>

                        <ul class="full-width">

                           <li><a href="DfutbolSala.php" class="waves-effect waves-light">Futbol sala</a></li>
                            <li class="NavLateralDivider"></li>
                            <li><a href="DBaloncesto.php" class="waves-effect waves-light">Baloncesto</a></li>
                            <li class="NavLateralDivider"></li>
                            <li><a href="DNatacion.php" class="waves-effect waves-light">Natación</a></li>
                            <li class="NavLateralDivider"></li>
                            <li><a href="DVoleybol.php" class="waves-effect waves-light">Voleybol</a></li>
                            <li class="NavLateralDivider"></li>
                            <li><a href="php/DTenisdeMesa.php" class="waves-effect waves-light">Tenis de mesa</a></li>
                            <li class="NavLateralDivider"></li>
                            <li><a href="DAjedrez.php" class="waves-effect waves-light">Ajedrez</a></li>
                            <li class="NavLateralDivider"></li>
                            <li><a href="DAtletismo.php" class="waves-effect waves-light">Atletismo</a></li>
                            <li class="NavLateralDivider"></li>
                            <li><a href="DFutbol.php" class="waves-effect waves-light">Futbol</a></li>
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
                <li class="btn-MobileMenu ShowHideMenu"><a href="#" class="tooltipped waves-effect waves-light" data-position="bottom" data-delay="50" data-tooltip="Menu"><i class="zmdi zmdi-more-vert"></i></a></li>
                <li><figure><img src="./../assets/img/user.png" alt="UserImage"></figure></li>
                <li style="padding:0 5px;">Kevin santiago</li>

                <li><a href="#" class="tooltipped waves-effect waves-light btn-ExitSystem" data-position="bottom" data-delay="50" data-tooltip="Logout"><i class="zmdi zmdi-power"></i></a></li>
                <li><a href="#" class="tooltipped waves-effect waves-light btn-Search" data-position="bottom" data-delay="50" data-tooltip="Search"><i class="zmdi zmdi-search"></i></a></li>
                <li>
                    <a href="#" class="tooltipped waves-effect waves-light btn-Notification" data-position="bottom" data-delay="50" data-tooltip="Notifications">
                        <i class="zmdi zmdi-notifications"></i>
                        <span class="ContentPage-Nav-indicator bg-danger">2</span>
                    </a>
                </li>
            </ul>   
        </div>

       <!--Input fields-->
        <div class="container">
            <div class="row">
                <h2 class="center-align">Nueva actividad Musica</h2>
                <form class="col s12" name="form_New_activity" method="post" action="CMusicaLogica.php" enctype="multipart/form-data">
                    <div class="row">
                        <div class="input-field col s12">
                            <input placeholder="Escriba el titulo de 30 caracteres" id="first_name" type="text" class="validate" maxlength="30" name="txt_nuevaActitulo" required="">
                            <label for="first_name">Titulo</label>
                        </div>                    
                    </div>
                    <div class="row">
                         <div class="file-field input-field">
                               <div class="btn">
                                   <span>File</span>
                                   <input type="file"  name="txt_nuevaAcImagen" multiple>
                               </div>
                              <div class="file-path-wrapper">
                                   <input class="file-path validate" type="text" placeholder="Upload one or more files" required="">
                              </div>
                               </div>
                    </div>
                    <div class="row">
                            <div class="input-field col s12">
                                <textarea id="textarea1" class="materialize-textarea" name="txt_nuevaAcTexo" required=""></textarea>
                                <label for="textarea1">Textarea</label>
                            </div>
                    </div>

                    <div class="row">                  
                      <div class="input-field col s6 center-align">
                         <button class="btn waves-effect waves-light" type="submit" name="btncrear" value="formCrear">Crear
                        <i class="zmdi zmdi-mail-send"></i>
                        </button>
                    </div>

                    </div>
                </form>  
            </div>
        </div>

                <hr>                

          <?php
                require_once("conexion.php");
                $resultado=mysqli_query($conexion,"SELECT * FROM cultura where nombre='musica' ")                                 
            ?>   

            <script type="text/javascript">
                               
                
                function mikevin(){
                        var titulo=document.getElementById('txttitulobd').text;   
                        var texto=document.getElementById('txttextobd').value;                                                 
                        document.getElementById('txttitulo').value=titulo;
                        document.getElementById('txttexto').value=texto;                                                
                }

            </script>   
        </div>




       <div class="container">
            <div class="row">
                <h2 class="center-align">Actualizar actividad</h2>                
                <form class="col s12" name="form_New_activity" method="post" action="CMusicaLogica.php">
                       
                <div class="container" style="margin-bottom: 100px;"> 
                    <div class="col s12">
                        <table class="striped">
                            <thead>
                                <tr>
                                    <th data-field="id">Titulo</th>
                                    <th data-field="name">Texto</th>
                                    <th data-field="price">Imagen</th>
                                </tr>
                            </thead>
                            <tbody>

                                <?php
                                     while($fila=mysqli_fetch_array($resultado)){                                
                                echo '<tr>';
                                    echo '<td><a href="#" id="txttitulobd" onclick="mikevin()">'.$fila['titulo'].'<a></td>';
                                    echo '<td id="txttextobd">'.$fila['texto'].'</td>';
                                    echo '<td>img</td>';
                                echo '</tr>';
                                }
                                ?>                            
                            </tbody>
                        </table>
                    </div>
                </div>


                    <div class="row">
                        <div class="input-field col s12">
                            <input placeholder="Escriba el titulo de 30 caracteres" id="txttitulo" type="text" class="validate" maxlength="30" name="txt_ActuActitulo"
                                required="">
                            <label for="first_name">Titulo</label>
                        </div>                    
                    </div>
                    <div class="row">
                         <div class="file-field input-field">
                               <div class="btn">
                                   <span>File</span>
                                   <input type="file"  name="txt_ActuAcImagen" multiple required="">
                               </div>
                              <div class="file-path-wrapper">
                                   <input class="file-path validate" type="text" placeholder="Upload one or more files">
                              </div>
                               </div>
                    </div>
                    <div class="row">
                            <div class="input-field col s12">
                                <textarea id="txttexto" class="materialize-textarea" name="txt_ActuAcTexo" required=""></textarea>
                                <label for="textarea1">Textarea</label>
                            </div>
                    </div>                
                    <div class="row">                  
                      <div class="input-field col s6 center-align">
                         <button class="btn waves-effect waves-light" type="submit" name="btnactualizar" value="formCrear">Actualizar
                        <i class="zmdi zmdi-mail-send"></i>
                        </button>
                    </div>

                    </div>
                </form>  
            </div>
        </div>

         




        <!-- Footer -->   
        <footer class="footer-MaterialDark">
            <div class="container">
                <div class="row">
                    <div class="col l6 s12">
                        <h5 class="white-text">Footer Content</h5>
                        <p class="grey-text text-lighten-4">
                            To better support on CSS components and icons, please visit the official websites of the technologies used.
                            <br>
                            Para mejor soporte sobre los componentes CSS e iconos, por favor visite los sitios web oficiales de las tecnologias usadas
                        </p>
                    </div>
                    <div class="col l4 offset-l2 s12">
                        <h5 class="white-text">Technologies used</h5>
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
                    © 2016 Carlos Eduardo Alfaro Orellana
                </div>
            </div>
        </footer>
    </section>
    
    <!-- Sweet Alert JS -->
    <script src="./../js/sweetalert.min.js"></script>
    
    <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="js/jquery-2.2.0.min.js"><\/script>')</script>
    
    <!-- Materialize JS -->
    <script src="./../js/materialize.min.js"></script>
    
    <!-- Malihu jQuery custom content scroller JS -->
    <script src="./../js/jquery.mCustomScrollbar.concat.min.js"></script>
    
    <!-- MaterialDark JS -->
    <script src="./../js/main.js"></script>
    

</body>
</html>
<script>

