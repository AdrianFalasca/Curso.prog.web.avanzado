

        <form  method="POST" name="login_form" id="login_form" action="<?php echo base_url()?>login/login_ajax" onsubmit="login(); return false"  > 
         

         <h2><?php echo $titulo?></h2>
            

            <input type="text" name="email" id="email" placeholder="Email"><br>
            <input type="password" name="password" id="password" placeholder="Password"><br>
            <div id="mensaje"></div>
            <input type="submit" value="Ingresar" name="ingresar" id="ing">


            <p>¿Todavía no te  <a href="<?php echo base_url()?>registro">registraste </a> ? </p>
            

            

        </form> 

