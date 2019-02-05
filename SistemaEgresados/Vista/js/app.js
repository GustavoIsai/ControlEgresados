
$(document).ready(function () {

  $("#loginForm").bind("submit",function(){

    //alert("Enviar Formulario");
    $.ajax({
      type:$(this).attr("method"),
      url:$(this).attr("action"),
      data:$(this).serialize(),
      beforeSend:function(){
        $("#loginForm button[type=submit]").html("Enviando..");
        $("#loginForm button[type=submit]").attr("disabled","disabled");
      },
      success:function(response){
        //alert("Conectado");
        if(response.estado == "true"){
          $("body").overhang({
            type: "success",
            message: "Ingreso correcto",
            callback:function(){
              window.location.href = "admin.php";
            }
          });
        }else{
          $("body").overhang({
            type: "error",
            message: "Error! Usuario ó Contraseña Incorrecta",
            closeConfirm: true
          });
          $("#loginForm button[type=submit]").html("Ingresar");
          $("#loginForm button[type=submit]").removeAttr("disabled");
        }

      },
      error:function(){
        $("body").overhang({
          type: "error",
          message: "Error! Usuario ó Contraseña Incorrecta"
      });
      $("#loginForm button[type=submit]").html("Ingresar");
      $("#loginForm button[type=submit]").removeAttr("disabled");
    }
    });
    return false;

  });

});
