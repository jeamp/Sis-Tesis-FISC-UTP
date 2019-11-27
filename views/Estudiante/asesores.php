<?php 
  header('Content-Type: text/html; charset=UTF-8');
  require("../../controllers/AsesoresController.php");
 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Asosores</title>
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
            font-size: 50px;
            margin-top: 5%;
            color: white;
        }
        .container-f {
            width: auto;
            max-width: 680px;
            padding: 0 15px;
        }
        .footer-f {
        background-color: #f5f5f5;
        margin-top: 17%;
        }
        .d5-1{
            width: 40%;
        }
        .card{
            width: 20%;
            padding: 5%;
        }
        .r{
            float: right;
            width: 20%;
        }
        .jumbotron{
            background-color: #330C2D;
            color: white;
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
                    <li class="nav-item">
                      <a class="nav-link" href="index.html">Inicio </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="solicitudes.html">Solictudes</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#">Repositorio</a>
                    </li>
                    <li class="nav-item active">
                      <a class="nav-link" href="asesore.html">Asesores</a>
                    </li>
                  </ul>

                  <a class="text-dark icon">Cerrar Sesión</a> <i class="fas fa-user icon "></i>
            </div>
        </nav>  
        <section class="jumbotron ">
                <div class="container">
                        <h1 class="jumbotron-heading">Asesores</h1>
                </div>
        </section>
       
        <div class="container">
            <div >
                   <fom>
                        <div class="form-group d5-1">
                            <select class=" col custom-select my-1 mr-sm-2 " id="inlineFormCustomSelectPref">
                                     <option selected>Departamento</option>
                                     <option value="1">Lic Desarrollo Software</option>
                                     <option value="2">Ingenieria</option>
                            </select>
                        </div>
                   </form>           
            </div>
            <div class="">
                <div class="container row">
                  
                   <?php foreach($get->show() as $as): ?>
                    <div class="card ml-5" style="width:20rem;">
                      <img src="../../<?php  echo $as[3] ?>" class="card-img-top" alt="...">
                      <div class="card-body">
                        <h5 class="card-title"><?php echo $as[0]." ".$as[1]; ?></h5>
                        <p class="card-text"><?php echo $as[2]; ?></p>
                      </div>
                      <div class="card-footer">
                        <small class="text-muted">3 proyectos</small>
                      </div>
                    </div>
                   <?php endforeach; ?> 
                </div>        
            </div>     
        </div>

        <footer class="footer-f  py-3">
                <div class="container-f">
                  <span class="text-muted">Place sticky footer content here.</span>
                </div>
        </footer>
<script src="../../dist/js/bootstrap.js"></script>

</body>
</html>