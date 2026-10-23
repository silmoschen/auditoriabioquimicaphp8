<?php
include_once($_SERVER['DOCUMENT_ROOT'] . '/classes/conexion.php');
//implementamos la clase empleado
class cTipoPrestadores{
 //constructor
 var $id;
 var $descrip;

 function __construct() {
     $this->cTipoPrestadores();
 }

 function cTipoPrestadores(){
 }

 // inserta tupla
 function crear($descrip){
     $query = "INSERT INTO tipo_prestador (descrip) VALUES ('$descrip')";
     $this->sql = $query ;
     $result = mysqli_query($GLOBALS['con'], $query);
     if (!$result)
	   return false;
     else
       return true;
 }

 // borra tupla
 function borrar($id){
     $query = "DELETE FROM tipo_prestador WHERE id = '$id'";
     $this->sql   = $query;
     $result = mysqli_query($GLOBALS['con'], $query);
     if (!$result)
	   return false;
     else
       return true;
 }

 // actualiza tupla
 function actualizar($id, $descrip){
     $query = "UPDATE tipo_prestador SET descrip = '$descrip' WHERE id = '$id'";
     $this->sql   = $query;
     $result = mysqli_query($GLOBALS['con'], $query);
     if (!$result)
	   return false;
     else
       return true;
 }

 function getObject($id) {
    $found = false;
    $query = "SELECT * FROM tipo_prestador WHERE id = '$id'";
    $resultado=mysqli_query($GLOBALS['con'], $query);
    while($fila=mysqli_fetch_array($resultado)){
        $this->id         = $fila['id'];
        $this->descrip    = $fila['descrip'];
        $found = true;
    }
    if($found) {
        return true;
    } else {
        return null;
    }

 }

 function getId(){
     return $this->id;
 }

 function getDescrip(){
     return $this->descrip;
 }

 function getListaTipoPrestadores() {
    $query = "SELECT * FROM tipo_prestador ORDER BY descrip";
    $this->res=mysqli_query($GLOBALS['con'], $query);
    return $this->res;
 }

function getTipoPrestadores($filtro, $RegistrosAEmpezar, $RegistrosAMostrar) {
   if ($filtro == '' or $filtro == 'undefined') {
     $query = "SELECT * FROM tipo_prestador ORDER BY descrip LIMIT $RegistrosAEmpezar, $RegistrosAMostrar";
   } else {
     $query = "SELECT * FROM tipo_prestador WHERE descrip LIKE '$filtro%' ORDER BY descrip LIMIT $RegistrosAEmpezar, $RegistrosAMostrar";
   }
   $this->res=mysqli_query($GLOBALS['con'], $query);
   return $this->res;
 }


 function getSQL(){
     return $this->sql;
 }

}

?>