<?php 
session_start();
if ($_SESSION['role'] == 'Tutor') {

include 'create-link.php';

		$sub = $_POST['subject'];
		$keimeno = $_POST['desc'];
		$id = $_GET['id'];
		include 'create-link.php';

    $query = "UPDATE `student2206partb`.`announcements` SET `subject`='$sub', `desc`='$keimeno' WHERE  `announcements`.`id`='$id'";

		$result =  mysqli_query($link,$query);
		mysqli_close($link);

				header('Location: announcement.php');


}

?>