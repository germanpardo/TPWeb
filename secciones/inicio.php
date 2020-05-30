<?php 

foreach($banners as $banner){

echo "<p id='banner' class='bclass' style='background-color:".$banner['color'].";'>".$banner['nombre']."</p>";

}
   
do{ 
$b = rand (0,(count ($trabajos))-1);
$c = rand (0,(count ($trabajos))-1);
}while($b == $c);
    
echo "<div id='' class='flex-container'>";

echo "<div id='container'>";

    echo "<img class='' src='imagenes/negativo.png' alt=''>";
    echo"<div class='text-block'>";
    echo "<p class=''>Nombre: ".$trabajos[$b]['nombre']."</p>";
    echo "<p class=''>Caracteristicas: ".$trabajos[$b]['caract']."</p>";
    echo "<p class=''>Cliente: ".$trabajos[$b]['para']."</p>";
    echo "<p class=''>Año: ".$trabajos[$b]['año']."</p>";
    echo "</div>";

echo "</div>";

echo "<div id='container'>";

    echo "<img class='' src='imagenes/negativo.png' alt=''>";
    echo"<div class='text-block'>";
    echo "<p class=''>Nombre: ".$trabajos[$c]['nombre']."</p>";
    echo "<p class=''>Caracteristicas: ".$trabajos[$c]['caract']."</p>";
    echo "<p class=''>Cliente: ".$trabajos[$c]['para']."</p>";
    echo "<p class=''>Año: ".$trabajos[$c]['año']."</p>";
    echo "</div>";
  
echo "</div>";

echo "</div>";
?>



<h1 class="cover-heading">Bienvenido.</h1>
<p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magnam exercitationem odio harum? Voluptas adipisci sequi atque voluptatibus dolore minima obcaecati cum voluptatem id, numquam iste, quasi a suscipit ex eos.</p>
<p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magnam exercitationem odio harum? Voluptas adipisci sequi atque voluptatibus dolore minima obcaecati cum voluptatem id, numquam iste, quasi a suscipit ex eos.</p>
<p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magnam exercitationem odio harum? Voluptas adipisci sequi atque voluptatibus dolore minima obcaecati cum voluptatem id, numquam iste, quasi a suscipit ex eos.</p>
<p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magnam exercitationem odio harum? Voluptas adipisci sequi atque voluptatibus dolore minima obcaecati cum voluptatem id, numquam iste, quasi a suscipit ex eos.</p>
<p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magnam exercitationem odio harum? Voluptas adipisci sequi atque voluptatibus dolore minima obcaecati cum voluptatem id, numquam iste, quasi a suscipit ex eos.</p>
<p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magnam exercitationem odio harum? Voluptas adipisci sequi atque voluptatibus dolore minima obcaecati cum voluptatem id, numquam iste, quasi a suscipit ex eos.</p>
<p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magnam exercitationem odio harum? Voluptas adipisci sequi atque voluptatibus dolore minima obcaecati cum voluptatem id, numquam iste, quasi a suscipit ex eos.</p>
