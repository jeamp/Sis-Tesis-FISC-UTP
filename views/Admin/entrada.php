<?php 
  require("../../controllers/adminEntradaController.php");
 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Entrada</title>
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
        .col{
          margin-left: 2%;
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
                      <a class="nav-link" href="../Estudiante/solicitudes.html">Solictudes</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="https://ridda2.utp.ac.pa/">Repositorio</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="asesores.html">Asesores</a>
                    </li>
                  </ul>            
                  <a class="text-dark icon">Cerrar Sesión</a> <i class="fas fa-user icon "></i>
            </div>
        </nav>
        <section class="jumbotron text-center bg-white">
                <div class="container">
                        <h1 class="jumbotron-heading">Anteproyectos de Estudiantes</h1>
                        <p class="lead text-muted">Camino a la excelencia a través del mejoramiento continuo </p>
                        <p>
                          <a href="https://ridda2.utp.ac.pa/" class="btn  my-2">Reglamento</a>
                        </p>
                </div>
        </section>

        <div class="container">
                <div class="row">
                        <div class="col-12">
                          <div class="card">
                            <div class="card-header">
                              <h3 class="card-title">Nuevo</h3>
              
                              <div class="card-tools">
                                <div class="input-group input-group-sm" style="width: 150px;">
                                  <input type="text" name="table_search" class="form-control float-right" placeholder="Buscar">
              
                                  <div class="input-group-append">
                                    <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body table-responsive p-0">
                              <table class="table table-hover">
                                <tr>
                                  <th>ID</th>
                                  <th>Titulo</th>
                                  <th>Asesor</th>
                                  <th>Estudiante</th>
                                  <th>Ver</th>
                                </tr>
                                <?php foreach($entrada->show() as $en): ?>
                                <tr>
                                  <td><?php echo $en[0] ?></td>
                                  <td><?php echo $en[1] ?></td>
                                  <td><?php echo $en[4]." ".$en[5] ?></td>
                                  <td><?php echo $en[2]." ".$en[3] ?></td>
                                  <td><a href="revision.php?id=<?php echo $en[0]; ?>">Ver</a></td>
                                </tr>
                                <?php endforeach;?>
                              </table>
                            </div>
                            <!-- /.card-body -->
                          </div>
                          <!-- /.card -->
                        </div>
                      </div><!-- /.row -->
        </div>
        <footer class="footer-f  py-3">
                <div class="container-f">
                  <span class="text-muted">Universidad tecnologica de Panamá.</span>
                </div>
        </footer>
<script src="../../dist/js/bootstrap.js"></script>

</body>
</html>