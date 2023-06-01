<?php
include 'connection.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // Mengeksekusi query INSERT untuk menyimpan data ke dalam tabel
    $query = "INSERT INTO oceanone_ (name_user, email_user, message_user) VALUES ('$name', '$email', '$message')";
    if (mysqli_query($conn, $query)) {
        echo "Data inserted successfully";
    } else {
        echo "Error inserting data: " . mysqli_error($conn);
    }
}
?>
