<?php
session_start();
$msg = "";
require_once('dbconnection.php');

if(isset($_POST['btn_sing_in']) && !empty($_POST['btn_sing_in'])){

	if(!empty($_POST['password']) && filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){

		$sql = "select * from users where email = '{$_POST[email]}'";
		// echo "hi";
		$stmt = $conn->query($sql);
		if($stmt->rowCount()>0){
			
			$data = $stmt->fetch();
			if(password_verify($_POST['password'], $data['password'])){
				$_SESSION["user_id"] = $data['id'];
				$_SESSION["user_name"] = $data['name'];
				$_SESSION["user_email"] = $data['email'];
				$_SESSION["user_status"] = $data['status'];
				header("Location: ./isAuthenticate.php");
			}
		}else{
			$msg = "Wrong email or password!!!";
		}

	}else{
		$msg = "Wrong email or password!!!";
	}
}else{
	// $msg = "Wrong email or password!!!";
}
unset($_POST);

?>

<html>

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
</head>

<body>
 
<form method="post" action="login.php">
  <h2>Log In</h2>

  		<p id="p1">
			<?php  echo $msg; ?>
		</p>

		<p>
			<input name="email" type="text" placeholder="Email">
		</p>

		<p>
			<input name="password" type="password" placeholder="Password">
		</p>

		<p>
            <input type="submit" name="btn_sing_in" value="Sign In"><br>
            <a href="signup.php" class="link">Sign Up</a>
		</p>

	</form>

</body>

<html>