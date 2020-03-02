<?php
$hostname = 'localhost';
$username = 'root';
$password = '';
$databasename = 'nyumbachapchap';

//To connect to a database use the php function called mysqli_connect()
//my sqli function returns a boolean datatype


$connection = mysqli_connect($hostname, $username, $password, $databasename);

if ($connection == false) {
    echo "Connection not successful<br>";
}







