<?php


	$username	= "ordremeekka";   
	$password	= "Gme1234567890987654321";
	$dbname		= "gme";
	$host		= "ordremekka.mysql.database.azure.com";
  
  $connection = mysqli_init();
	   mysqli_ssl_set($connection,NULL,NULL, "https://ordremekka2.azurewebsites.net/assets/DigiCertGlobalRootCA.crt.pem", NULL, NULL);
             mysqli_real_connect($connection, $host, $username, $password, $dbname, 3306, MYSQLI_CLIENT_SSL);


if (mysqli_connect_errno($connection)) {
die('Failed to connect to MySQL: '.mysqli_connect_error());
}
