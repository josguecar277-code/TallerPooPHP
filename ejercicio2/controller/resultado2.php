<?php
use Ejercicio2\Bus;
require_once __DIR__ . '/../../vendor/autoload.php';

if(isset($_POST["placa"])){

$placa = $_POST["placa"];
$capacidadPasajeros = $_POST["capacidad"];
$precioPasajeros = $_POST["precio"];
$Subir = $_POST["subirpasajeros"];
$Bajar = $_POST["bajarpasajeros"];

$bus = new Bus ($placa, $capacidadPasajeros, $precioPasajeros );

echo "<h3>Bus creado</h3>";
echo "Placa :" . $bus->getPlaca() . "<br>";
echo "Capacidad : " . $bus->getCapacidad() . "<br>";
echo "Precio de Pasajeros" . $bus->getPrecioPasaje() . "<br>";

//////////////

echo "<h3>Subir Pasajeros</h3>";
 $bus ->subirPasajeros($Subir);
 echo $bus->getPasajerosActuales();

 //////////////
 echo "<h3>Bajar Pasajeros</h3>";

 $bus->bajarpasajeros($Bajar);
 echo $bus->getPasajerosActuales();
////////////
 echo "<h3>Resultado</h3>";
 echo "Pasajeros Totales :" . $bus->getPasajerosTotales() . "<br>";
 echo "Dinero Acumulado: " . $bus->getDineroAcumulado() . "<br>";
}
?>