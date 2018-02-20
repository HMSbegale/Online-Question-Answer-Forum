<?php include 'config.php';?>

<!DOCTYPE html>
<html>
<head>
  <title>dare to ask</title>

<meta name="viewport" content="width=device-width, initial-scale=1">
<script src="js/jquery-3.2.1.slim.min.js"></script>
<script src="js/popper.min.js"></script>
<link rel="stylesheet" href="css/bootstrap.min.css">
<script src="js/bootstrap.min.js"></script>

<style>
body{
    background: url("iu.jpg") no-repeat fixed center;
}
/*body {
	margin-top:50; 
    margin: 0;
/*<ul>
  <li><a href="#home">Home</a></li>
  <li><a href="#news">News</a></li>
  <li><a href="# ">Contact</a></li>
  <li><a href="#about">About</a></li>
</ul>	text-align: center;font-size: 15px;font-family: georgia;
}

}

ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    width: 25%;
    background-color: #f1f1f1;
    position: fixed;
    height: 100%;
    overflow: auto;
}

li a {
    display: block;
    color: #000;
    padding: 8px 16px;
    text-decoration: none;
}

li a.active {
    background-color: #4CAF50;
    color: white;
}

li a:hover:not(.active) {
    background-color: #555;
    color: white;
}
 /* Style the header */
/*.header {
  padding: 10px 16px;
  background: #555;
  color: #f1f1f1;
}*/

.navbar {
  overflow: hidden;
  background-color: green;
  position: fixed;
  top: 0;
  width: 100%;
    border-radius: 0 !important;
}


/*.footer {
    position: fixed;
    left: 0;
    bottom: 0;
    width: 100%;
    background-color: red;
    color: white;
    text-align: center;
}*/
</style>
</head>
<body>
    <div class="navbar" style="z-index: 500">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-3 text-left">
                    <h2 style="font-family: Georgia; color: white;" >Dare to ask</h2>
                </div>
                <div class="col-md-6 text-center">
                    <h3>A jgec question answer platform</h3>
                </div>
                <div class="col-md-3 text-right">
                    <a href="http://jgec.ac.in/" target="_blank">
                        <img src="logo.jpeg" alt="logo" style="width:60px;height:42px;border:0;padding-right:10px">
                    </a>
                </div>
            </div>
        </div>
    </div>    
	  <div style="padding-top: 150px">
     <h2 style="text-align: center;">Trending Questions</h2>
        
    </div>
    <div class="container-fluid">
      <div class="row"> 
   <div class="col-sm-6 offset-md-3" style="background-color:lavender;">  
    <div>
      <?php
        $sql = "SELECT * FROM forum_questions ORDER BY time DESC LIMIT 10";
        $result = mysqli_query($con, $sql);
        while($row = mysqli_fetch_array($result))
        {
              
             
                   echo "<a href='answer_questions.php?id=".$row['id']."'><h3 style='text-align: left padding-top: 50px'>".$row['questions']."</h3></a>";
                    echo "<div><h5 style='text-align:right'>".$row['name']."</h5></div>";
                    echo "<div><h5 style='text-align:right'>".$row['roll']."</h5></div>";
                    echo "<br>";
             
                   
        }
      ?>
    </div>
   </div>
  </div>  
  </div>
    </div>
  <div>
      
        <div class="w3-button w3-left" style="margin-left:25%;padding:1px 16px;height:1000px;"><a href="submit_questions.php">Submit your question</a>
        </div>
      
  </div>

</body>
</html>
