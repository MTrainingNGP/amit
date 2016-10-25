<?php
require_once('config.php');
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
if (isset($_POST['submit'])) {
  $pwd=$_POST['password'];
  $email=$_POST['email'];
  
  $query="SELECT id from registration where pasword='$pwd' and email='$email' ";
  echo $query;
  $row = mysql_fetch_assoc(mysql_query($query));

	if (!empty($row['id'])){   
        session_start();
		$_SESSION['id']=$row['id'];
		header('location:profile.php');
  }
  else{
    echo "<script>alert('please check login data')</script>";
	}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Maximess Project</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
    /* Remove the navbar's default margin-bottom and rounded borders */
    .navbar {
      margin-bottom: 0;
      border-radius: 0;
    }
    
    /* Add a gray background color and some padding to the footer */
    footer {
      background-color: #f2f2f2;
      padding: 25px;
    }
  </style>
  <script type="text/javascript"> function prompt(){
  	var pass= document.getElementById('password').value;
  	var email= document.getElementById('email').value;
  	if (email="" || pass=="") {
  		alert("data missing from email or password field");
  	}

  	}</script>
</head>
<body>

<section style="background-color: #F0FFFF">

  <div class="container" style="width: 400px; margin-top: 10%;  background-color: #E0B880">
  <form method="post" action="" id="login_form">
  <p class='text-center' style="font-size: 30px">LOGIN FORM</p>
      <div class="form-group">
      <label for="exampleInputEmail1">Email address</label>
      <input type="email" class="form-control" id="exampleInputEmail1" name="email" placeholder="Email">
  </div>
  <div class="form-group">
     <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name='password'>
  </div>
  <input type="submit" class="btn btn-default" name="submit" onclick="prompt()" value='submit'>
  <a href="index.php" class="btn btn-default pull-right">back</a>
    </form>
  </div>
</section>



</body>
</html>

