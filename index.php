<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <script src="jquery/jquery-3.2.1.min.js" type="text/javascript"></script>
        <title></title>
    </head>
    <body>
        <form id="frmusuario" action="controlador/validarUsuario.php" method="post">
            <div><label>Usuario:</label><input type="text" name="nomusuario" id="nomusuario"></div>
            <div><label>Clave:</label><input type="password" name="clave" id="clave"></div>
            <input id="enviar" type="button" onclick="" value="enviar">
            
            
        </form>
        
    </body>
    <script>
        $(document).ready(function(){
        $("#enviar").click(function(){
        /*$("form").hide();
        alert("cuidao todo cambio que hagas se va a ir \n\
              a la concha de la madre " + $("#nomusuario").val()); */
         if($("#nomusuario").val()!="" && $("#clave").val()!=""){
            $("#frmusuario").submit();
         }
         else{
            alert("Colocar bien datos");
          }
        }); 
         });
   </script>
</html>
