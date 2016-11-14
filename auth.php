<?php 

	session_start();
	
    include 'create-link.php';

    $user = mysqli_real_escape_string($link,$_POST['username']);
    $user = htmlspecialchars($user, ENT_QUOTES);

    $pass = mysqli_real_escape_string($link,$_POST['password']);
    $pass = htmlspecialchars($pass, ENT_QUOTES);

    $query = "SELECT role FROM user WHERE loginname=$user AND password=$pass";

    $results = mysqli_query($link, $query);

    if (mysqli_num_rows($result) >= 1) {

    	$row = mysqli_fetch_row($results)

    	$_SESSION['role'] = $row[4];

    	header('Location: index.html');

    }

    else {
    	header('Location: login.php?error=1');
    }
?>