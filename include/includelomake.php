<?php
$server = "localhost";
$user = "root"; 
$password = "";
$database = "gardenlomake";

// create connection
$connection = mysqli_connect($server, $user, $password, $database);

if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());
   }