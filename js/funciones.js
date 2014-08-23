/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$(document).ready(function(){
//valido en el archivo inser_usuario que las claves sean iguales y desbloqueo el resto del formulario
    $("#reg_usu").on('change', 'input[name=reclave]', function(){
        c1=$('input[name=clave]').val();
        c2=$('input[name=reclave]').val();
        if(c1==c2)
        {
         $("input[name=nombre]").removeAttr("disabled");  
         $("input[name=apellido]").removeAttr("disabled");
         $("input[name=cedula]").removeAttr("disabled");
         $("input[name=t1]").removeAttr("disabled");
         $("input[name=t2]").removeAttr("disabled");
         $("textarea[name=direccion]").removeAttr("disabled");
         $("input[name=email]").removeAttr("disabled");
         $("select[name=nivel]").removeAttr("disabled");
         $("button[name=sub]").removeAttr("disabled");
        }
     else
     {
         alert('Las claves no coinciden');
     }
    });
//modificar usuario
$("#moduser").on('click','#idus', function(){
         v=$(this).text();
         $.post("modifuser.php",{iduser: v},function(datos){
         $("#page-wrapper").html(datos);  
        });
        });
//modificar cliente
$("#modcli").on('click','#idcli', function(){
         v=$(this).text();
         $.post("modifcli.php",{idclien: v},function(datos){
         $("#page-wrapper").html(datos);  
        });
        });
// FUNCIONES PARA EVENTOS EN BOTONES #page-wrapper
    $("#page-wrapper").click("#boton", function(){
       p=$(this).attr('name');
       switch(p)
       {
           case 'elimuser':
            x=$("#iu1").val();
            $.post("../../eliminar.php",{iu: x, opc: v},function(datos){
            $("#page-wrapper").html(datos);
            });
            break;
            case 'actiuser':
            x=$("#iu").val();
            $.post("../../activar.php",{iu: x, opc: v},function(datos){
            $("#page-wrapper").html(datos);
            });
            break;
            case 'elimcli':
            x=$("#icli").val();
            $.post("../../eliminar.php",{id_cli: x, opc: v},function(datos){
            $("#page-wrapper").html(datos);
            });
            break;
       }
        
    });

});
function sumaProductos(){
  var rows = $("#selprodf1 tbody tr");
  var nuevoTotal = 0;
  if(rows.size()==0){
    $("#subtotal").val("0.00");
  }else{
    rows.each(function(index, data ){
      var precio = parseFloat($(this).find("#precio").val());
      if(isNaN(parseInt($(this).find("input[id^=l_pc]").val()))){
        var cantidad = 0;
      }else{
        var cantidad = parseInt($(this).find("input[id^=l_pc]").val());
      }
      
      nuevoTotal += (precio * cantidad);
      alert(nuevoTotal);
      $("#subtotal").val(nuevoTotal);
    });   
  }            
}
function lista_p(x, a, c){
            if($("#sel_"+c).prop('checked'))
            {
              $("#selprodf1 tbody").append( "<tr id='"+c+"'>" +
              "<td>" + c + "</td>" +
              "<td>" + x + "</td>" +
              "<td><center><input class='form-control' type='text' name='l_pc"+c+"' id='l_pc"+c+"' min='1' placeholder='0' required autofocus /></center></td>" +
              "<td><center><input class='form-control' name='precio' id='precio' type='text' value="+a+" readonly /></center></td>" +
              "<td><a href='#' onclick='bo("+c+"); sumaProductos();'>Borrar</a></td>" +
              "</tr>" ); 
              $("#selprodf1 tbody").on('focus','#l_pc'+c,function(){
                $(this).on('change', function(){
                  sumaProductos();
                });
              });
            }
            else
            {
               bo(c);
               sumaProductos();
            }
};
function bo(x){
  $("#"+x).remove();
  $("#sel_"+x).prop("checked",false);
};

$("#fact").click(function(){
  window.open("factura.html", "Hello factura", "width=1500, height=690");
   v=$("#buscli").val();
   w=$("#l_pc"+c).val();
   x=$("#dev"+c).val();
   y=$("#"+c).val();
   z=$("#subtotal").val();
    $.post("../../facturar.php",{bc: v, can: w, d: x, id: y, sub: z},function(datos){
    $("#page-wrapper").html(datos);
    });
});


