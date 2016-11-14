<?php 

$sender = trim($_POST['sender']);
$subject = trim($_POST['subject']);
$text = trim($_POST['keimeno']);

if (!empty($sender) AND !empty($subject) AND !empty($text)) {
$headers= "From: $sender";
include 'create-link.php';

$query = "SELECT loginname FROM user WHERE role='Tutor'";

$results = mysqli_query($link,$query);

while ($row = mysqli_fetch_row($results)) {
	mail($row[0],$subject, $text,$headers);

}

	header("Location: communication.php?error=0");
}
else {
	header("Location: communication.php?error=1");
}

?>