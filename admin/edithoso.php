<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="js/script.js"></script>
</head>
<body>
<?php
require_once('connect.php');
$mahoso = $_GET['mahoso'];
$sql = "SELECT * FROM hoso INNER JOIN chitiethoso ON hoso.mahoso = chitiethoso.mahoso WHERE hoso.mahoso =$mahoso";
// $sql = "SELECT * FROM hoso WHERE mahoso = $mahoso";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
mysqli_close($conn);
require('form-edit-hoso.php');
?>
</body>
</html>
