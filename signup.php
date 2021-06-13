<?php
$msg = "";
require_once('dbconnection.php');

if(isset($_POST['btn_create_account']) && !empty('btn_create_account')){

	if($_POST['password'] == $_POST['confirm_password'] && filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){

		try{
			$date = date('Y-m-d H:i:s');
			$hash = password_hash($_POST['password'], PASSWORD_BCRYPT);
			$sql = "insert into users(email, password, created_at, updated_at) values('{$_POST[email]}', '$hash', '$date', '$date')";
			$stmt = $conn->prepare($sql);
    		$stmt->execute();
    		$conn = null;
			$msg = "Account create successful!!!";

		}catch(Exception $e){
			$msg = "Account already exist try again!!!";
		}

	}else{
		$msg = "Check You Password/Email!!!";
	}
}else{

}
unset($_POST);

?>

<html>

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
</head>

<body>
 
<form method="post" action="signup.php">
  <h2>Sign Up</h2>

  		<p id="p1">
			<?php  echo $msg;  ?>
		</p>

		<p>
			<input name="email" type="text" placeholder="Email">
		</p>
		<p>
			<input name="password" type="password" placeholder="Password">
		</p>
		<p>
			<input name="confirm_password" type="password" placeholder="Confirm Password">
		</p>
		<p>
			<input type="submit" name="btn_create_account" value="Create Account"><br>
            <a href="login.php" class="link">Log In</a>
		</p>
	</form>

</body>

<html>