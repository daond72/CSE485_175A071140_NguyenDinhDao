<?php
include ('connect.php');

if(isset($_POST['login'])){
$admin_user = $_POST['admin_user'];
$admin_pass = $_POST['admin_pass'];

$fetch = $con->prepare("SELECT * FROM dangnhap WHERE tendangnhap = ? AND admin_pass = ?  And phanquyen = ?");
$fetch->execute(array($admin_user, $admin_pass, 1));
$count = $fetch->rowcount();
$row = $fetch->fetch();

if($count > 0) {

	session_start();
	$_SESSION['iddangnhap'] = $row['iddangnhap'];
	echo "<script>
	window.location = 'home.php';
</script>";

	
} else {
$fetch1 = $con->prepare("SELECT * FROM dangnhap WHERE tendangnhap = ? AND admin_pass = ?  And phanquyen = ?");
$fetch1->execute(array($admin_user, $admin_pass, 2));
$count1 = $fetch1->rowcount();
$row1 = $fetch1->fetch();
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
