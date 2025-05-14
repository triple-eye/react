<?php

session_start();

if (isset($_SESSION['username'])) {

	unset($_SESSION['id']);
	unset($_SESSION['nom']);
	unset($_SESSION['prenom']);
	unset($_SESSION['username']);
}

header("Location: login.php");
die;