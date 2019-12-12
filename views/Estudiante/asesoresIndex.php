
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
       
        <div class="container">
            <div class="">
                <div class="container row">
                  
                  <?php foreach($get->show() as $as): ?>
                    <div class="card ml-5" style="width:20rem;">
                      <img src="../../dist/img/profesores/<?php  echo $as[3] ?>" class="card-img-top" alt="...">
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

<script src="../../dist/js/bootstrap.js"></script>

</body>
</html>