<?php
////if (isset($POST['submit'])) {
$title = $_POST['title']; 
$desc = $_POST['desc'];
echo $title.$desc;

if (isset($_FILES['filetoUp']['name'])) {
	echo "found " . $_FILES['filetoUp']['name'];
$target_dir = "documents/";
$target_file = $target_dir . $_FILES["filetoUp"]["name"];
$name = $_FILES["filetoUp"]["name"];



	if (move_uploaded_file($_FILES['filetoUp']['tmp_name'],$target_file)) {

		include 'create-link.php';

	$query = "INSERT INTO `student2206partb`.`documents` (`id`, `title`, `desc`, `path`) VALUES (NULL, '$title', '$desc', '$name')";

		$result =  mysqli_query($link,$query);
    
} else {
    echo "Possible file upload attack!\n";
}
}
else {
	include 'create-link.php';

	$query = "INSERT INTO `student2206partb`.`documents` (`id`, `title`, `desc`, `path`) VALUES (NULL, '$title', '$desc', '')";

		$result =  mysqli_query($link,$query);
}

	

		header('Location: documents.php');
	//}
?>