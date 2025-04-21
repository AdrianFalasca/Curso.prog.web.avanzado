


        <form  method="POST" name="registro_form" id="registro_form" action="<?php echo base_url()?>registro/registro_ajax" onsubmit="Enviar(); return false"  > 

            <h2><?php echo $titulo?></h2>

             <input type="text" name="nombre" id="nombre" placeholder="Nombre (*)" >
            
            
            <input type="text" name="apellido" id="apellido" placeholder="Apellido (*)">
            

            <input type="text" name="email" id="email" placeholder="Email (*)">
            
            
            <input type="text" name="telefono" id="telefono" placeholder="Teléfono">
           
           
            
            <input type="password" name="password" id="password" placeholder="Password (*)">
            
           
            <input type="password" name="conf_pass" id="conf_pass" placeholder="Confirmar Password (*)">
            <div id="mensaje" class="mensaje"> </div>

            
            
            
            <p> (*) Campos obligatorios </p>

           
            
            <input type="submit" value="Enviar" name="enviar" id="env" >

             <p> ¿Ya estás registrado?  

                <a href="<?php echo base_url()?>login">Login</a>
            </p>
         
</form>
