<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);
  // Database connection parameters
  $servername = 'localhost';
  $username = 'root';
  $password = 'root'; 
  $database = 'movies_db'; 

  // Establishing a connection to the MySQL database
  $connect = mysqli_connect($servername, $username, $password, $database);

  // Check if the connection was successful
  if(!$connect){
    die("Connection Failed: " . mysqli_connect_error());
  } else {
    echo "Successfully connected to the database!";
  }

  
?>
