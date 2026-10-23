<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

$host = "localhost";
$username = 'root';
$passw = 'VcOuPCuAdm5r';
$dbdatos = 'x020vm10_auditrqta';
mysqli_report(MYSQLI_REPORT_OFF);
$con = mysqli_connect($host, $username, $passw);
$GLOBALS['con'] = $con;
//$con = mysql_connect($host, $user, $passw) or die ('Ocurrió un error al conectarse al servidor mysql');
mysqli_select_db($con, $dbdatos);

?>
