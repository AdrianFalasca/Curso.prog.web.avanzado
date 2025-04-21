
 <div id="id">
    <h2>Libros de Aristóteles</h2>

    <?php foreach ($prod_1 as $k  ){?>

  

    <div id="nombre"> <?php echo $k["nombre"]?>
    <a id="detalle" href="<?php echo base_url()?>detalle/libro/<?php echo $k["Id"]?>">-detalle</a><br><br>

    </div>
<?php } ?>

</div>





 <div id="id">
    <h2>Libros de Platón</h2>

    <?php foreach ($prod_2 as $k  ){?>

  

    <div id="nombre"> <?php echo $k["nombre"]?>
    <a id="detalle" href="<?php echo base_url()?>detalle/libro/<?php echo $k["Id"]?>">-detalle</a><br><br>

   </div>
 
<?php } ?>


</div>



 <div id="id" >
    <h2>Libros de San Agustín</h2>

    <?php foreach ($prod_3 as $k  ){?>

  

    <div id="nombre"> <?php echo $k["nombre"]?>
    <a id="detalle" href="<?php echo base_url()?>detalle/libro/<?php echo $k["Id"]?>">-detalle</a><br><br>

   </div>
 
<?php } ?>


</div>
