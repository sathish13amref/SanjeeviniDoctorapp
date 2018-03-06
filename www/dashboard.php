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
                        <div class = "right"><span onclick="window.location.href='logout.php';" class="glyphicon glyphicon-log-out" aria-hidden="true"></span></div>
                     </div>
                  </div>
 	 <?php

include 'config.php';
session_start();

if(! isset($_SESSION['ID']))
	{
		$_SESSION['msg']="Invalid acess";
		header("location:index.php");
	}
					
$_SESSION['EMAIL'];
 $_SESSION['NAME'];
$id= $_SESSION['ID'];
 $doctor_id= $_SESSION['DOCTOR_ID'];

 
$query= $db->query("select * from doctorlist where doctor_id =$doctor_id" );
$rowCount = $query->num_rows;

 
$row = $query->fetch_object();


?>
 
 
<div class="container-fluid text-center" id="grad1">
  <h3 class="margin"></h3>
 
  <img src="/admin/images/<?php echo $row->photo;?>" class="img-responsive img-circle margin imagecustom" style="display:inline"  width="300" height="40" border="150">
 
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
				<a href="#" onclick="window.open('Scheduling.php?id=<?php echo  $_SESSION['DOCTOR_ID']; ?>','_self');" class="btn btn-primary">
				<span class="glyphicon glyphicon glyphicon-calendar"></span><br>Edit<br>schedule</a>
				<a href="#" onclick="window.open('Approval.php','_self');" class="btn btn-success">
				<span class="glyphicon glyphicon glyphicon-ok"></span><br>Approval</a>
				<a href="#" onclick="window.open('feed.php?id=<?php echo $_SESSION['DOCTOR_ID']; ?>','_self');" class="btn btn-danger">
				<span class="glyphicon glyphicon glyphicon-star-empty"></span><br>feedback</a>
				</div>
			</div>
			  <div class="container infinite-scroll">
    <div class="btn-group btn-group-justified">
      <a href="#" onclick="window.open('notification.php?id=<?php echo $_SESSION['DOCTOR_ID']; ?>','_self');" class="btn btn-danger">
      <span class="glyphicon glyphicon glyphicon-comment"></span><br>Notification</a>
      <a href="#" onclick="window.open('contact-form.php','_self');" class="btn btn-warning">
      <span class="glyphicon glyphicon glyphicon-envelope"></span><br>Report<br>Admin</a>
      <a href="#" onclick="window.open('edit.php?id=<?php echo $_SESSION['DOCTOR_ID']; ?>','_self');"  class="btn btn-info">
     			
	
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