<?php
/**
 * using mysqli_connect for database connection
 */

 $databaseHost = 'localhost';
 $databaseName = 'crud';
 $databaseUsername = 'root';
 $databasePassword = '';

 $mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName);
 if(!$mysqli){
    die("Connection failed:". mysqli_connect_error());
 }
 echo "Connected successfully....";
 ?>