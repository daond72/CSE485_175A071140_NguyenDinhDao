<?php
    $host = 'localhost';
    $user = 'root';
    $pass = '';
    $db = 'cnweb';

    $conn = mysqli_connect($host, $user, $pass, $db);
	mysqli_set_charset($conn, 'utf8');
    if (!$conn) {
        die ("Loi ket noi".mysqli_connect_error());
        exit();
    }
?>