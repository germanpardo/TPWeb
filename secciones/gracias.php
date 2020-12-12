<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=500px, initial-scale=1.0">
    <meta name="description" content="Web Personal">
    <meta name="author" content="Pardo Group">
    <title>Pardo Germán</title>
    <link rel="icon" href="../imagenes/GPico.ico">
    <!--<link rel="stylesheet" href="estilo/estilo.css">-->
    <link rel="stylesheet" href="../estilo/bootstrap.min.css">
    <link rel="stylesheet" href="../estilo/cover.css">
    <link href="https://fonts.googleapis.com/css?family=Kanit" rel="stylesheet">

</head>

<body class="text-center">

    <div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">

        <header class="masthead mb-auto">


            <h1>¡Gracias por contactarnos!</h1>

        

        <?php  
    
if(!empty($_POST['femail']&&$_POST['fname']&&$_POST['comment'])) {
    
    echo "<img src='../imagenes/ok.png' alt=''>";
    echo "<h2>".$_POST['fname']."\n</h2>";
    echo "<h3>Su consulta se ha enviado con exito. A la brevedad enviaremos la respuesta al siguiente mail:\n<h3>";
    echo "<h3>".$_POST['femail']."\n</h3>";
    
   /* $para = 'german.pardo@davinci.edu.ar';
    $titulo = $_POST['name'];
    $mensaje = $_POST['comment'];
    $cabeceras = $_POST['email'];
    
    mail($para, $titulo, $mensaje, $cabeceras);*/

}else{

echo "<img src='../imagenes/negativo.png' alt=''>"; 
echo "<h2>Ocurrió un error y el formulario no ha sido enviado. </h2>";
echo "<h2>Por favor, vuelva atrás y verifique la información ingresada</h2>";

}


?>
</header>
    </div>

</body>

</html>
