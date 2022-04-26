<?php
include 'db.php';
$get_username = $_GET['cv_username'];

$get_data = "SELECT * FROM info WHERE username = '$get_username'";
$get_data_query = mysqli_query($conn, $get_data);
$array_data = $get_data_query->fetch_assoc();



mysqli_close($conn);