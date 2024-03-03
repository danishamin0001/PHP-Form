<?php

$servername = "localhost";

$username = "root";

$password = "";

$dbname = "mydb";

$con = new mysqli($servername,$username,$password,$dbname);

if ($con->connect_error){
    die("Connection failed: ". $con->connect_error);
}
// echo "Connected to Database!";


?>