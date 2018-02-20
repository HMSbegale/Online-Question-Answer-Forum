<?php include('config.php');
$qid = $_GET['id'];
//$_POST['question_id'] = $qid;
?>
<!DOCTYPE html>
<html>
<head>
	<title>Answer</title>
</head>

<style>
body{
  background-image: url("iu.jpg");
    background-repeat: no-repeat;
    background-attachment: fixed;
    background-position: center;
}
.navbar {
  overflow: hidden;
  background-color: blue;
  position: fixed;
  top: 0;
  width: 100%;

  .insert{
  	 display: bottomright;
  	 position: fixed;
  	}
   ul.a {
    list-style-type: circle;
    }
</style>
<body style="background-color: light-blue">
	<div class="navbar">
		 <h2 style="font-family: Georgia; text-align:left;" >Dare to ask</h2>
	</div>	
	   <div style="padding-top: 50px">
     <h2 style="text-align: center;">Trending Answers</h2>
        
    </div>
   <div class="col-sm-4" style="background-color:lavenderblush;">
	<div style= "padding-top: 50px">
       <h2 style="text-align: left;" >
	       <?php
		       $sql = "SELECT * FROM forum_answers WHERE question=".$qid;
		       $result = mysqli_query($con, $sql);
		       while($row = mysqli_fetch_array($result))
		    {
			   
			    echo $row["answer"];
			    echo "<br>";
			    
	 	    }
	       ?>
	    </h2> 
	</div>
   </div> 	      

 <form action='insert_answer.php?id=<?php echo $qid; ?>' method="post">
	<textarea placeholder="Your answer (max 256chars)..." name="answer_text"></textarea>
	<input name="answer_name" placeholder="Enter your name">
	<button type="Submit">Submit</button>
</form>
</body>
</html>