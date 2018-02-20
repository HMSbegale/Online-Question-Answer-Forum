<?php
include 'config.php';
	$ques = $_POST['question_text'];
	$name = $_POST['name'];
	$roll = $_POST['roll'];
	$sql = "INSERT INTO forum_questions(questions, name, roll) VALUES('$ques', '$name', '$roll')";
	mysqli_query($con, $sql);
	header("location: index.php");
?>