<?php

include_once($_SERVER['DOCUMENT_ROOT'] . '/classes/conexion.php');

class cNbuCodigosDif{
 //constructor
 var $codos;
 var $codigo;
 var $sql;
 var $res;

 function __construct() {
     $this->cNbuCodigosDif();
 }

 function cNbuCodigosDif(){
 } 
 
 // inserta tupla
 function crear($codos, $codigo){
     $query = "INSERT INTO nbu_codigos_dif (codos, codigo) VALUES ('$codos', '$codigo')";
     $this->sql = $query;
     $result = mysqli_query($GLOBALS['con'], $query);
     if (!$result)
	   return false;
     else
       return true;   
 }

 // borra tupla
 function borrar($codos, $codigo){
     $query = "DELETE FROM nbu_codigos_dif WHERE codos = '$codos' AND codigo = '$codigo'";
     $this->sql = $query;     
     $result = mysqli_query($GLOBALS['con'], $query);
     if (!$result)
	   return false;
     else
       return true;
 }
 
 function getCodigos($codos) {
    $query = "SELECT * FROM nbu_codigos_dif WHERE codos = '$codos'";
    $this->res=mysqli_query($GLOBALS['con'], $query);
    return $this->res;
 }

 function getSQL() {
     return $this->sql;
 }

 function getCodigoIncluido($codos, $codigo) {
    $cod = '';
    $query = "SELECT codigo, codos FROM nbu_codigos_dif WHERE codos = '$codos' AND codigo = '$codigo'";
    //echo$query;
    $result = mysqli_query($GLOBALS['con'], $query);
    while($fila=mysqli_fetch_array($result)){
      $cod = $fila['codigo'];
    }
    return $cod;
 }

}

?>
