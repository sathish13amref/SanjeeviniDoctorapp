<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  
	  <link rel="stylesheet" href="css/framework7-icons.css">
      <link rel = "stylesheet"
         href = "https://cdnjs.cloudflare.com/ajax/libs/framework7/1.4.2/css/framework7.ios.min.css" />
      <link rel = "stylesheet" 
         href = "https://cdnjs.cloudflare.com/ajax/libs/framework7/1.4.2/css/framework7.ios.colors.min.css" />
         
        
  <style>
  p {font-size: 16px;}
  .margin {margin-bottom: 45px;}
  .bg-1 { 
      background-color: #2BBBAD; /* Green */
      color: #00695c;
  }
  .container-fluid {
		height:180px;
      padding-top: 0px;
      padding-bottom: 0px;
  }
  .navbar {
      padding-top: 5px;
      padding-bottom: 5px;
      border: 0;
      border-radius: 0;
      margin-bottom: 0;
      font-size: 12px;
      letter-spacing: 5px;
  }
  .imagecustom {
	border: solid 7px white;
  }
  .imgg{
	width:150px;
  }
	#grad1 {
    height: 200px;
    background: red; /* For browsers that do not support gradients */
    background: linear-gradient(to top, rgba(0,105,92,0), rgba(0,105,92,1)); /* Standard syntax (must be last) */
}

  </style>
</head>
<body>

<!-- Navbar -->
<div class = "navbar">
                     <div class = "navbar-inner">
                        <div class = "left"></div>
                        <div class = "center"><img class="imgg" src="img/logol.png"></div>
                        <div class = "right"><button class = "btton"><i class="f7-icons">logout
						<?php
						session_destroy();
						?>
						
						</i></button></div>
					
                     </div>
                  </div>
 
			
 
 <?php
 
 header("Cache-Control: private, must-revalidate, max-age=0");
  header("Pragma: no-cache");
	define('DB_HOST', 'localhost');
	define('DB_NAME', 'fkwcci_medical');
	define('DB_USER','fkwcci_myadmin'); 
	define('DB_PASSWORD','globe123');
	$con= mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME) or die("Failed to connect to MySQL: " . mysql_error());
//	$db=mysql_select_db(DB_NAME,$con) or die("Failed to connect to MySQL: " . mysql_error()); 

		$result1 ="SELECT * FROM doctorlist WHERE Email_id= '".$Email_id."' AND  password= '".$password."'";
			$data1 = mysqli_query ($con,$result1)or die(mysqli_error($con));
			
			$check = mysqli_fetch_array($data1);
			 $id=$row["id"];
			if(isset($check)){
			echo 'success';
			header ('location:dashboard.html');
			}
			else
			{
				echo 'failure';
			}
			?>

<div class="container-fluid text-center" id="grad1">
  <h3 class="margin"></h3>
  
  <img src="http://ak5.picdn.net/shutterstock/videos/2227075/thumb/1.jpg" class="img-responsive img-circle margin imagecustom" style="display:inline" alt="Bird" width="300" height="300" border="150">
  
</div>

<!-- Second Container -->
<div class="text-center">
  <h3 class="margin"></h3>
  <p><div class="card">
  <div class="card-content card-content-padding bg-1">"The duty to help Cure"</div>
</div></p>
</div>

<!-- two card with 3buttons each -->
<div class = "views">
    <div data-page = "home" class = "page navbar-fixed">
        <div class = "content-block infinite-scroll">
			<div class="container">
				<div class="btn-group btn-group-justified">
				<a href="#" onclick="window.open('Scheduling.html','_self');" class="btn btn-primary">
				<span class="glyphicon glyphicon glyphicon-calendar"></span><br>Edit<br>schedule</a>
				<a href="#" onclick="window.open('Approval.php','_self');" class="btn btn-success">
				<span class="glyphicon glyphicon glyphicon-ok"></span><br>Approval</a>
				<a href="#" onclick="window.open('Feed.html','_self');" class="btn btn-danger">
				<span class="glyphicon glyphicon glyphicon-star-empty"></span><br>feedback</a>
				</div>
			</div>
			  <div class="container infinite-scroll">
    <div class="btn-group btn-group-justified">
      <a href="#" onclick="window.open('Notification.html','_self');" class="btn btn-danger">
      <span class="glyphicon glyphicon glyphicon-comment"></span><br>Notification</a>
      <a href="#" onclick="window.open('contact-form.html','_self');" class="btn btn-warning">
      <span class="glyphicon glyphicon glyphicon-envelope"></span><br>Report<br>Admin</a>
      <a href="#" onclick="window.open('edit.html','_self');" class="btn btn-info">
      <span class="glyphicon glyphicon glyphicon-user"></span><br>Edit<br>Profile</a>
    </div>
  </div>
        </div>
    </div>
</div>
	  
	  <script type = "text/javascript" 
         src = "https://cdnjs.cloudflare.com/ajax/libs/framework7/1.4.2/js/framework7.min.js"></script>      
      <script>
         var myApp = new Framework7({
            material: true
         });
      </script>

</body>
</html>
