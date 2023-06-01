<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "user_data_projek_oceanone";

// Menciptakan koneksi
$conn = mysqli_connect($servername, $username, $password, $database);

// Memeriksa koneksi
if (!$conn){
    die("Connection failed: ".mysqli_connect_error());
}
echo "Connected successfully";
?>