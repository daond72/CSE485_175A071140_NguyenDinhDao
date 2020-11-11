<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="/css/bootstrap-4.0.0-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="main">
        <h1>TẠO NGƯỜI DÙNG MỚI</h1>
        <form action="" method="post">
            <table>
                <tr>
                    <td>Tên đăng nhập: </td>
                    <td><input type="text" name="tendangnhap" required><br /></td>
                </tr>
                <tr>
                    <td>Mật khẩu: </td>
                    <td> <input type="text" name="admin_pass" required><br /> </td>
                </tr>
                <tr>
                    <td> Tên người dùng:</td>
                    <td> <input type="text" name="hoten" required><br /> </td>
                </tr>
                <tr>
                    <td> Địa chỉ: </td>
                    <td> <input type="diachi" name="diachi" required><br /> </td>
                </tr>
                <tr>
                    <td> <input type="submit" name="register" value="Tạo tài khoản"> </td>
                </tr>
                <!-- Confirm diachi: <input type="diachi" name="txtConfirmPass"> -->
            </table>
        </form>

    </div>

</body>

</html>
<?php
$conn = mysqli_connect('localhost', 'root', '', 'dhtl');
if (!($conn)) {
    die('Khong the ket noi co so du lieu');
};
if (isset($_POST['register'])) {
    // $userid = mysqli_real_escape_string($conn, $_POST['id']); 
    $tendangnhap = mysqli_real_escape_string($conn, $_POST['tendangnhap']);
    $admin_pass = mysqli_real_escape_string($conn, $_POST['admin_pass']);
    $hoten = mysqli_real_escape_string($conn, $_POST['hoten']);
    $diachi = mysqli_real_escape_string($conn, $_POST['diachi']);
    //Kiểm tra người dùng đã nhập liệu đầy đủ chưa
    if (!$tendangnhap || !$admin_pass || !$hoten || !$diachi) {
        echo "Vui lòng nhập đầy đủ thông tin. <a href='javascript: history.go(-1)'>Trở lại</a>";
        exit;
    }


    $sql = "INSERT INTO dangnhap (tendangnhap, admin_pass, hoten, diachi,phanquyen,staus) VALUES ('$tendangnhap','$admin_pass','$hoten','$diachi','1','1')";
    $result = mysqli_query($conn, $sql);
    if ($result) echo "<script>alert('THÊM NGƯỜI DÙNG MỚI THÀNH CÔNG!')</script>";
    
}
?>