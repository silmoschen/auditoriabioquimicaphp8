<?php
//Configuracion de la conexion a base de datos
$bd_host = "localhost"; 
$bd_usuario = "root"; 
$bd_password = ""; 
$bd_base = "sanmartin_auditoria"; 

$bd_usuario = "sanmartin"; 
$bd_password = "Jakarta89"; 
$bd_base = "sanmartin_auditoria";

mysqli_report(MYSQLI_REPORT_OFF);
$con = mysqli_connect($bd_host, $bd_usuario, $bd_password);
$GLOBALS['con'] = $con; 
mysqli_select_db($con, $bd_base);

?>