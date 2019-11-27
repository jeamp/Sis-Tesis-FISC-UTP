<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Inicio</title>
    <link rel="stylesheet" href="../../dist/css/bootstrap.css">
    <link rel="stylesheet" href="../../dist/css/adminlte.css">
    <script src="https://kit.fontawesome.com/c043dd7bb6.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../../dist/css/fontawesome.css">
    <style>
        .navbar{
            background-color:white;
        }
        .logo-utp{
            width:60px;
            border-radius: 50px;   
            margin-left: 2%;  
        }
        .pnav{
            margin-left: 2%;
        }
        .icon{
            color: black;
            margin-right: 2%;
        }
        .btn{
            background-color: #801F71;
            color: white;
        }
        .sub{
            margin-top: 20%;
            font-size: 30px;
            color: white;
        }
        .icono{
            font-size: 70px;
            margin-top: 5%;
            color: white;
        }
        .c{
            padding-block-end: 7%;
            background-color: #238005;
        }
        .c2{
            padding-block-end: 7%;
            background-color:#801F71 ;
        }
        .c3{
            padding-block-end: 7%;
            background-color:#801F71 ;
        }
        .container-f {
            width: auto;
            max-width: 680px;
            padding: 0 15px;
        }
        .msm{
          margin-top: 10%;
        }
        .footer-f {
        background-color: #f5f5f5;
        margin-top: 17%;
        }
        .row{
          margin-top: 2%;
        }
    </style>
</head>
<body>
        <nav class="navbar navbar-expand-lg navbar-light">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
                  <img src="../../dist/img/logo.jpg" class="logo-utp">
                  
                  <ul class="navbar-nav mr-auto mt-2 mt-lg-0 text-dark">
                    <li class="nav-item active">
                      <a class="nav-link" href="index.html">Inicio </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="solicitudes.html">Solictudes</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="https://ridda2.utp.ac.pa/">Repositorio</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="asesores.php">Asesores</a>
                    </li>
                  </ul>
                  <a class="text-dark icon" href="../../index.php">Cerrar Sesión</a> <i class="fas fa-user icon "></i>
            </div>
        </nav>
        <section class="jumbotron text-center bg-white">
                <div class="container">
                        <h1 class="jumbotron-heading">Trabajos de Grado </h1>
                        <p class="lead text-muted">Evaluar la Solicitud de Trabajo de Graduación presentado por el estudiante y someter al Vicedecano Académico la designación del Asesor. UTP Camino a la excelencia a través del mejoramiento continuo </p>
                        <p>
                          <a href="https://ridda2.utp.ac.pa/" class="btn  my-2">Repositorio de Trabajos</a>
                        </p>
                </div>
        </section>
        <div class="container"> 
            <div class="row">
                <div class="col-md-5  text-center  bg-success c">
                    <p class="sub"> Anteproyecto</p>
                    <div><a href="Registro_Tema.php"><i class="fas fa-pencil-alt icono"></a></i></div>
                </div>
                <div class="col text-center bg-light">
                    <p class="msm">Aun no a registrado su Tema</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-5  text-center c2">
                    <p class="sub"> Sustentación</p>
                    <div><a href="soli_Sustentacion.html"><i class="far fa-clock icono"></a></i></div>
                </div>
                <div class="col text-center bg-light">
                    <p class="msm">Elecion para la fecha de sustentación</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-5  text-center bg-primary c3">
                    <p class="sub"> Trabajo</p>
                    <div><a href="#"><i class="fas fa-file-upload icono"></a></i></div>
                </div>
                <div class="col text-center bg-light">
                    <p class="msm">Espacio para subir el trabajo de Graduacion </p>
                </div>
            </div>
            
        </div>

        <footer class="footer-f  py-3">
                <div class="container-f">
                  <span class="text-muted">Universidad tecnologica de Panamá.</span>
                </div>
        </footer>
<script src="../../dist/js/bootstrap.js"></script>

</body>
</html>