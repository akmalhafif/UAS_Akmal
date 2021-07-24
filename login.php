<?php 
  require 'fungsi.php';

  if (isset($_POST['login'])) {
	$email = $_POST['email'];
	$password = $_POST['password'];

	//mencocokan database
$cekdatabase = mysqli_query($conn, "SELECT * FROM login where email='$email' and password='$password'");
	//hitung jumlah data
$hitung = mysqli_num_rows($cekdatabase);
if ($hitung>0) {
	$_SESSION['log'] = 'True';
	header('location:index.php');
}else{
	header('location:index.php');
};
};
if (!isset($_SESSION['log'])) {

} else{
	header('location:index.php');
}
  
?>

<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<style>
	*{
		margin: 0;
		padding: 0;
		outline: 0
		font: 'Open Sans', Sans-serif;
	}
	body {
		height: 100vh;
		background-image:url(Background1.jpg);
		background-size: cover;
		background-position: right;
		background-repeat: no-repeat; 
	}
	.container{
		position: absolute;
		left: 50%;
		top: 50%;
		transform: translate(-50%, -50%);
		padding: 20px 25px;
		width: 300px;

		background-color: rgba(0,0,0,.4);
		box-shadow: 0 0 10px rgba(255,255,255,.3);
	}
	.container h1{
  		text-align: center;
	    color: #fafafa;
	    margin-bottom: 30px;
    	text-transform: uppercase;
    	border-bottom: 4px solid #bf00ff;
	}
	.container label{
    	text-align: left;
    	color: #bf00ff;
    }
	.container form input{
   		width: calc(100% - 20px);
    	padding: 8px 10px;
    	margin-bottom: 15px;
    	border: none;
    	background-color: transparent;
    	border-bottom: 2px solid #bf00ff;
    	color: #fff;
    	font-size: 20px;
	}
	.container form a{
		text-decoration: none;
		color: #bf00ff;
	}
	.container form button{
    	width: 100%;
    	padding: 5px 0;
    	border: none;
    	background-color:#bf00ff;
    	font-size: 18px;
    	color: #fafafa;
	}
	
	</style>
</head>
<body>
	<div class="container">
		<h1>Login</h1>
		<form method="post">
			<label>Email</label><br>
			<input class="form-control py-4" name="email" id="inputEmailAddress" type="email" placeholder="Enter email address" />
			<label>Password</label><br>
			<input class="form-control py-4" name="password" id="inputPassword" type="password" placeholder="Enter password" />
			<button class="login"name="login"type="login">Login</button><br>
			<br>
		
		</form>
	</div>
</body>
</html>