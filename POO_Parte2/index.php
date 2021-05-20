<!DOCTYPE html> 
<html lang="es">
 <head>     
 <meta charset="UTF-8">    
 <meta name="viewport" content="width=device-width, initial-scale=1.0">    
 <link rel="stylesheet" href="css/estilos.css">  
  <title>Mi tienda</title> 
  </head> 
  <body>     
  <?php require 'componentes\cabecera.php';    ?>  
     <center>     
     <form action="confirmacion.php" id="frmTienda" name="frmTienda" method="post"enctype="multipart/form-data"target="_self">    
      <table width="700" border="0" cellspacing="0" cellpadding="0">   
      <tr>    
     <td width="97" align="right" valign="bottom"><p>Producto:</p></td>      
     <td width="23" align="left" valign="middle">&nbsp;</td>      
     <td width="567" align="left" valign="bottom">       
    <select name="cmbProducto" id="cmbProducto"   onchange="javascript:CambiarImagen();">         
    <option value="ninguno">Seleccione</option>       
    <option value="Galaxy S6">Samsung Galaxy S6 - $790</option> 
     <option value="iPhone 6S">iPhone 6S - $890</option>           
    </select>          
     </td>          
    <td width="308" rowspan="2" align="center" valign="middle">        
    <img id="FotoProducto" src="img/noimagen.jpg" width="250" height="250”>      
         </td>    
     </tr>     
     <tr>       
     <td height= "290px" align="right" valign="top"><p>Cantidad:</p>
     </td>
      <td></td> 
     <td valign="top">
     <input type="number" name="txtCantidad"    id="txtCantidad" min="1" max="10" value="1">
     </td>
     </tr> 
    <tr>  
     <td colspan="4"></td>  
     </tr>  
     <tr>    
    <td></td>     
    <td></td>      
    <td colspan="2" align="left" valign="middle">  
    <input type="submit" name="ped" value="Realizar Pedido">  
     <input type="button" name="res" value="Reestablecer"   onclick="javascript:location.reload()">           
        </td>      
      </tr>   
       </table>  
          </form>  

          </center>  
         <script type="text/javascript">     
        function CambiarImagen(){       
         var Seleccionado = document.getElementById('cmbProducto').value; 

        if(Seleccionado=='Galaxy S6'){ 

         document.getElementById('FotoProducto').src='img/galaxy.jpg'; 

 } else if(Seleccionado=='iPhone 6S'){   
     document.getElementById('FotoProducto').src='img/iphone.jpg';         
     } else{  
        document.getElementById('FotoProducto').src='img/noimagen.jpg';       
  }    
 }   
</script>
 </body>
</html>