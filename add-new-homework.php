<?php 
	
	session_start();

	if ($_SESSION['role'] == 'Tutor') {

		$goals = $_POST['goals'];
		$deliver = $_POST['deliver'];
		$date = $_POST['date'];
		$target_dir = "documents/";
		$target_file = $target_dir . $_FILES["whattodo"]["name"];
		$name = $_FILES["whattodo"]["name"];

		echo $goals.$deliver.$date.$name;

	if (move_uploaded_file($_FILES['whattodo']['tmp_name'],$target_file)) {
		include 'create-link.php';

		$query = "INSERT INTO `student2206partb`.`projects` (`id`, `goals`, `path`, `delivelables`, `date`) VALUES (NULL, '$goals', '$name', '$deliver', '$date')";

		$result =  mysqli_query($link,$query);

    	if(!$result){
        echo "Database problem" . mysqli_error() ;
    	}

    	$date2 = date("d/m/Y");
    	$sub = "Υποβλήθηκε η εργασία";
    	$keimeno = " Η ημερομηνία παράδοσης της εργασίας είναι " . $date;

		$query = "INSERT INTO `student2206partb`.`announcements` (`id`, `date`, `subject`, `desc`) VALUES (NULL, '$date2', '$sub', '$keimeno');";

		$result =  mysqli_query($link,$query); 

        mysqli_close($link); 

		header('Location: homework.php');



	}

}
?>


