<?php

$serverName = "DESKTOP-ALAN"; //serverName\instanceName
$connectionInfo = array( "Database"=>"SBD_prueba", "UID"=>"admin_sbdproject", "PWD"=>"agelocageloc");
$conn = sqlsrv_connect( $serverName, $connectionInfo);

if( $conn ) {
     echo "Conexión establecida.<br />";
}else{
     echo "Conexión no se pudo establecer.<br />";
     die( print_r( sqlsrv_errors(), true));
}
?>
