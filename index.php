<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=80%, initial-scale=1.0">
    <meta name="description" content="Web Personal">
    <meta name="author" content="Pardo Group">
    <title>Pardo Germán</title>
    <link rel="icon" href="imagenes/GPico.ico">
    <link rel="stylesheet" href="estilo/estilo.css">
    <link href="https://fonts.googleapis.com/css2?family=Press+Start+2P&display=swap" rel="stylesheet">
    <!--<link rel="stylesheet" href="estilo/bootstrap.min.css">-->
    <!--<link rel="stylesheet" href="estilo/cover.css">-->
    <link href="https://fonts.googleapis.com/css?family=Kanit" rel="stylesheet">
</head>

<body class="">

    <?php    
            require('arrays.php');
            require('config.php');
            require('funciones.php');
        
            $secc=isset($_GET['seccion'])?$_GET['seccion']:'inicio';
    ?>

    <h1 class="">Pardo Germán</h1>


    <h2>Analista de sistemas</h2>

    <header class="">
        <nav class="">
            <ul>
                <?php                 
                        foreach ($menu as $menu1 => $menu2){
             
                        $clase= ($secc==$menu1)?'active':'';           echo '<li><a class="'.$clase.'" href="index.php?seccion='.$menu1.'">'.$menu2.'</li></a>';
                        }
                    ?>
            </ul>
        </nav>

    </header>

    <seccion class="">
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
    </seccion>

    <footer class="">
        <p>Copyright &copy; 2020 by <a href="losentimos.html">Pardo Group</a>.</p>
    </footer>



    <!--<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="../../assets/js/vendor/popper.min.js"></script>
    <script src="../../dist/js/bootstrap.min.js"></script>-->
</body>

</html>
