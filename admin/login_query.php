<?php
include ('connect.php');

if(isset($_POST['login'])){
$admin_user = $_POST['taikhoan'];
$admin_pass= $_POST['matkhau'];

$sql="SELECT * FROM admin WHERE taikhoan = '$admin_user' AND matkhau = '$admin_pass'  And quyen = 1 ";
$result = mysqli_query($conn,$sql);
$count = mysqli_affected_rows($conn);
if($count > 0) {

	session_start();
	$_SESSION['iddangnhap'] = $row['iddangnhap'];
	echo "<script>
	window.location = 'home.php';
</script>";

	
} else {
   $sql="SELECT * FROM admin WHERE taikhoan = '$admin_user' AND matkhau = '$admin_pass'  And quyen = 0 ";
   $result = mysqli_query($conn,$sql);
   $count1 = mysqli_affected_rows($conn);
}
if($count1 > 0) {

	session_start();
	$_SESSION['iddangnhap'] = $row['iddangnhap'];
	echo "<script>
	window.location = '../index.php';
</script>";
}
else {
	echo "<script>alert('Wrong Username or Password')</script>";
} 
echo "<script>
	window.location = 'index.php';
</script>";

}
