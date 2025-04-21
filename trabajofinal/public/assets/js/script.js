function login(){
    var url = $("#login_form").attr("action");
    var email = $("#email").val()
    var password = $("#password").val()
   

    $.ajax({

        url:url,
        type:"POST", 
        data:"email="+email+"&password="+password,
        dataType:"json",
        success: function(response){
            
 if(response.status=="ok"){

                alert ("Bienvenido/a  "+email);
                window.location.href = "/trabajofinal/home";

            }

            else{
                $("#mensaje").html(response.mensaje)
            }
            
            
           
        }

       

    })
}



function Enviar(){
    var url = $("#registro_form").attr("action");
    var nombre = $("#nombre").val()
    var apellido = $("#apellido").val()
    var email = $("#email").val()
    var telefono = $("#telefono").val()
    var password = $("#password").val()
    var conf_pass = $("#conf_pass").val()

    $.ajax({

        url:url,
        type:"POST", 
        data:"nombre="+nombre+"&apellido="+apellido+"&email="+email+"&telefono="+telefono+"&password="+password+"&conf_pass="+conf_pass,
        dataType:"json",
        success: function(response){
            
 if(response.status=="ok"){

                alert ("Gracias por registrarse  ");
                window.location.href = "/trabajofinal/login";

            }

            else{
                $("#mensaje").html(response.mensaje)
            }
            
            
           
        }

       

    })
}