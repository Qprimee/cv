<?php
$conn = mysqli_connect('localhost', 'root', '123456', 'profile');
if (!$conn) {
    echo mysqli_connect_errno($conn);
    echo mysqli_connect_error($conn);
}
