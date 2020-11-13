<?php
    require('connect.php');
    $mahoso = $_GET['mahoso'];
    $sql = "DELETE FROM chitiethoso WHERE mahoso = $mahoso";
    mysqli_query($conn, $sql);
    if(mysqli_affected_rows($conn)>0)
    {
        $sql = "DELETE FROM hoso WHERE mahoso = $mahoso";
        mysqli_query($conn, $sql);
    }
    mysqli_close($conn);
?>