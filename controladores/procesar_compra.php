<?php
require "../config/conexion.php";
$cantidad = $_POST["cantidad"];
$costo = $_POST["costo"];

  


if ($costo_total = $cantidad * $costo){

$sql = "INSERT INTO procesar_compra(cantidad, costo, costo_total, fecha_sys) VALUES ('".$cantidad."', '".$costo."', '".$costo_total."', now())";
if($conexion->query($sql)){
$costo_total = $cantidad * $costo;

echo "Compra de empanadas";
echo "Cantidad: $cantidad";
echo "Costo por empanada, $costo";
echo "Costo total: $costo_total";

}else {
    echo "error al procesar la compra";

}
}


?>