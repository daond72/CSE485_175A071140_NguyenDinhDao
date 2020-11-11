<html>
<head>
<title>Sửa Thành Viên</title>
<style type="text/css">
form {
    border:  black solid 1px;
    width: 80%;
    height: 600px;
    background-image: url('images/brg.jpg');
    border-radius: 10px;
    margin: auto;
    padding-left: 300px ;
    color:#fff;
    background-size: cover;
    background-position: center center;

    
    
}

input,#a {
    margin: 10px;
    border-radius: 10px;
    border: none;
    padding: 5px;
    background-color:rgb(179, 149, 51);
    color:#fff;
}
input[name="update"]{
   width:150px; 
}

</style>
</head>
<body>
<?php 

$conn=mysqli_connect('localhost','root','','dhtl');
    //buoc2: kiem tra va xu ly loi neu co
    if(!$conn)//hieu: conn khac TRUE
    {
       die('Error...'.mysqli_connect_error());
    }else{
        if (!isset($_GET['iddangnhap'])) {
            die("Thông số bị thiếu!");  
          }
          
          $iddangnhap = intval($_GET['iddangnhap']);
       //buoc 3: Thuc hien truy van du lieu
        $sql="SELECT * from dangnhap where iddangnhap = '$iddangnhap'" or die("Lỗi truy vấn.");
        $result = mysqli_query($conn, $sql) or die( mysqli_error($conn));
        $rs = mysqli_fetch_array($result);
    
    }
?>

<form action="xl_edit.php" method="post" >
<h1>Cập nhập người dùng</h1>
<input type="hidden" name="iddangnhap" value="<?php echo $rs['iddangnhap'];?>"><br> 
    Tên người dùng:<input type="text" name="hoten" value="<?php echo $rs['hoten'];?>" required><br>
    Tên đăng nhập:<input  type="text" name="tendangnhap" value="<?php echo $rs['tendangnhap'];?>" required><br>
    Mật khẩu: <input type="password" name="admin_pass" value="<?php echo $rs['admin_pass'];?>" required><br>
    UserLevel:<input type="text" name="phanquyen" value="<?php echo $rs['phanquyen'];?>" required><br>
    <input type="submit" name="update" value="Cập nhật"> <a id="a" href='javascript: history.go(-1)'>Trở lại</a>";
</form>
</body>
</html>