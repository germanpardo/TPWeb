<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=80%, initial-scale=1.0">
    <meta name="description" content="Web Personal">
    <meta name="author" content="Pardo Group">
    <title>Pardo Germán</title>
    <link rel="icon" href="imagenes/GPico.ico">
    <!--<link rel="stylesheet" href="estilo/estilo.css">-->
    <link rel="stylesheet" href="estilo/bootstrap.min.css">
    <link rel="stylesheet" href="estilo/cover.css">
    <link href="https://fonts.googleapis.com/css?family=Kanit" rel="stylesheet">
</head>

<body class="text-center">

    <div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">

        <header class="masthead mb-auto">
            <?php    
                    require('arrays.php');
                    require('config.php');
                    require('funciones.php');
        
                    $secc=isset($_GET['seccion'])?$_GET['seccion']:'inicio';    
            ?>

            <div class="inner">
                <h1 class="masthead-brand">Pardo Germán</h1>
                <nav class="nav nav-masthead justify-content-center">
                    <?php                 
                        foreach ($menu as $menu1 => $menu2){
             
                        $clase= ($secc==$menu1)?'active':'';           echo '<a class="nav-link '.$clase.'" href="index.php?seccion='.$menu1.'">'.$menu2.'</a>';
                        }
                    ?>
                </nav>
            </div>
        </header>

        <main role="main" class="inner cover">
            <?php           
                switch($secc){
                    case 'inicio':
                    case 'trabajos':
                    case 'quienes':
                    case 'contacto':
                    include ('secciones/'.$secc.'.php');               
                    break;
                    default:
                        include ('error.php');
                }
            ?>
        </main>

        <footer class="mastfoot mt-auto">
            <div class="inner">
                <p>Copyright &copy; 2018 by <a href="losentimos.html">Pardo Group</a>.</p>
            </div>
        </footer>

    </div>
    
    <!--<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="../../assets/js/vendor/popper.min.js"></script>
    <script src="../../dist/js/bootstrap.min.js"></script>-->
</body>
</html>
