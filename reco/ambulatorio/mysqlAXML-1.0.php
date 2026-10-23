<?
/*
 * Funcion para transformar un resultado de mysql en un archivo XML
 **/
function mysql_XML($resultado, $nombreDoc='resultados', $nombreItem='item') {
	$campo = array();
	
	for ($i=0; $i<mysqli_num_fields($resultado); $i++)
		$campo[$i] = mysqli_fetch_field_direct($resultado, $i)->name;
	
	// creamos el documento XML	
	$dom = new DOMDocument('1.0', 'UTF-8');
        
	$doc = $dom->appendChild($dom->createElement($nombreDoc));
	
	while ($fila = mysqli_fetch_row($resultado)) {
		
		// creamos el item
		$nodo = $doc->appendChild($dom->createElement($nombreItem));
		
		// agregamos los campos que corresponden
		for ($b=0; $b<count($campo); $b++) {                        
			$campoTexto = $nodo->appendChild($dom->createElement($campo[$b]));                          
                        $campoTexto->appendChild($dom->createTextNode(TildesHtml($fila[$b])));
                        //echo TildesHtml(mysql_result($resultado, $i, $b));
		}
	}
	
	// retornamos el archivo XML como cadena de texto
	$dom->formatOutput = true; 
	return $dom->saveXML();    
}


function TildesHtml($cadena) 
{ 
    return str_replace(array("á","é","í","ó","ú","ñ","Á","É","Í","Ó","Ú","Ñ"),
                                     array("&aacute;","&eacute;","&iacute;","&oacute;","&uacute;","&ntilde;",
                                                "&Aacute;","&Eacute;","&Iacute;","&Oacute;","&Uacute;","N"), $cadena);     
}

?>