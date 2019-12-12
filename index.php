<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Workfisc</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- <link rel="manifest" href="site.webmanifest"> -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">
    <!-- Place favicon.ico in the root directory -->

    <!-- CSS here -->
    <script src="https://kit.fontawesome.com/c043dd7bb6.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="dist/css/fontawesome.css">
    <link rel="stylesheet" href="dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="dist/css/owl.carousel.min.css">
    <link rel="stylesheet" href="dist/css/magnific-popup.css">
    <link rel="stylesheet" href="dist/css/themify-icons.css">
    <link rel="stylesheet" href="dist/css/nice-select.css">
    <link rel="stylesheet" href="dist/css/gijgo.css">
    <link rel="stylesheet" href="dist/css/animate.css">
    <link rel="stylesheet" href="dist/css/slicknav.css">
    <link rel="stylesheet" href="dist/css/style.css">
    <!-- <link rel="stylesheet" href="css/responsive.css"> -->
</head>

<body>
    <!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->

    <!-- header-start -->
    <header>
        <div class="header-area ">
            <div id="sticky-header" class="main-header-area">
                <div class="container-fluid p-0">
                    <div class="row align-items-center no-gutters">
                        <div class="col-xl-2 col-lg-2">
                            <div class="logo-img">
                                <a href="index.html">
                                    <img src="dist/img/portada/logo.png" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="col-xl-7 col-lg-7">
                            <div class="main-menu  d-none d-lg-block">
                                <nav>
                                    <ul id="navigation">
                                        <li><a class="active" href="index.php">Inicio</a></li>
                                        <li><a href="#">Normas</a></li>
                                        <li><a href="Support.html">Comisión</a></li>
                                        <li><a href="contact.html">Repositorio</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 d-none d-lg-block">
                            <div class="log_chat_area d-flex align-items-center">
                                <div class="live_chat_btn">
                                    <a class="boxed_btn_green login popup-with-form" href="#test-form">
                                        <i class="fas fa-user"></i>
                                        <span>Ingresar</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="mobile_menu d-block d-lg-none"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- header-end -->

    <!-- slider_area_start -->
    <div class="slider_area">
        <div class="single_slider d-flex align-items-center justify-content-center slider_bg_1 overlay2">
            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class="col-xl-9">
                        <div class="slider_text text-center">
                            <p>Enviaremos un codigo a tu correo, para poder ingresar</p>
                            <h3>Ingresa tu correo universitario</h3>
                            <div class="find_dowmain">
                                <form action="./controllers/ConfirmController.php" method="POST" class="find_dowmain_form">
                                    <input type="text" placeholder="usuario@utp.ac.pa" name="email">
                                    <button type="submit">Enviar</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- slider_area_end -->

    <!-- prising_area_start -->
    <div class="prising_area">
        <div class="container">
            <div class="row ">
                <div class="col-xl-12">
                    <div class="section_title text-center mb-100">
                        <h3>
                            Proyectos de Trabajo de Grado
                        </h3>
                        <p>Univercidad Tecnologica de panamá,<br>
                        Facultad de Ingenieria de Sistemas Computacionales 
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-xl-3 col-md-6 col-lg-6">
                    <img src="dist/img/portada/logo-utp.jpg" style="width: 200px;">
                </div>
                <div class="col-xl-3 col-md-6 col-lg-6">
                    <img src="dist/img/portada/fisc-logo.png" style="width: 200px;">
                </div>
            </div>
        </div>
    </div>
    <!-- prising_area_end -->

    <!-- core_features_start -->
    <div class="core_features">
        <div class="container">
            <div class="border-bottm">
                <div class="row ">
                    <div class="col-xl-6 col-md-6">
                        <div class="featuures_heading">
                            <h3>Normas y Requisitos  por Modalidad </h3>
                        </div>
                    </div>
                    <div class="col-xl-6 col-md-6">
                        <div class="featurest_tabs ">
                            <nav>
                                <div class="nav" id="nav-tab" role="tablist">
                                    <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab"
                                        href="#nav-home" role="tab" aria-controls="nav-home"
                                        aria-selected="true">Requisitos</a>
                                    <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab"
                                        href="#nav-profile" role="tab" aria-controls="nav-profile"
                                        aria-selected="false">Documentos</a>
                                </div>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-12">
                    <div class="tab-content" id="nav-tabContent">
                        <div class="tab-pane fade show active" id="nav-home" role="tabpanel"
                            aria-labelledby="nav-home-tab">
                            <div class="row">
                                <div class="col-xl-6">
                                    <div class="single_features">
                                        <div class="icon"><i class="fas fa-book-open"></i></div>
                                        <div class="features_info">
                                            <h4>
                                                Trabajo Teorico
                                            </h4>
                                            <p>
                                                consiste en una tesis sobre una investigación inédita que concluye 
                                                con un nuevo modelo o resultados sobre un tema tratado. El trabajo 
                                                deberá incluir la formulación de una hipótesis, la cual debe estar 
                                                acompañada del desarrollo de modelos teóricos y/o cálculos que justifiquen 
                                                los resultados. 
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="single_features">
                                        <div class="icon blue"><i class="fas fa-chalkboard-teacher"></i></div>
                                        <div class="features_info">
                                            <h4>
                                                Teórico-Práctico
                                            </h4>
                                            <p>
                                                Consiste en una tesis sobre la aplicación de los fundamentos teóricos a
                                                la solución de un problema o necesidad existente en la sociedad. El trabajo
                                                deberá incluir experiencias de laboratorio y/o cálculos que justifiquen la
                                                solución propuesta. 
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="single_features">
                                        <div class="icon pink"><i class="far fa-thumbs-up"></i></div>
                                        <div class="features_info">
                                            <h4>
                                                1 Requisito
                                            </h4>
                                            <p>
                                                OCursar el último año de su plan de estudios o el consentimiento 
                                                de la Comisión de Trabajo de Graduación.  
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="single_features">
                                        <div class="icon yellow"><i class="far fa-thumbs-up"></i></div>
                                        <div class="features_info">
                                            <h4>
                                                2 Requisito
                                            </h4>
                                            <p>Índice Académico no menor de 1.0</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                            <div class="row">
                                <div class="col-xl-6">
                                    <div class="single_features">
                                        <div class="icon"><i class="far fa-file-pdf"></i></div>
                                        <div class="features_info">
                                            <h4>
                                                Anteproyecto de Trabajo de Graduación 
                                            </h4>
                                            <p>formato y estructura descritos en la Sección V de este reglamento donde explique su propuesta</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="single_features">
                                        <div class="icon blue"><i class="far fa-file-alt"></i></div>
                                        <div class="features_info">
                                            <h4>
                                                Registro oficial de trabajo de graduació
                                            </h4>
                                            <p>Our set he for firmament morning sixth subdue darkness creeping gathered
                                                divide our let god moving.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="single_features">
                                        <div class="icon pink"><i class="far fa-file"></i></div>
                                        <div class="features_info">
                                            <h4>
                                                Créditos oficiales
                                            </h4>
                                            <p>Our set he for firmament morning sixth subdue darkness creeping gathered
                                                divide our let god moving.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="single_features">
                                        <div class="icon yellow"><i class="far fa-file"></i></div>
                                        <div class="features_info">
                                            <h4>
                                                Constancia de matrícula en la que aparece matriculado Trabajo de Graduación.
                                            </h4>
                                            <p>Our set he for firmament morning sixth subdue darkness creeping gathered
                                                divide our let god moving.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- core_features_end -->

    <!-- dedicated_support_start -->
    <div class="dedicated_support support_bg">
        <div class="container">
            <div class="row">
                <div class="col-xl-5 col-md-8">
                    <div class="support_info">
                        <h3>Comisión de Trabajo de Graduación</h3>
                        <p> 
                            De acuerdo al Artículo 8 del Reglamento para la Inscripción, 
                            Asesoría y Sustentación de los Trabajos de Graduación de Licenciatura
                            aprobado por el Consejo Académico,  las funciones de la Comisión de Trabajo
                            de Graduación son las siguientes:  
                        </p>
                        <div class="get_started">
                            <a class="boxed_btn_green" href="#">
                                <span>Descargar</span>
                            </a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- dedicated_support_end -->

    
    <div class="faq_area">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="accordion_heading">
                        <h3>Preguntas Frecuentes</h3>
                    </div>
                    <div id="accordion">
                        <div class="card">
                            <div class="card-header" id="headingTwo">
                                <h5 class="mb-0">
                                    <button class="btn btn-link collapsed" data-toggle="collapse"
                                        data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        <i class="far fa-question-circle"></i> ¿Cuando debo Presentar el trabajo de Graduación?
                                    </button>
                                </h5>
                            </div>
                            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo"
                                data-parent="#accordion">
                                <div class="card-body">
                                        Durante el último año lectivo los graduandos que aspiren a obtener el título de Licenciado se dedicarán, 
                                        bajo la dirección de un profesor de la Facultad, a preparar un Trabajo de Graduación cuyo tema versará
                                        preferentemente sobre problemas nacionales relacionados con su carrera, y cuya aprobación será indispensable
                                        para recibir el título (Artículo 223 del Estatuto Universitario). 
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingOne">
                                <h5 class="mb-0">
                                    <button class="btn btn-link collapsed" data-toggle="collapse"
                                        data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                        <i class="far fa-question-circle"></i> ¿Tiempo Limite?
                                    </button>
                                </h5>
                            </div>
                            <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion"
                                style="">
                                <div class="card-body">
                                    Los estudiantes deberán someter el Trabajo de Graduación, a más tardar cuatro (4) años después de haber terminado 
                                    sus respectivos planes de estudio, o de lo contrario deberán repetir las asignaturas del último año para poder presentarlo
                                    (Artículo 225 del Estatuto Universitario).  
                                    Si el estudiante no presenta su Trabajo de Graduación en el periodo correspondiente, 
                                    el Decano tendrá la potestad de prorrogar la entrega del Trabajo de Graduación hasta un (1)
                                    año calendario, previa consulta con el Asesor del Trabajo de Graduación en caso de que se amerite
                                    (Artículo 225 del Estatuto Universitario).  
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingThree">
                                <h5 class="mb-0">
                                    <button class="btn btn-link collapsed" data-toggle="collapse"
                                        data-target="#collapseThree" aria-expanded="false"
                                        aria-controls="collapseThree">
                                        <i class="far fa-question-circle"></i> ¿Puedo solicitar una prórroga?
                                    </button>
                                </h5>
                            </div>
                            <div id="collapseThree" class="collapse" aria-labelledby="headingThree"
                                data-parent="#accordion">
                                <div class="card-body">
                                        La solicitud de extensión de prórroga, adicional al año otorgado por el Decano, deberá ser dirigida a la Comisión de Trabajo de Graduación de la Facultad de Ingeniería de Sistemas Computacionales y deberá ser firmada por el(los) solicitante(s) y su Asesor(a). La nota deberá detallar los puntos principales que justifiquen el retraso en el desarrollo del trabajo, evidencias de avances a la fecha, cronograma de actividades para culminar el trabajo o cualquier información adicional que sustente la solicitud. La Comisión de Trabajo de Graduación evaluará la solicitud y hará sus recomendaciones del caso al Decano(a) de la FISC (Artículo 225 del Estatuto Universitario).  
                                        El estudiante tendrá derecho a apelar, ante la Junta de Facultad, la decisión sobre la extensión, la cual tomará la decisión definitiva. 
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- faq_area_end -->


    <!-- lets_launch_start -->
    <div class="lets_launch launch_bg_1 overlay2">
        <div class="launch_text text-center">
            <h3>Repositorio de Trbajo de Grado</h3>
            <p>Estamos trabajando para que todos los proyectos de grado esten cundo lo nesecites, en cualquier momento</p>
            <div class="chat">
                <a class="boxed_btn_green2" href="#">
                    <span>Repositorio</span>
                </a>
            </div>
        </div>
    </div>
    <!-- lets_launch_end -->

    <!-- footer -->
    <footer class="footer">
        <div class="footer_top">
            <div class="container">
                <div class="row">
                    <div class="col-xl-3 col-md-6 col-lg-3">
                        <div class="footer_widget">
                            <div class="footer_logo">
                                <a href="#">
                                    <img src="dist/img/portada/logo.png" alt="">
                                </a>
                            </div>
                            <p class="footer_text doanar"> <a class="first" href="#">+507 560-3656
                                </a> <br>
                                <a href="#"> buzondesugerencias@utp.ac.pa</a></p>
                        </div>
                    </div>
                    <div class="col-xl-2 col-md-6 col-lg-2 ml-5">
                        <div class="footer_widget">
                            <h3 class="footer_title">
                                Navegación
                            </h3>
                            <ul>
                                <li><a href="#">Inicio</a></li>
                                <li><a href="#">Normas</a></li>
                                <li><a href="#">Comisión</a></li>
                                <li><a href="#">Repositorio</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="copy-right_text">
            <div class="container">
                <div class="footer_border"></div>
                <div class="row">
                    <div class="col-xl-12">
                        <p class="copy_right text-center">
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
        Copyright &copy;<script>document.write(new Date().getFullYear());</script> Todos los derechoss Reservados | UTP - FISC </a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- footer -->
    <!-- link that opens popup -->

    <!-- form itself end-->
    <form id="test-form" class="white-popup-block mfp-hide" action="./controllers/LoginController.php" method="POST">
        <div class="popup_box ">
            <div class="popup_inner">
                <div class="logo text-center">
                    <a href="#">
                        <img src="dist/img/portada/form-logo.png" alt="">
                    </a>
                </div>
                <h3>Ingresar</h3>
                    <div class="row">
                        <div class="col-xl-12 col-md-12">
                            <input type="email" placeholder="Email" name="email">
                        </div>
                        <div class="col-xl-12 col-md-12">
                            <input type="password" placeholder="Password" name="password">
                        </div>
                        <div class="col-xl-12">
                            <button type="submit" class="boxed_btn_green">Ingresar</button>
                        </div>
                    </div>
            </div>
        </div>
    </form>
    <!-- form itself end -->



    <!-- JS here -->
    <script src="dist/js/vendor/modernizr-3.5.0.min.js"></script>
    <script src="dist/js/vendor/jquery-1.12.4.min.js"></script>
    <script src="dist/js/popper.min.js"></script>
    <script src="dist/js/bootstrap.min.js"></script>
    <script src="dist/js/owl.carousel.min.js"></script>
    <script src="dist/js/isotope.pkgd.min.js"></script>
    <script src="dist/js/ajax-form.js"></script>
    <script src="dist/js/waypoints.min.js"></script>
    <script src="dist/js/jquery.counterup.min.js"></script>
    <script src="dist/js/imagesloaded.pkgd.min.js"></script>
    <script src="dist/js/scrollIt.js"></script>
    <script src="dist/js/jquery.scrollUp.min.js"></script>
    <script src="dist/js/wow.min.js"></script>
    <script src="dist/js/nice-select.min.js"></script>
    <script src="dist/js/jquery.slicknav.min.js"></script>
    <script src="dist/js/jquery.magnific-popup.min.js"></script>
    <script src="dist/js/plugins.js"></script>
    <script src="dist/js/gijgo.min.js"></script>

   

    <script src="dist/js/main.js"></script>
</body>

</html>