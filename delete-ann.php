<?php 

	session_start();

	include 'create-link.php';

	if ($_SESSION['role'] == "Tutor") {

		$id = $_GET['id'];

		$query = "DELETE FROM `student2206partb`.`announcements` WHERE `announcements`.`id` = '$id'";

		mysqli_query($link,$query);

		header('Location: announcement.php');




	}


?>