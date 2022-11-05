<?php
$dbhost = "GAMERONE";
$dbname = "Voi";
$dbuser = "internet";
$dbpass = "internet";

// für MSSQL
$connection = new PDO("sqlsrv:Server=$dbhost;Database=$dbname; TrustServerCertificate=true", $dbuser, $dbpass);

//für mySQL
//$connection = new PDO ("mysql:host=$dbhost;dbname=$dbname", $dbuser, $dbpass);

// $serverName = "10.xxx.xx.148";
// $connectionInfo = array( "Database"=>"zzzz", "UID"=>"ww","PWD"=>"123cccc");
// $conn = sqlsrv_connect( $serverName, $connectionInfo);
// if( $conn ) {
//  echo "Connection established.<br />";
// }else{
//  echo "Connection could not be established.<br />";
//  die( print_r( sqlsrv_errors(), true));}

?>