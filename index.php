<?php
require_once("config.php");
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
if(isset($_POST['submit1']))
{
	   if($_POST['accept']=="")
   		$accept="n";
   	 else
   	 	$accept="y";

   	 if($_POST['physical']=="")   	 
   	 	$physical="n";
   	 else
   	 	$physical="y";

	$sql="insert into registration(firstname,
	lastname,
  	fathername, 
  	mothername,
  	dob, 
  	gender,
  	country,
  	state ,
  	district,
  	city,
  pincode,
  nationality,
  religion,
  phonenumber,
  mobilenumber,
  email,
  education,
  yearpass,
  university,
  physicalstatus,
  pasword,
  acceptterm,
  comment)values('".$_POST['firstname']."','".
   $_POST['lastname']."','".
   $_POST['fathername']."','". 
   $_POST['mothername']."','". 
   $_POST['dob']."','".  
   $_POST['gender'] ."','".
   $_POST['country']."','".
   $_POST['state']."','".
   $_POST['district']."','".
   $_POST['city']."','".
   $_POST['pincode']."','".
   $_POST['nationality']."','".
   $_POST['religion']."','".
   $_POST['phone']."','".
  	$_POST['mobile']."','".
   	$_POST['email']."','".
   	$_POST['education']."',".
   	$_POST['year'].",'".
   	$_POST['university']."','".
   	$physical."','".
   	$_POST['password']."','".
   	$accept."','".
   	$_POST['comment']."')";

   	//echo $sql;
   	 
   	if(mysql_query($sql))
   	{
   		header("location:thanks.php");
   	}   
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <script language="JavaScript" src="scripts/gen_validatorv31.js" type="text/javascript"></script>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Practice Project</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <!--link href="../../assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet"-->

    <!-- Custom styles for this template -->
    <link href="css/theme.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script type="text/javascript">
      function togglevalue()
      {
        if(document.getElementById("physical").checked)         
          document.getElementById("comment").style.visibility = "visible";
        else
          document.getElementById("comment").style.visibility = "hidden";

      }
      function validate1()
      {        
        var var1=document.getElementById("password");
        var var2=document.getElementById("repassword");
        var var3=document.getElementById("email"); 
        var var4=document.getElementById("6_letters_code");             
        if(var1.value!=var2.value)
        {
          alert("password and retype password must match");
          return false;
        }
        if(var3.value=="" || (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(var3.value))==false)
        {
          alert("Please check email format");
          return false;        
        }

          //need modification
          /*if(var4.localeCompare("abc")!= 0)
          {
            //Note: the captcha code is compared case insensitively.
            //if you want case sensitive match, update the check above to
            // strcmp()
             alert("captcha code does not match");
             return false;
            
          }*/


      
        return true;
      } 

      function refreshCaptcha()
        {
          var img = document.images['captchaimg'];
          img.src = img.src.substring(0,img.src.lastIndexOf("?"))+"?rand="+Math.random()*1000;
        }     

    </script>
  </head>

  <body>

    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Project name</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="#">Home</a></li>
            <li><a href="about.php">About</a></li>
            <li><a href="contact.php">Contact</a></li>
            <li><a href="login.php">Login</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

    <div class="container">

      <!--<div class="starter-template">
        <h1>Bootstrap starter template</h1>
        <p class="lead">Use this document as a way to quickly start any new project.<br> All you get is this text and a mostly barebones HTML document.</p>
      </div>-->

      <form name="register" action="" method="post" onsubmit="return validate1()">
       <table align="center" border=0>
        <div class="row">
          <div class="col-sm-30">
            <label><b>Registration Form</b></label>          
          </div>          
        </div>

       	<div class="row">
  	   		<div class="col-sm-30">
  	   			<label>First Name* :</label>  	   			
            <input type="text" name="firstname" required>  	   		  
          </div>  	   		
  	   	</div>
         
  	   	<div class="row">
       		<div class="col-sm-30">
       			<label>Father Name* :</label>
       			<input type="text" name="fathername" required>
       		</div>
       	</div>
          
       	
       	<div class="row">
       		<div class="col-sm-30">
       			<label>Last Name* :</label>
       			<input type="text" name="lastname" required>
       		</div>
       	</div>

       	<div class="row">
  	   		<div class="col-sm-30">
  	   			<label>Mother's Name* :</label>
  	   			<input type="text" name="mothername" required>
  	   		</div>
  	   	</div>

  	   	 <div class="row">
  	   		<div class="col-sm-30">
  	   			<label>DOB* :</label>
  	   			<input type="text" name="dob" required>
  	   		</div>
  	   	</div>
  	   	<div class="row">
  	   		<div class="col-sm-30">
  	   			<label>Gender* :</label>
  	   			<input type="radio" name="gender" value="m" checked>Male
  	   			<input type="radio" name="gender" value="f">female
  	   		</div>
  	   	</div>
		<div class="row">
  	   		<div class="col-sm-30">
  	   			<label>Country* :</label>
  	   			<input type="text" name="country" required>
  	   		</div>
  	   	</div>   
    
  	   	<div class="row">
  	   		<div class="col-sm-30">
  	   			<label>State* :</label>
  	   			<input type="text" name="state" required>
  	   		</div>
  	   	</div>

  	   	<div class="row">
  	   		<div class="col-sm-30">
  	   			<label>District* :</label>
  	   			<input type="text" name="district" required>
  	   		</div>
  	   	</div>

  	   	<div class="row">
  	   		<div class="col-sm-30">
  	   			<label>City*:</label>
  	   			<input type="text" name="city" required>
  	   		</div>
  	   	</div>

  	   	<div class="row">
  	   		<div class="col-sm-30">
  	   			<label>Pincode :</label>
  	   			<input type="text" name="pincode">
  	   		</div>
  	   	</div>

  	   	<div class="row">
  	   		<div class="col-sm-30">
  	   			<label>Nationality* :</label>
  	   			<input type="text" name="nationality" required>
  	   		</div>
  	   	</div>

    	<div class="row">
  	   		<div class="col-sm-30">
  	   			<label>Religion* :</label>
  	   			<input type="text" name="religion" required>
  	   		</div>
  	   	</div>

  	   	<div class="row">
  	   		<div class="col-sm-30">
  	   			<label>Phone Number :</label>
  	   			<input type="text" name="phone" type="number">
  	   		</div>
  	   	</div>

   		<div class="row">
  	   		<div class="col-sm-30">
  	   			<label>Mobile Number* :</label>
  	   			<input type="text" name="mobile" type="number" required>
  	   		</div>
  	   	</div>

  	   	<div class="row">
  	   		<div class="col-sm-30">
  	   			<label>Email ID* :</label>
  	   			<input type="text" name="email" id="email" required>
  	   		</div>
  	   	</div>

  	   	<div class="row">
  	   		<div class="col-sm-30">
  	   			<label>Education (Degree)*:</label>
  	   			<input type="text" name="education" required>
  	   		</div>
  	   	</div>

  	   	<div class="row">
  	   		<div class="col-sm-30">
  	   			<label>Year of Passing* :</label>
  	   			<input type="text" name="year">
  	   		</div>
  	   	</div>

  	   	<div class="row">
  	   		<div class="col-sm-30">
  	   			<label>Board/University :</label>
  	   			<input type="text" name="university">
  	   		</div>
  	   	</div>

  	   	<div class="row">
  	   		<div class="col-sm-30">
  	   			<label>Physical : Yes or No</label>
  	   			<input type="checkbox" name="physical" id="physical" onclick="togglevalue()">
  	   			<input type="text" name="comment" id="comment" style="visibility:hidden">

  	   		</div>
  	   	</div>  

  	   	<div class="row">
  	   		<div class="col-sm-30">
  	   			<label>Password* :</label>
  	   			<input type="password" name="password" id="password" required>
  	   		</div>
  	   	</div>

  	   	<div class="row">
  	   		<div class="col-sm-30">
  	   			<label>Re-enter Password* :</label>
  	   			<input type="password" name="repassword" id="repassword" required>
  	   		</div>
  	   	</div>

        <div class="row">
          <div class="col-sm-30">
            <label>captcha</label>
            <img src="captcha_code_file.php?rand=<?php echo rand(); ?>" id='captchaimg'><br>
            <label for='message'>Enter the code above here :</label><br>
            <input id="6_letters_code" name="6_letters_code" type="text" required><br>
              <small>Can't read the image? click <a href='javascript: refreshCaptcha();'>here</a> to refresh</small>
          </div>
        </div>


  	   	<div class="row">
  	   		<div class="col-sm-30">
  	   			<input type="checkbox" name="accept" required>
  	   			<label> “I Accept Terms and Condition"</label>
  	   		</div>
  	   	</div>

  	   	<div class="row">
  	   		<div class="col-sm-30">
  	   			<input type="submit" class="btn btn-primary" name="submit1" value="Create Account">
  	   		</div>
  	   	</div>
  	  </form>


    </div><!-- /.container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="../../dist/js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
