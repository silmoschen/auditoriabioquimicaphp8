<?php 
set_include_path('../');
include_once("conexion.php");
//implementamos la clase empleado
class cTipoControl{
 //constructor
 var $idcontrol;
 var $descrip;
 var $res;

 function __construct() {
     $this->cTipoControl();
 }

 function cTipoControl(){    
 } 
 
 // inserta tupla
 function crear($descrip){    
     $query = "INSERT INTO tipocontrol (descrip) VALUES ('$descrip')";
     $result = mysqli_query($GLOBALS['con'], $query);
     if (!$result)
	   return false;
     else
       return true;   
 }

 // borra tupla
 function borrar($id){
     $query = "DELETE FROM tipocontrol WHERE idcontrol = " . $id;
     $result = mysqli_query($GLOBALS['con'], $query);
     if (!$result)
	   return false;
     else
       return true;
 }

 // actualiza tupla
 function actualizar($id, $descrip){
     $query = "UPDATE tipocontrol SET descrip = " . '"' . $descrip . '"' . " WHERE idcontrol = " . $id;     
     $result = mysqli_query($GLOBALS['con'], $query);     
     if (!$result)
	   return false;
     else
       return true;
 }

 function getObject($id) {    
    $query = "SELECT * FROM tipocontrol WHERE idcontrol = " . $id;
    $resultado=mysqli_query($GLOBALS['con'], $query);
    while($fila=mysqli_fetch_array($resultado)){
        $this->idcontrol = $fila['idcontrol'];
        $this->descrip   = $fila['descrip'];
    }   
    return null;
 }

 function getIdcontrol(){
     return $this->idcontrol;
 }

 function getDescrip(){
     return $this->descrip;
 }

 function getTiposControl() {
    $query = "SELECT * FROM tipocontrol";
    $this->res=mysqli_query($GLOBALS['con'], $query);
    return $this->res;
 }

}

?>
