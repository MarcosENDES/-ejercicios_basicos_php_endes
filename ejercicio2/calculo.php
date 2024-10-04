<?PHP 

$distancia = $_GET ['distancia'];
$velocidad = $_GET ['velocidad'];
$tiempo = $distancia / $velocidad;
echo "El tiempo que tardará aproximademente será ". "$tiempo  horas";
?>