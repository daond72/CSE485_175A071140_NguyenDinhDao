<?php
    require_once('connect.php');
    $mahoso = $_GET['mahoso'];
    $sql = "SELECT * FROM hoso INNER JOIN chitiethoso ON hoso.mahoso = chitiethoso.mahoso WHERE hoso.mahoso =$mahoso";
    // $sql = "SELECT * FROM hoso WHERE mahoso = $mahoso";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    mysqli_close($conn);
?>