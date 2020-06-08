<?php include 'Db.php'; ?>
<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
	 <link rel="icon" href="logo.jpg">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="container">
		<h2>Login System</h2>
		<form class="form-group" action="form.php" method="post">
			<div class="row">
				<input type="text" name="name" class="form-control col-lg-6" placeholder="Email/contact">	
			</div>
			<div class="row">
				<input type="password" name="pass" class="form-control col-lg-6" placeholder="pass"
				>	
			</div>
			<div class="row">
				<input type="submit" name="submit" class="btn btn-success col-lg-6" style="border-radius: 50px;">
			</div>
			<div class="row">
				<h2>or</h2>
			</div>
		</form>
	</div>
	<?php 
		if (isset($_POST['submit'])) {
			$Email =$_POST['Email'];
			$password=$_POST['password'];

			$ob= Db::Login($Email,$Password);
			while ($res = $ob->fetch_object()) {
			if ($Email  == $res->Email && $Password == $res->Password && $res->status == 1) {
				#$_SESSION['customer'] = $res->c_id;
				header('location:form.php');
			
			}
		elseif($Email  == $res->Email && $Password == $res->Password && $res->status == 2) {
				#$_SESSION['customer'] = $res->c_id;
				header('location:View.php');
			
			}

		}
	}
	 ?>

</body>
</html>