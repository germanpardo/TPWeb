<?php


$cat=isset($_GET['categoria'])?$_GET['categoria']:NULL;

?>

<nav class="nav nav-masthead justify-content-center">
    <?php                 
                        foreach ($categorias as $categ1 => $categ2){
             
                        $c= ($cat==$categ1)?'active':'';           echo '<a class="nav-link '.$c.'" href="index.php?seccion=trabajos&&categoria='.$categ1.'">'.$categ2.'</a>';
                        }
                    ?>
</nav>

<?php

if (!is_null($cat)){
     
    foreach($trabajos as $trabajo){
        
        if($trabajo['categoria']==$cat){
 
    echo "<img class='' src='imagenes/negativo.png' alt=''>";
    echo"<div class=''>";
    echo "<p class=''>Nombre: ".$trabajo['nombre']."</p>";
    echo "<p class=''>Caracteristicas: ".$trabajo['caract']."</p>";
    echo "<p class=''>Cliente: ".$trabajo['para']."</p>";
    echo "<p class=''>Año: ".$trabajo['año']."</p>";
    echo "</div>";
    
    }
    
    }
    
    $cat=NULL;
    
}else{
    
foreach($trabajos as $trabajo){
    echo "<img class='' src='imagenes/negativo.png' alt=''>";
    echo"<div class=''>";
    echo "<p class=''>Nombre: ".$trabajo['nombre']."</p>";
    echo "<p class=''>Caracteristicas: ".$trabajo['caract']."</p>";
    echo "<p class=''>Cliente: ".$trabajo['para']."</p>";
    echo "<p class=''>Año: ".$trabajo['año']."</p>";
    echo "</div>";
  
}}

?>