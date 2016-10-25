<?php
require_once("config.php");
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
if(isset($_POST['uplloadimage']))
{
 $filename=basename($_FILES["upload"]["name"]);
 $target_dir="images/";
 $target_file = $target_dir.basename($_FILES["upload"]["name"]);     
    if($filename!="")
    {
      $target_file = $target_dir . basename($_FILES["upload"]["name"]);
      $update = "update registration set
                 filename = '".$filename."' where id=".$_SESSION['id'];

          if(mysql_query($update))
          {
            move_uploaded_file($_FILES['upload']['tmp_name'], $target_file);
            echo "file changes is saved";
          }
    }
    else
    {
      echo "Please choose filename";
    }
}

$query="SELECT * from registration where id=".$_SESSION['id'];
$row = mysql_fetch_assoc(mysql_query($query));

?>

<!DOCTYPE html>
<html lang="en">
  <head>
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
            <li><a href="logout.php">Logout</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

    <div class="container">

      <div class="starter-template">
        <h1>Bootstrap starter template</h1>
        <p class="lead">Use this document as a way to quickly start any new project.<br> All you get is this text and a mostly barebones HTML document.</p>
      </div>

      <form name="register" action="" method="post" enctype="multipart/form-data">
       	<div class="row">
  	   		<div class="col-sm-30">
  	   			<label>First Name* :</label>
            <label><?php echo $row['firstname']; ?></label>  	   			
  	   		</div>  	   		
  	   	</div>
  	   	
  	   	<div class="row">
       		<div class="col-sm-30">
       			<label>Father Name* :</label>
             <label><?php echo $row['fathername']; ?></label>
       			
       		</div>
       	</div>
       	
       	<div class="row">
       		<div class="col-sm-30">
       			<label>Last Name* :</label>
             <label><?php echo $row['lastname']; ?></label>       			
       		</div>
       	</div>

       	<div class="row">
  	   		<div class="col-sm-30">
  	   			<label>Mother's Name* :</label>
             <label><?php echo $row['mothername']; ?></label>
  	   		</div>
  	   	</div>

  	   	 <div class="row">
  	   		<div class="col-sm-30">
  	   			<label>DOB* :</label>
            <label><?php echo $row['dob']; ?></label>
  	   		</div>
  	   	</div>

  	   	<div class="row">
  	   		<div class="col-sm-30">
  	   			<label>Gender* :</label>
            <?php if($row['gender']=='m')
            {?>
  	   			<input type="radio" name="gender" value="m" checked>Male
            <input type="radio" name="gender" value="f" >female
            <?php } else { ?>
            <input type="radio" name="gender" value="m">Male
  	   			<input type="radio" name="gender" value="f" checked>female
            <?php }?>
  	   		</div>
  	   	</div>
		<div class="row">
  	   		<div class="col-sm-30">
  	   			<label>Country* :</label>
             <label><?php echo $row['country']; ?></label>
  	   		</div>
  	   	</div>   
    
  	   	<div class="row">
  	   		<div class="col-sm-30">
  	   			<label>State* :</label>
             <label><?php echo $row['state']; ?></label>
  	   		</div>
  	   	</div>

  	   	<div class="row">
  	   		<div class="col-sm-30">
  	   			<label>District* :</label>
             <label><?php echo $row['district']; ?></label>
  	   		</div>
  	   	</div>

  	   	<div class="row">
  	   		<div class="col-sm-30">
  	   			<label>City*:</label>
             <label><?php echo $row['city']; ?></label>
  	   		</div>
  	   	</div>

  	   	<div class="row">
  	   		<div class="col-sm-30">
  	   			<label>Pincode :</label>
             <label><?php echo $row['pincode']; ?></label>
  	   		</div>
  	   	</div>

  	   	<div class="row">
  	   		<div class="col-sm-30">
  	   			<label>Nationality* :</label>
             <label><?php echo $row['nationality']; ?></label>                        
  	   		</div>
  	   	</div>

    	<div class="row">
  	   		<div class="col-sm-30">
  	   			<label>Religion* :</label>
             <label><?php echo $row['religion']; ?></label>
  	   		</div>
  	   	</div>

  	   	<div class="row">
  	   		<div class="col-sm-30">
  	   			<label>Phone Number :</label>
             <label><?php echo $row['phonenumber']; ?></label>
  	   		</div>
  	   	</div>

   		<div class="row">
  	   		<div class="col-sm-30">
  	   			<label>Mobile Number* :</label>
             <label><?php echo $row['mobilenumber']; ?></label>
  	   		</div>
  	   	</div>

  	   	<div class="row">
  	   		<div class="col-sm-30">
  	   			<label>Email ID* :</label>
             <label><?php echo $row['email']; ?></label>
  	   		</div>
  	   	</div>

  	   	<div class="row">
  	   		<div class="col-sm-30">
  	   			<label>Education (Degree)*:</label>
             <label><?php echo $row['education']; ?></label>
  	   		</div>
  	   	</div>

  	   	<div class="row">
  	   		<div class="col-sm-30">
  	   			<label>Year of Passing* :</label>
             <label><?php echo $row['yearpass']; ?></label>
  	   		</div>
  	   	</div>
  	   	<div class="row">
  	   		<div class="col-sm-30">
  	   			<label>Board/University :</label>
             <label><?php echo $row['university']; ?></label>
  	   		</div>
  	   	</div>

  	   	<div class="row">
  	   		<div class="col-sm-30">
  	   			<label>Physical : (Yes or No)</label>
            <?php if($row['physicalstatus']=='y') {?>
  	   			<label>yes</label>
            <?php }else{ ?>
            <label>no</label>
            <?php } ?>
            <?php if($row['physicalstatus']=='y') { ?>   
            <label>comment :<label>                
  	   			<label><?php echo $row['comment']; ?></label>
            <?php }?>
            </div>
  	   	</div>  

  	   	<div class="row">
  	   		<div class="col-sm-30">
  	   			<label>Password* :</label>
            <label><?php echo $row['pasword']; ?></label>
  	   		</div>
  	   	</div>
        
        <?php if($row['filename']=="") { ?>
        <div class="row">
          <div class="col-sm-30">
            <img src="images/login.jpg" width="100px" height="100px">            
          </div>
        </div> 
        <?php } else {?>
              <div class="row">
                  <div class="col-sm-30">
                    <?php                   
              echo '<img alt="no image" width="100px" height="100px" src="images/'.$row['filename'].'"">';   ?>   
                </div>
              </div> 
        <?php }?>
          


        <div class="row">
          <div class="col-sm-30">
           <label>change image :</label>          
              <input type="file" name="upload">
              <input type="submit" name="uplloadimage" value="Upload Image:">      
           </div>
        </div>        

        


        <div class="row">
          <div class="col-sm-30">           
            <a href="logout.php">Logout</a>
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
