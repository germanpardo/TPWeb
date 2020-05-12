<?php 

foreach($banners as $banner){

echo "<p id='banner' class='' style='background-color:".$banner['color'].";'>".$banner['nombre']."</p>";

}
   

$b = rand (0,(count ($trabajos))-1);

    echo "<img class='' src='imagenes/negativo.png' alt=''>";
    echo"<div class=''>";
    echo "<p class=''>Nombre: ".$trabajos[$b]['nombre']."</p>";
    echo "<p class=''>Caracteristicas: ".$trabajos[$b]['caract']."</p>";
    echo "<p class=''>Cliente: ".$trabajos[$b]['para']."</p>";
    echo "<p class=''>Año: ".$trabajos[$b]['año']."</p>";
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


<script>
    function showSlides();

</script>
