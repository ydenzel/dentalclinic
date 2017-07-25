<?php

$username = 'root';
$password = '';
$host = 'localhost';
$database = 'dentalclinic';

$db = new mysqli($host,$username,$password,$database) OR die("Could not connect to mysql". mysqli_connect_error());


echo "connected";





?>