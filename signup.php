<?php
session_start();

include("connection.php");



if ($_SERVER['REQUEST_METHOD'] == "POST") {
	//something was posted
	$nom = $_POST['nom']; // nom = "khadija"
	$prenom = $_POST['prenom'];
	$username = $_POST['username'];
	$password = $_POST['password'];

	if (!empty($nom) && !empty($prenom) && !empty($username) && !empty($password)) {


		$select_username = "select * from users where username = '$username' ";

		$result = mysqli_query($con, $select_username);

		if (mysqli_num_rows($result) > 0) {

			echo "<h1>Cette username déja exsite  | Go to <a href='login.php'>Login Page</a></h1>";
		} else {
			$password = md5($password);

			$query = "insert into users (nom,prenom,username,password) values ('$nom','$prenom','$username','$password')";

			mysqli_query($con, $query);

			header("Location: login.php");
		}


		die;
	} else {
		echo "Please enter some valid information!";
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
			<header>Signup Form</header>
			<form method="post">
				<div class="field">
					<span class="fa fa-user"></span>
					<input type="text" name="nom" required placeholder="Nom">
				</div>
				<div class="field">
					<span class="fa fa-user"></span>
					<input type="text" name="prenom" required placeholder="Prénom">
				</div>
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
					<input type="submit" value="Signup">
				</div>
			</form>

			<div class="signup">Do you already have an account?
				<a href="login.php">Login </a>
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