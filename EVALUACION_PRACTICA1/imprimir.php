<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    //IMPRIMIR DATOS
<?php
$nombre1 = $_POST['nombre']; 
$fecha = $_POST['fecha'];
$direccion = $_POST['direccion'];
$registro = $_POST['registro'];
$departamento = $_POST['departamento'];
$nit = $_POST['nit'];
$giro = $_POST['giro'];
$condicion = $_POST['condicion'];
$cantidad = $_POST['cantidad'];
$cantidad2 = $_POST['cantidad2'];
$cantidad3 = $_POST['cantidad3'];
$descripcion = $_POST['descripcion'];
$descripcion2 = $_POST['descripcion2'];
$descripcion3 = $_POST['descripcion3'];
$preciou = $_POST['preciou'];
$preciou2 = $_POST['preciou2'];
$preciou3 = $_POST['preciou3'];
$venta = $_POST['venta'];
$venta2 = $_POST['venta2'];
$venta3 = $_POST['venta3'];
$ventaa = $_POST['ventaa'];
$ventaa2 = $_POST['ventaa2'];
$ventaa3 = $_POST['ventaa3'];
$sub = $_POST['sub'];
$Ventasexi = $_POST['Ventasexi'];
$total = $_POST['total'];
$obsevaciones = $_POST['obsevaciones'];
$cancelado = $_POST['cancelado'];
$suma = $_POST['suma'];
$iva = $_POST['iva'];
echo "<p>Su nombre es: $nombre1</p>"; 
echo "<p>Fecha: $fecha</p>";
echo "<p>Direccion: $direccion</p>";
echo "<p>Registro: $registro</p>";
echo "<p>Departamento: $departamento</p>";
echo "<p>Nit: $nit</p>";
echo "<p>Giro: $giro</p>";
echo "<p>Condicion de pago: $condicion</p>";
echo "<table border='1' bordercolor='black'   padding='40px'>
          <tr> 
          <th  width ='200' align='center'>CANTIDAD</th>
          <th bordercolor='black' width ='200' align='center'>DESCRIPCION</th>
          <th width ='200' align='center'>PRECIO UNITARIO</th>
          <th width ='200' align='center'>VENTAS EXENTAS</th>
          <th width ='200' align='center'>VENTAS AFECTADAS</th>
          </tr>";
         echo " <tr>
          <td bordercolor='black' width ='200' >$cantidad</td>
          <td width ='200' >$descripcion</td>
          <td width ='200'>$preciou</td>
          <td width ='200'>$venta</td>
          <td width ='200'>$ventaa</td>
          </tr>";
         echo " <tr>
          <td width ='200'>$cantidad2</td>
          <td width ='200'>$descripcion2</td>
          <td width ='200'>$preciou2</td>
          <td width ='200'>$venta2</td>
          <td width ='200'>$ventaa2</td>
          </tr>";
         echo " <tr>
          <td width ='200'>$cantidad3</td>
          <td width ='200'>$descripcion3</td>
          <td width ='200'>$preciou3</td>
          <td width ='200'>$venta3</td>
          <td width ='200'>$ventaa3</td>
          </tr>";

          echo"<tr>
          <th>Observaciones:</th>
          <th>Cancelado:</th>
          <th>Sumas:</th>
          <th>IVA:</th>
          
          </tr>";
          echo" <tr>
          <td width ='200'>
          $obsevaciones
          </td>
          <td width ='200'>$cancelado</td>
          <td width ='200'>$suma</td>
          <td width ='200'>$iva</td>
          </tr>";
          echo"<tr>
          <th width ='200' align='center'>Sub total:</th>
          <th width ='200' align='center'>IVA retenida:</th>
          <th width ='200' align='center'>Ventas eximar</th>
          <th width ='200' align='center'>Venta total</th>
          </tr>";

          
          echo"
          <tr>
          <td width ='200' >$sub</td>
          <td width ='200' >$iva</td>
          <td width ='200' >$Ventasexi</td>
          <td width ='200' >$total</td>
         

          </tr>
          
      </table>";
?>
</body>
</html>