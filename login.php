<?php

session_start();

include("connection.php");



if ($_SERVER['REQUEST_METHOD'] == "POST") {
	//something was posted
	$username = $_POST['username'];
	$password = $_POST['password'];

	if (!empty($username) && !empty($password)) {

		// read from database
		$query = "select * from users where username = '$username' limit 1";

		$result = mysqli_query($con, $query);

		if ($result) {

			if (mysqli_num_rows($result) > 0) {

				$user_data = mysqli_fetch_assoc($result);



				if ($user_data['password'] == md5($password)) {

					$_SESSION['user_id'] = $user_data['id'];
					$_SESSION['nom'] = $user_data['nom'];
					$_SESSION['prenom'] = $user_data['prenom'];
					$_SESSION['username'] = $user_data['prenom'];


					header("Location: index.php");

					die;
				}
			}
		}
	} else {
		echo "wrong username or password!";
	}
}

?>


<!DOCTYPE html>
<html>

<head>
	<title>Login</title>
	<script src="https://kit.fontawesome.com/a076d05399.js"></script>
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,500,600,700|Poppins:400,500&amp;display=swap">
	<link rel="stylesheet" href="style2.css">
</head>

<body>


	<div class="bg-img">
		<div class="content">
			<header>Login Form</header>
			<form method="post">
				<div class="field">
					<span class="fa fa-user"></span>
					<input type="text" name="username" required placeholder="Username">
				</div>
				<div class="field space">
					<span class="fa fa-lock"></span>
					<input type="password" class="pass-key" name="password" required placeholder="Password">
					<span class="show">SHOW</span>
				</div>

				<div class="field">
					<input type="submit" value="LOGIN">
				</div>
			</form>

			<div class="signup">Don't have account?
				<a href="signup.php">Signup Now</a>
			</div>
		</div>
	</div>
	<script>
		const pass_field = document.querySelector(".pass-key");
		const showBtn = document.querySelector(".show");
		showBtn.addEventListener("click", function() {
			if (pass_field.type === "password") {
				pass_field.type = "text";
				showBtn.textContent = "HIDE";
				showBtn.style.color = "#3498db";
			} else {
				pass_field.type = "password";
				showBtn.textContent = "SHOW";
				showBtn.style.color = "#222";
			}
		});
	</script>

</body>

</html>