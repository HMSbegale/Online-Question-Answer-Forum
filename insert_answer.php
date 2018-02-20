<?php
include 'config.php';
	$qid = $_GET['id'];
	$answer_text = $_POST['answer_text'];
	$name = $_POST['answer_name'];
	$fetch_sql = "SELECT * FROM forum_questions WHERE id=".$qid;
	$fetch_result = mysqli_query($con, $fetch_sql);
	$fetch_row = mysqli_fetch_array($fetch_result);
	$total_answers = $fetch_row['tot_answers'];
	$total_answers = $total_answers + 1;
	$sql = "INSERT INTO forum_answers(answer,question,name) VALUES('$answer_text','$qid','$name')";

	$update_sql = "UPDATE forum_questions SET tot_answers=".$total_answers." WHERE id=".$qid;
	if(mysqli_query($con, $update_sql)==TRUE)
	{
		//echo "update";
		if(mysqli_query($con,$sql)==TRUE)
		{
			//echo "insert";
			header('location: answer_questions.php?id='.$qid);
		}
	}
	//header('location : index.php');
?>