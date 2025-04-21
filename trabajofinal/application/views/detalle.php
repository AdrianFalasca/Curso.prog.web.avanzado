


 <div class="id">

  <h2>Detalle del libro</h2>



   <?php foreach ($prod_1 as $k){?>


    <div id="nombre">Nombre: <?php echo $k["nombre"];?></div><br>
    <div id="nombre">Código: <?php echo $k["codigo"];?></div><br>
    <div id="nombre">Precio: $<?php echo $k["precio"];?></div><br>
    <div id="nombre">Stock: <?php echo $k["stock"];?> unidades</div>

<?php }?>




 </div>
