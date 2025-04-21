<!DOCTYPE html>
<html>
<head>
  <title></title>
  <meta charset="utf-8">
 <script
  src="https://code.jquery.com/jquery-3.4.1.min.js"
  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
  crossorigin="anonymous"></script>
   <script src="<?php echo base_url()?>/public/assets/js/jquery-3.5.1.js"></script>
   <link rel="stylesheet"  href="<?php echo base_url()?>/public/assets/css/estilos.css">
   <script type="text/javascript" src="<?php echo base_url()?>/public/assets/js/script.js"></script>
  
   


</head>
<body>
<header>



<div id="barra">


    <div>  <a href="<?php echo base_url()?>home"> Home</a> </div>
    
   

</div>
 
<div id="barra2">

<div>  <a href="<?php echo base_url()?>login"> Iniciar sesión</a> </div>
  
    

</div>

</header>

<h1>Librería filosófica</h1>

<?php echo $contenido?>

 <footer>
        
        <div id="datos_2">
            <p>Curso de programación web avanzado.</p>

            
        </div>
            
   </footer>

</body>
</html>
