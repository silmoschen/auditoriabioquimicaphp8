<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

  $host = "localhost";
  $username = 'root';
  $passw = "bross2005";
  //$dbdatos = 'audit_sj';
  $dbdatos = 'audit_reco_1';
  
  /*
  $host = "localhost";
  $username = 'terminalreco';
  $passw = "Jakarta@1989";
  $dbdatos = 'auditoria_auditreco_1';
   */
  
  mysqli_report(MYSQLI_REPORT_OFF);
  $con = mysqli_connect($host, $username, $passw);
  $GLOBALS['con'] = $con;
  mysqli_select_db($con, $dbdatos);
  mysqli_set_charset($con, 'latin1');

?>
