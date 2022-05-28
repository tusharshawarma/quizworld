<?php

session_start();
if(!isset($_SESSION['username'])){
    header('location:login.php');
}

$con = mysqli_connect('localhost','root');
mysqli_select_db($con,'quizdbase');

?>

<!DOCTYPE html>
<html lang="en">

<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<style type="text/css">
	.animateuse{
			animation: leelaanimate 0.5s infinite;
		}

@keyframes leelaanimate{
			0% { color: red },
			10% { color: yellow },
			20%{ color: blue }
			40% {color: green },
			50% { color: pink }
			60% { color: orange },
			80% {  color: black },
			100% {  color: brown }
		}
<style>
body, html {
  height: 100%;
  margin: 0;
}
.bigh{
  background-image:linear-gradient(to right top,pink,pink,yellow);
  height: 300%;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}
</style>
    <link rel="stylesheet" type="text/css" href="bootstrap.css">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>

<body>
<div class="bigh">
<div class="container">

    <br><h1 class="text-center animateuse">TUSHAR'S WEBDEVELOPER QUIZ</h1><br>
    <h2 class="text-center animateuse"> Welcome <?php echo $_SESSION['username']; ?> </h2>
  <div class="col-lg-8 m-auto d-block">
    <div class="card">
      <h3 class="text-center card-header">Welcome <?php echo $_SESSION['username']; ?>, you have to select only 1 out of 4 . Best of luck!</h3>
    </div><br>

    <form class="" action="check.php" method="post">

    <?php
    for($i=1;$i<5;$i++){
    $q = "select * from questions where qid=$i";
    $query = mysqli_query($con,$q);
    while($rows = mysqli_fetch_array($query)){
    ?>

    <div class="card">
      <h4 class="card-header"> <?php echo $rows['question'] ?> </h4>

        <?php
          $q = "select * from answers where ans_id=$i";
          $query = mysqli_query($con,$q);
          while($rows = mysqli_fetch_array($query)){
         ?>

         <div class="card-body">
           <input type="radio" name="quizcheck[<?php echo $rows['ans_id']; ?>]" value="<?php echo $rows['aid']; ?>">
           <?php echo $rows['answer']; ?>
         </div>

    <?php
    }
    }
  }
    ?>
    <br>
    <input type="submit" name="submit" value="Submit" class="btn btn-success m-auto d-block">
    </form>

  </div><br><br>
  <div class="m-auto d-block">
    <a href="logout.php" class="btn btn-primary">LOGOUT</a>
  </div><br>
  <div class="">
    <h5 class="text-center">@2022 By-Tushar</h5>
  </div><br><br>
</div>
</div>
</body>
</html>
