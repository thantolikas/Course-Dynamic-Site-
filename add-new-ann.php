<?php 
	
	session_start();

	if ($_SESSION['role'] == 'Tutor') {

		$sub = $_POST['subject'];
		$keimeno = $_POST['desc'];
		$date = date("d/m/Y");

		echo $sub . $keimeno . $date; 

		include 'create-link.php';

		$query = "INSERT INTO `student2206partb`.`announcements` (`id`, `date`, `subject`, `desc`) VALUES (NULL, '$date', '$sub', '$keimeno');";

		$result =  mysqli_query($link,$query);

    	if(!$result){
        echo "Database problem" . mysqli_error() ;
        mysqli_close($link); 
    	}

		header('Location: announcement.php');



	}


?>