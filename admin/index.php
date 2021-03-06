<!DOCTYPE html>
<html lang="eng">

<head>
	<title>QUẢN LÝ WEBSITE</title>
	<meta charset="utf-8" />
	<link rel="shortcut icon" href="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/login.css">

</head>

<body>
	<div class="navbar navbar-default" style="background-color:#003478;">
		<img src="" style="float:left;" height="55px" /><span class="navbar-brand">QUẢN LÝ WEBSITE</span>
		<a href="..\index.php" style="height: 55px;"><span class="navbar-brand">HOME</span></a>
	</div>
	<div id="top" class="login" style="padding-top: 7%;">
		<div class="panel panel-primary">
			<div class="panel-heading">
				<center>
					<h1 class="panel-title">Đăng Nhập Hệ Thống</h1>
				</center>
			</div>
			<div class="panel-body">
				<form enctype="multipart/form-data" action="login_query.php" role="form" method="POST">
					<div class="form-group">
						<label for="username">Tên đăng nhập</label>
						<input class="form-control" name="taikhoan" placeholder="Username" type="text" required="required">
					</div>
					<div class="form-group">
						<label for="password">Mật Khẩu</label>
						<input class="form-control" name="matkhau" placeholder="Password" type="password" required="required">
					</div>
					<div class="form-group">
						<button class="btn btn-block btn-success" name="login"><span class="glyphicon glyphicon-log-in"></span> Đăng Nhập</button>
					</div>
				</form>
			</div>
		</div>
	</div>
	<div id="footer">
		<label class="footer-title">&copy; Copyright</label>
	</div>
</body>
<?php
include("script.php");
?>
<script type="text/javascript">
	$(document).ready(function() {
		function disableBack() {
			window.history.forward()
		}

		window.onload = disableBack();
		window.onpageshow = function(evt) {
			if (evt.persisted) disableBack()
		}
	});
</script>

</html>