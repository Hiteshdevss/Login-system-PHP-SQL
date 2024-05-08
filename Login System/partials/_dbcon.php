<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "login";


// Connect to MySQL server
$conn = mysqli_connect($servername, $username, $password, $database);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
} 
//else {
//    echo "Connected successfully";
//    echo "<br>";
//}
?>