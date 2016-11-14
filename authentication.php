<?php 

	session_start();
	
    include 'create-link.php';

    $user = mysqli_real_escape_string($link,$_POST['username']);
    $user = htmlspecialchars($user, ENT_QUOTES);
    echo $user;

    $pass = mysqli_real_escape_string($link,$_POST['password']);
    $pass = htmlspecialchars($pass, ENT_QUOTES);
    echo $pass;

    $query = "SELECT role FROM user WHERE loginname='$user' AND password='$pass'";

    $results = mysqli_query($link, $query);

    if (mysqli_num_rows($results) >= 1) {

    	$row = mysqli_fetch_row($results);

    	$_SESSION['role'] = $row[0];
        mysqli_close($link);
    	header('Location: index.php');

    }

    else {
        mysqli_close($link);
    	header('Location: login.php?error=1');
    }
?>