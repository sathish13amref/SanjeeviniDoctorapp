<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name = "viewport" content = "width = device-width, initial-scale = 1, 
         maximum-scale = 1, minimum-scale = 1, user-scalable = no, minimal-ui" />
    <meta name = "apple-mobile-web-app-capable" content = "yes" />
    <meta name = "apple-mobile-web-app-status-bar-style" content = "black" />
	<link rel = "stylesheet" 
         href = "https://cdnjs.cloudflare.com/ajax/libs/framework7/1.4.2/css/framework7.ios.min.css" />
    <link rel = "stylesheet" 
         href = "https://cdnjs.cloudflare.com/ajax/libs/framework7/1.4.2/css/framework7.ios.colors.min.css" />
  
  
<style>
* {box-sizing: border-box}
body {font-family: "Lato", sans-serif;}
.tab {
    overflow: hidden;
    border: 1px solid #ccc;
    background-color: #66BB6A;
}

.list-block .item-title.label {
    width: 55%;
    }
/* Style the buttons inside the tab */
.tab button {
    background-color: inherit;
    float: left;
    border: none;
    outline: none;
    cursor: pointer;
    padding: 14px 5px;
    transition: 0.3s;
    font-size: 17px;
}

/* Change background color of buttons on hover */
.tab button:hover {
    background-color: #ddd;
}

/* Create an active/current tablink class */
.tab button.active {
    background-color: #FF7043;
}

/* Style the tab content */
.tabcontent {
    display: none;
    padding: 6px 12px;
    border: 1px solid #ccc;
    border-top: none;
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
  .imgg{
	width:150px;
  }
  
</style>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
</head>
<body>


<!-- Navbar -->
<div class = "navbar">
                     <div class = "navbar-inner">
                        <div class = "left"><a href="dashboard.php" class="external"><i class="icon icon-back"></i></a></div>
                        <div class = "center"><img class="imgg" src="img/logol.png"></div>
                        <div class = "right"></div>
					
                     </div>
                  </div>
<?php
session_start();
include 'config.php';
if(! isset($_SESSION['ID']))
	{
		//$_SESSION['msg']="Invalid acess";
		header("location:index.php");
	}
	
	
$id=$_GET['id'];
$query1= $db->query("select * from doctors where doctor_id ='$id' AND days='Monday' ");
$rowCount1 = $query1->num_rows;
$row = $query1->fetch_object();
?>
<div class = "views">
    <div data-page = "home" class = "page navbar-fixed">
<div class="tab">
  <button class="tablinks" onclick="openCity(event, 'Monday')" value="Monday" <?php if($row->days =='Monday') echo 'selected="selected"'; ?>id="defaultOpen">Mon</button>
  <button class="tablinks" onclick="openCity(event, 'Tuesday')" value="Tuesday" <?php if($row->days =='Tuesday') echo 'selected="selected"'; ?>>Tues</button>
  <button class="tablinks" onclick="openCity(event, 'Wednesday')" value="Wednesday" <?php if($row->days =='Wednesday') echo 'selected="selected"'; ?>>Wed</button>
  <button class="tablinks" onclick="openCity(event, 'Thursday')" value="Thursday" <?php if($row->days =='Thursday') echo 'selected="selected"'; ?>>Thu</button>
  <button class="tablinks" onclick="openCity(event, 'Friday')" value="Friday" <?php if($row->days =='Friday') echo 'selected="selected"'; ?>>Fri</button>
  <button class="tablinks" onclick="openCity(event, 'Saturday')" value="Saturday" <?php if($row->days =='Saturday') echo 'selected="selected"'; ?>>Sat</button>
  <button class="tablinks" onclick="openCity(event, 'Sunday')" value="Sunday" <?php if($row->days =='Sunday') echo 'selected="selected"'; ?>>Sun</button>
</div>

<div id="Monday" class="tabcontent">

 <form id = "my-form" class = "list-block" method="POST" action="server.php?doctor_id=<?php echo $id;?>" onsubmit="return validation()">
  <h3 id="m1" value="Monday"></h3>
  <input type='hidden' name='m' value="Monday"/>
                       <div class = "list-block inset"> 
            <ul>
			<li>
				<div class = "item-content">
					<div class = "item-inner">
							<div class = "item-title label">Time</div>
							<div class = "item-input">
							<div class = "item-title label">No.of Patients</div>
						</div>
					</div>
				</div>
				</li>
				<li>
					<div class = "item-content">
						<div class = "item-inner">
							<div class = "item-title label">09-09:30 Am</div>
							<div class = "item-input">
				<input type = "text" name ="09_09:30" value="<?php echo $row->slot1?>" placeholder = " - " required>
										</div>
									</div>
								</div>
							</li>
                           
							<li>
								<div class = "item-content">
									<div class = "item-inner">
										<div class = "item-title label">09:30-10:00 Am</div>
										<div class = "item-input">
		<input type = "text" name ="09:30-10:00"value="<?php echo $row->slot2?>" placeholder = " - " required>
										</div>
									</div>
								</div>
							</li>

							<li>
								<div class = "item-content">
									<div class = "item-inner">
										<div class = "item-title label">10:00-10:30 Am</div>
										<div class = "item-input">
				<input type = "text" name ="10:00_10:30"value="<?php echo $row->slot3?>" placeholder = " - " required>
										</div>
									</div>
								</div>
							</li>
							
							
							<li>
								<div class = "item-content">
									<div class = "item-inner">
										<div class = "item-title label">10:30-11:00 Am</div>
										<div class = "item-input">
			<input type = "text" name ="10:30_11:00"value="<?php echo $row->slot4?>" placeholder = " - " required>
										</div>
									</div>
								</div>
							</li>
						   
							<li>
								<div class = "item-content">
									<div class = "item-inner">
										<div class = "item-title label">11:00-11:30 Am</div>
										<div class = "item-input">
				<input type = "text" name = "11:00_11:30"value="<?php echo $row->slot5?>" placeholder = " - " required>
										</div>
									</div>
								</div>
							</li>
						   
							<li>
								<div class = "item-content">
									<div class = "item-inner">
										<div class = "item-title label">11:30-12:00 Am</div>
										<div class = "item-input">
			<input type = "text" name = "11:30_12:00"value="<?php echo $row->slot6?>" placeholder = " - " required>
										</div>
									</div>
								</div>
							</li>
							<li>
								<div class = "item-content">
									<div class = "item-inner">
										<div class = "item-title label">12:00-12:30 Am</div>
										<div class = "item-input">
				<input type = "text" name = "12:00_12:30"value="<?php echo $row->slot7?>" placeholder = " - " required>
										</div>
									</div>
								</div>
							</li>
						   <li>
								<div class = "item-content">
									<div class = "item-inner">
										<div class = "item-title label">12:30-01:00 pm</div>
										<div class = "item-input">
	<input type = "text" name = "12:30_01:00"value="<?php echo $row->slot8?>" placeholder = " - " required>
										</div>
									</div>
								</div>
							</li>
							<li>
								<div class = "item-content">
									<div class = "item-inner">
										<div class = "item-title label">01:00-01:30 pm</div>
										<div class = "item-input">
			<input type = "text" name = "01:00_01:30" value="<?php echo $row->slot9?>" placeholder = " - " required>
		<input type="hidden" name="doctor_id"value="<?php echo $row->doctor_id; ?>">
										</div>
									</div>
								</div>
							</li>
							<li>
								<div class = "item-content">
									<div class = "item-inner">
										<div class = "item-title label">01:30-02:00 pm</div>
										<div class = "item-input">
			<input type = "text" name = "01:30_02:00" value="<?php echo $row->slot10?>" placeholder = " - " required>
							<input type="hidden" name="doctor_id"value="<?php echo $row->doctor_id; ?>">
										</div>
									</div>
								</div>
							</li>
							<li>
								<div class = "item-content">
									<div class = "item-inner">
										<div class = "item-title label">02:00-02:30 pm</div>
										<div class = "item-input">
		<input type = "text" name = "02:00_02:30" value="<?php echo $row->slot11?>" placeholder = " - " required>
							<input type="hidden" name="doctor_id"value="<?php echo $row->doctor_id; ?>">
										</div>
									</div>
								</div>
							</li>
							<li>
								<div class = "item-content">
									<div class = "item-inner">
										<div class = "item-title label">02:30-03:00 pm</div>
										<div class = "item-input">
	<input type = "text" name = "02:30_03:00" value="<?php echo $row->slot12?>" placeholder = " - " required>
							<input type="hidden" name="doctor_id"value="<?php echo $row->doctor_id; ?>">
										</div>
									</div>
								</div>
							</li>
							<li>
								<div class = "item-content">
									<div class = "item-inner">
										<div class = "item-title label">03:00-03:30 pm</div>
										<div class = "item-input">
			<input type = "text" name = "03:00_03:30" value="<?php echo $row->slot13?>" placeholder = " - " required>
							<input type="hidden" name="doctor_id"value="<?php echo $row->doctor_id; ?>">
										</div>
									</div>
								</div>
							</li>
						     <li>
								<div class = "item-content">
									<div class = "item-inner">
										<div class = "item-title label">03:30-04:00 pm</div>
										<div class = "item-input">
		<input type = "text" name = "03:30_04:00" value="<?php echo $row->slot14?>" placeholder = " - " required>
							<input type="hidden" name="doctor_id"value="<?php echo $row->doctor_id; ?>">
										</div>
									</div>
								</div>
							</li>
						     <li>
								<div class = "item-content">
									<div class = "item-inner">
										<div class = "item-title label">04:00-04:30 pm</div>
										<div class = "item-input">
		<input type = "text" name = "04:00_04:30" value="<?php echo $row->slot15?>" placeholder = " - " required>
							<input type="hidden" name="doctor_id"value="<?php echo $row->doctor_id; ?>">
										</div>
									</div>
								</div>
							</li>
							
						     <li>
								<div class = "item-content">
									<div class = "item-inner">
										<div class = "item-title label">04:30-05:00 pm</div>
										<div class = "item-input">
		<input type = "text" name = "04:30_05:00" value="<?php echo $row->slot16?>" placeholder = " - " required>
							<input type="hidden" name="doctor_id"value="<?php echo $row->doctor_id; ?>">
										</div>
									</div>
								</div>
							</li>
						     <li>
								<div class = "item-content">
									<div class = "item-inner">
										<div class = "item-title label">05:00-05:30 pm</div>
										<div class = "item-input">
		<input type = "text" name = "05:00_05:50" value="<?php echo $row->slot17?>" placeholder = " - " required>
							<input type="hidden" name="doctor_id"value="<?php echo $row->doctor_id; ?>">
										</div>
									</div>
								</div>
							</li>
						     <li>
								<div class = "item-content">
									<div class = "item-inner">
										<div class = "item-title label">05:30-06:00 pm</div>
										<div class = "item-input">
		<input type = "text" name = "05:30_06:00" value="<?php echo $row->slot18?>" placeholder = " - " required>
							<input type="hidden" name="doctor_id"value="<?php echo $row->doctor_id; ?>">
										</div>
									</div>
								</div>
							</li>
						     <li>
								<div class = "item-content">
									<div class = "item-inner">
										<div class = "item-title label">06:00-06:30 pm</div>
										<div class = "item-input">
		<input type = "text" name = "06:00_06:30" value="<?php echo $row->slot19?>" placeholder = " - " required>
							<input type="hidden" name="doctor_id"value="<?php echo $row->doctor_id; ?>">
										</div>
									</div>
								</div>
							</li>
						     <li>
								<div class = "item-content">
									<div class = "item-inner">
										<div class = "item-title label">06:30-07:00 pm</div>
										<div class = "item-input">
		<input type = "text" name = "06:30_07:00" value="<?php echo $row->slot20?>" placeholder = " - " required>
							<input type="hidden" name="doctor_id"value="<?php echo $row->doctor_id; ?>">
										</div>
									</div>
								</div>
							</li>
						     <li>
								<div class = "item-content">
									<div class = "item-inner">
										<div class = "item-title label">07:00-07:30 pm</div>
										<div class = "item-input">
		<input type = "text" name = "07:00_07:30" value="<?php echo $row->slot21?>" placeholder = " - " required>
							<input type="hidden" name="doctor_id"value="<?php echo $row->doctor_id; ?>">
										</div>
									</div>
								</div>
							</li>
						     <li>
								<div class = "item-content">
									<div class = "item-inner">
										<div class = "item-title label">07:30-08:00 pm</div>
										<div class = "item-input">
	<input type = "text" name = "07:30_08:00" value="<?php echo $row->slot22?>" placeholder = " - " required>
							<input type="hidden" name="doctor_id"value="<?php echo $row->doctor_id; ?>">
										</div>
									</div>
								</div>
							</li>
							
						     <li>
								<div class = "item-content">
									<div class = "item-inner">
										<div class = "item-title label">08:00-08:30 pm</div>
										<div class = "item-input">
			<input type = "text" name = "08:00_08:30" value="<?php echo $row->slot23?>" placeholder = " - " required>
							<input type="hidden" name="doctor_id"value="<?php echo $row->doctor_id; ?>">
										</div>
									</div>
								</div>
							</li>
						     <li>
								<div class = "item-content">
									<div class = "item-inner">
										<div class = "item-title label">08:30-09:00 pm</div>
										<div class = "item-input">
		<input type = "text" name = "08:30_09:00" value="<?php echo $row->slot24?>" placeholder = " - " required>
							<input type="hidden" name="doctor_id"value="<?php echo $row->doctor_id; ?>">
										</div>
									</div>
								</div>
							</li>
                           
                       
                        </ul>
                        </div>
                   
                     
                    
				<!--	<input type="submit" class = "button button-fill button-round color-red form-to-json" value="Submit">
					<input type="submit" class = "button button-fill button-round color-red form-to-json" value="Sign UP"   >
				-->
				<center><Button onclick="myFunction()"class="col button button-fill color-red">Update</button></center>
					
                </form>
</div>
<?php

$query2= $db->query("select * from doctors where doctor_id ='$id' AND days ='Tuesday'");
$rowCount2 = $query2->num_rows;
$row2 = $query2->fetch_object();
?>
<div id="Tuesday" class="tabcontent">
<form id ="my-form" class = "list-block" method="POST" action="server.php?doctor_id=<?php echo $id;?>">


 <input type='hidden' name='m' value="Tuesday"/> 
                        <div class = "list-block inset">
                        <ul>
						<li>
					<div class = "item-content">
						<div class = "item-inner">
							<div class = "item-title label">Time</div>
								<div class = "item-input">
										<div class = "item-title label">No.of Patients</div>
										</div>
									</div>
								</div>
							</li>
							<li>
					<div class = "item-content">
						<div class = "item-inner">
							<div class = "item-title label">09-09:30 Am</div>
							<div class = "item-input">
								<input type = "text" name ="09_09:30"value="<?php echo $row2->slot1?>" placeholder = " - " required>
										</div>
									</div>
								</div>
							</li>
                           
							<li>
								<div class = "item-content">
									<div class = "item-inner">
										<div class = "item-title label">09:30-10:00 Am</div>
										<div class = "item-input">
			<input type = "text" name ="09:30-10:00"value="<?php echo $row2->slot2?>" placeholder = " - " required>
										</div>
									</div>
								</div>
							</li>

							<li>
								<div class = "item-content">
									<div class = "item-inner">
										<div class = "item-title label">10:00-10:30 Am</div>
										<div class = "item-input">
				<input type = "text" name ="10:00_10:30" value="<?php echo $row2->slot3?>" placeholder = " - " required>
										</div>
									</div>
								</div>
							</li>
							
							
							<li>
								<div class = "item-content">
									<div class = "item-inner">
										<div class = "item-title label">10:30-11:00 Am</div>
										<div class = "item-input">
									<input type = "text" name ="10:30_11:00"value="<?php echo $row2->slot4?>" placeholder = " - " required>
										</div>
									</div>
								</div>
							</li>
						   
							<li>
								<div class = "item-content">
									<div class = "item-inner">
										<div class = "item-title label">11:00-11:30 Am</div>
										<div class = "item-input">
					<input type = "text" name = "11:00_11:30"value="<?php echo $row2->slot5?>" placeholder = " - " required>
										</div>
									</div>
								</div>
							</li>
						   
							<li>
								<div class = "item-content">
									<div class = "item-inner">
										<div class = "item-title label">11:30-12:00 Am</div>
										<div class = "item-input">
		<input type = "text" name = "11:30_12:00"value="<?php echo $row2->slot6?>" placeholder = " - " required>
										</div>
									</div>
								</div>
							</li>
							<li>
								<div class = "item-content">
									<div class = "item-inner">
										<div class = "item-title label">12:00-12:30 Am</div>
										<div class = "item-input">
				<input type = "text" name = "12:00_12:30"value="<?php echo $row2->slot7?>" placeholder = " - " required>
										</div>
									</div>
								</div>
							</li>
						   <li>
								<div class = "item-content">
									<div class = "item-inner">
										<div class = "item-title label">12:30-01:00 pm</div>
										<div class = "item-input">
		<input type = "text" name = "12:30_01:00"value="<?php echo $row2->slot8?>" placeholder = " - " required>
										</div>
									</div>
								</div>
							</li>
							<li>
								<div class = "item-content">
									<div class = "item-inner">
										<div class = "item-title label">01:00-01:30 pm</div>
										<div class = "item-input">
		<input type = "text" name = "01:00_01:30" value="<?php echo $row2->slot9?>" placeholder = " - " required>
							<input type="hidden" name="doctor_id"value="<?php echo $row2->doctor_id; ?>">
										</div>
									</div>
								</div>
							</li>
							<li>
								<div class = "item-content">
									<div class = "item-inner">
										<div class = "item-title label">01:30-02:00 pm</div>
										<div class = "item-input">
		<input type = "text" name = "01:30_02:00" value="<?php echo $row2->slot10?>" placeholder = " - " required>
							<input type="hidden" name="doctor_id"value="<?php echo $row2->doctor_id; ?>">
										</div>
									</div>
								</div>
							</li>
							<li>
								<div class = "item-content">
									<div class = "item-inner">
										<div class = "item-title label">02:00-02:30 pm</div>
										<div class = "item-input">
			<input type = "text" name = "02:00_02:30" value="<?php echo $row2->slot11?>" placeholder = " - " required>
							<input type="hidden" name="doctor_id"value="<?php echo $row2->doctor_id; ?>">
										</div>
									</div>
								</div>
							</li>
							<li>
								<div class = "item-content">
									<div class = "item-inner">
										<div class = "item-title label">02:30-03:00 pm</div>
										<div class = "item-input">
			<input type = "text" name = "02:30_03:00" value="<?php echo $row2->slot12?>" placeholder = " - " required>
							<input type="hidden" name="doctor_id"value="<?php echo $row2->doctor_id; ?>">
										</div>
									</div>
								</div>
							</li>
							<li>
								<div class = "item-content">
									<div class = "item-inner">
										<div class = "item-title label">03:00-03:30 pm</div>
										<div class = "item-input">
			<input type = "text" name = "03:00_03:30" value="<?php echo $row2->slot13?>" placeholder = " - " required>
							<input type="hidden" name="doctor_id"value="<?php echo $row2->doctor_id; ?>">
										</div>
									</div>
								</div>
							</li>
						     <li>
								<div class = "item-content">
									<div class = "item-inner">
										<div class = "item-title label">03:30-04:00 pm</div>
										<div class = "item-input">
			<input type = "text" name = "03:30_04:00" value="<?php echo $row2->slot14?>" placeholder = " - " required>
							<input type="hidden" name="doctor_id"value="<?php echo $row2->doctor_id; ?>">
										</div>
									</div>
								</div>
							</li>
						     <li>
								<div class = "item-content">
									<div class = "item-inner">
										<div class = "item-title label">04:00-04:30 pm</div>
										<div class = "item-input">
			<input type = "text" name = "04:00_04:30" value="<?php echo $row2->slot15?>" placeholder = " - " required>
							<input type="hidden" name="doctor_id"value="<?php echo $row2->doctor_id; ?>">
										</div>
									</div>
								</div>
							</li>
							
						     <li>
								<div class = "item-content">
									<div class = "item-inner">
										<div class = "item-title label">04:30-05:00 pm</div>
										<div class = "item-input">
		<input type = "text" name = "04:30_05:00" value="<?php echo $row2->slot16?>" placeholder = " - " required>
							<input type="hidden" name="doctor_id"value="<?php echo $row2->doctor_id; ?>">
										</div>
									</div>
								</div>
							</li>
						     <li>
								<div class = "item-content">
									<div class = "item-inner">
										<div class = "item-title label">05:00-05:30 pm</div>
										<div class = "item-input">
			<input type = "text" name = "05:00_05:50" value="<?php echo $row2->slot17?>" placeholder = " - " required>
							<input type="hidden" name="doctor_id"value="<?php echo $row2->doctor_id; ?>">
										</div>
									</div>
								</div>
							</li>
						     <li>
								<div class = "item-content">
									<div class = "item-inner">
										<div class = "item-title label">05:30-06:00 pm</div>
										<div class = "item-input">
			<input type = "text" name = "05:30_06:00" value="<?php echo $row2->slot18?>" placeholder = " - " required>
							<input type="hidden" name="doctor_id"value="<?php echo $row2->doctor_id; ?>">
										</div>
									</div>
								</div>
							</li>
						     <li>
								<div class = "item-content">
									<div class = "item-inner">
										<div class = "item-title label">06:00-06:30 pm</div>
										<div class = "item-input">
							<input type = "text" name = "06:00_06:30" value="<?php echo $row2->slot19?>" placeholder = " - " required>
							<input type="hidden" name="doctor_id"value="<?php echo $row->doctor_id; ?>">
										</div>
									</div>
								</div>
							</li>
						     <li>
								<div class = "item-content">
									<div class = "item-inner">
										<div class = "item-title label">06:30-07:00 pm</div>
										<div class = "item-input">
							<input type = "text" name = "06:30_07:00" value="<?php echo $row2->slot20?>" placeholder = " - " required>
							<input type="hidden" name="doctor_id"value="<?php echo $row2->doctor_id; ?>">
										</div>
									</div>
								</div>
							</li>
						     <li>
								<div class = "item-content">
									<div class = "item-inner">
										<div class = "item-title label">07:00-07:30 pm</div>
										<div class = "item-input">
							<input type = "text" name = "07:00_07:30" value="<?php echo $row2->slot21?>" placeholder = " - " required>
							<input type="hidden" name="doctor_id"value="<?php echo $row2->doctor_id; ?>">
										</div>
									</div>
								</div>
							</li>
						     <li>
								<div class = "item-content">
									<div class = "item-inner">
										<div class = "item-title label">07:30-08:00 pm</div>
										<div class = "item-input">
							<input type = "text" name = "07:30_08:00" value="<?php echo $row2->slot22?>" placeholder = " - " required>
							<input type="hidden" name="doctor_id"value="<?php echo $row2->doctor_id; ?>">
										</div>
									</div>
								</div>
							</li>
							
						     <li>
								<div class = "item-content">
									<div class = "item-inner">
										<div class = "item-title label">08:00-08:30 pm</div>
										<div class = "item-input">
							<input type = "text" name = "08:00_08:30" value="<?php echo $row2->slot23?>" placeholder = " - " required>
							<input type="hidden" name="doctor_id"value="<?php echo $row2->doctor_id; ?>">
										</div>
									</div>
								</div>
							</li>
						     <li>
								<div class = "item-content">
									<div class = "item-inner">
										<div class = "item-title label">08:30-09:00 pm</div>
										<div class = "item-input">
							<input type = "text" name = "08:30_09:00" value="<?php echo $row2->slot24?>" placeholder = " - " required>
							<input type="hidden" name="doctor_id"value="<?php echo $row->doctor_id; ?>">
										</div>
									</div>
								</div>
							</li>
                           
                       
                        </ul>
                        </div>
                   
                     
                    
				<!--	<input type="submit" class = "button button-fill button-round color-red form-to-json" value="Submit">
					<input type="submit" class = "button button-fill button-round color-red form-to-json" value="Sign UP"   >
				-->
				<center><Button onclick="myFunction()" class="col button button-fill color-red">Submit</button></center>
					
                </form>
</div>
<?php
$query3= $db->query("select * from doctors where doctor_id ='$id' and days ='Wednesday'");
$rowCount3 = $query3->num_rows;
$row3 = $query3->fetch_object();
?>
<div id="Wednesday" class="tabcontent">
  
  <form id = "my-form" class = "list-block" method="POST" action="server.php?doctor_id=<?php echo $id;?>">
  
   <input type='hidden' name='m' value="Wednesday"/> 
                          <div class = "list-block inset">
                        <ul>
						<li>
								<div class = "item-content">
									<div class = "item-inner">
										<div class = "item-title label">Time</div>
										<div class = "item-input">
										<div class = "item-title label">No.of Patients</div>
										</div>
									</div>
								</div>
							</li>
							<li>
					<div class = "item-content">
						<div class = "item-inner">
							<div class = "item-title label">09-09:30 Am</div>
							<div class = "item-input">
								<input type = "text" name ="09_09:30"value="<?php echo $row3->slot1?>" placeholder = " - " required>
										</div>
									</div>
								</div>
							</li>
                           
							<li>
								<div class = "item-content">
									<div class = "item-inner">
										<div class = "item-title label">09:30-10:00 Am</div>
										<div class = "item-input">
									<input type = "text" name ="09:30-10:00"value="<?php echo $row3->slot2?>" placeholder = " - " required>
										</div>
									</div>
								</div>
							</li>

							<li>
								<div class = "item-content">
									<div class = "item-inner">
										<div class = "item-title label">10:00-10:30 Am</div>
										<div class = "item-input">
									<input type = "text" name ="10:00_10:30"value="<?php echo $row3->slot3?>" placeholder = " - " required>
										</div>
									</div>
								</div>
							</li>
							
							
							<li>
								<div class = "item-content">
									<div class = "item-inner">
										<div class = "item-title label">10:30-11:00 Am</div>
										<div class = "item-input">
			<input type = "text" name ="10:30_11:00"value="<?php echo $row3->slot4?>" placeholder = " - " required>
										</div>
									</div>
								</div>
							</li>
						   
							<li>
								<div class = "item-content">
									<div class = "item-inner">
										<div class = "item-title label">11:00-11:30 Am</div>
										<div class = "item-input">
			<input type = "text" name = "11:00_11:30"value="<?php echo $row3->slot5?>" placeholder = " - " required>
										</div>
									</div>
								</div>
							</li>
						   
							<li>
								<div class = "item-content">
									<div class = "item-inner">
										<div class = "item-title label">11:30-12:00 Am</div>
										<div class = "item-input">
								<input type = "text" name = "11:30_12:00"value="<?php echo $row3->slot6?>" placeholder = " - " required>
										</div>
									</div>
								</div>
							</li>
							<li>
								<div class = "item-content">
									<div class = "item-inner">
										<div class = "item-title label">12:00-12:30 Am</div>
										<div class = "item-input">
					<input type = "text" name = "12:00_12:30"value="<?php echo $row3->slot7?>" placeholder = " - " required>
										</div>
									</div>
								</div>
							</li>
						   <li>
								<div class = "item-content">
									<div class = "item-inner">
										<div class = "item-title label">12:30-01:00 pm</div>
										<div class = "item-input">
		<input type = "text" name = "12:30_01:00"value="<?php echo $row3->slot8?>" placeholder = " - " required>
										</div>
									</div>
								</div>
							</li>
							<li>
								<div class = "item-content">
									<div class = "item-inner">
										<div class = "item-title label">01:00-01:30 pm</div>
										<div class = "item-input">
	<input type = "text" name = "01:00_01:30" value="<?php echo $row3->slot9?>" placeholder = " - " required>
							<input type="hidden" name="doctor_id"value="<?php echo $row->doctor_id; ?>">
										</div>
									</div>
								</div>
							</li>
							<li>
								<div class = "item-content">
									<div class = "item-inner">
										<div class = "item-title label">01:30-02:00 pm</div>
										<div class = "item-input">
		<input type = "text" name = "01:30_02:00" value="<?php echo $row3->slot10?>" placeholder = " - " required>
							<input type="hidden" name="doctor_id"value="<?php echo $row->doctor_id; ?>">
										</div>
									</div>
								</div>
							</li>
							<li>
								<div class = "item-content">
									<div class = "item-inner">
										<div class = "item-title label">02:00-02:30 pm</div>
										<div class = "item-input">
	<input type = "text" name = "02:00_02:30" value="<?php echo $row3->slot11?>" placeholder = " - " required>
							<input type="hidden" name="doctor_id"value="<?php echo $row->doctor_id; ?>">
										</div>
									</div>
								</div>
							</li>
							<li>
								<div class = "item-content">
									<div class = "item-inner">
										<div class = "item-title label">02:30-03:00 pm</div>
										<div class = "item-input">
		<input type = "text" name = "02:30_03:00" value="<?php echo $row3->slot12?>" placeholder = " - " required>
							<input type="hidden" name="doctor_id"value="<?php echo $row->doctor_id; ?>">
										</div>
									</div>
								</div>
							</li>
							<li>
								<div class = "item-content">
									<div class = "item-inner">
										<div class = "item-title label">03:00-03:30 pm</div>
										<div class = "item-input">
		<input type = "text" name = "03:00_03:30" value="<?php echo $row3->slot13?>" placeholder = " - " required>
							<input type="hidden" name="doctor_id"value="<?php echo $row->doctor_id; ?>">
										</div>
									</div>
								</div>
							</li>
						     <li>
								<div class = "item-content">
									<div class = "item-inner">
										<div class = "item-title label">03:30-04:00 pm</div>
										<div class = "item-input">
		<input type = "text" name = "03:30_04:00" value="<?php echo $row3->slot14?>" placeholder = " - " required>
							<input type="hidden" name="doctor_id"value="<?php echo $row->doctor_id; ?>">
										</div>
									</div>
								</div>
							</li>
						     <li>
								<div class = "item-content">
									<div class = "item-inner">
										<div class = "item-title label">04:00-04:30 pm</div>
										<div class = "item-input">
			<input type = "text" name = "04:00_04:30" value="<?php echo $row3->slot15?>" placeholder = " - " required>
							<input type="hidden" name="doctor_id"value="<?php echo $row->doctor_id; ?>">
										</div>
									</div>
								</div>
							</li>
							
						     <li>
								<div class = "item-content">
									<div class = "item-inner">
										<div class = "item-title label">04:30-05:00 pm</div>
										<div class = "item-input">
		<input type = "text" name = "04:30_05:00" value="<?php echo $row3->slot16?>" placeholder = " - " required>
							<input type="hidden" name="doctor_id"value="<?php echo $row->doctor_id; ?>">
										</div>
									</div>
								</div>
							</li>
						     <li>
								<div class = "item-content">
									<div class = "item-inner">
										<div class = "item-title label">05:00-05:30 pm</div>
										<div class = "item-input">
		<input type = "text" name = "05:00_05:50" value="<?php echo $row3->slot17?>" placeholder = " - " required>
							<input type="hidden" name="doctor_id"value="<?php echo $row->doctor_id; ?>">
										</div>
									</div>
								</div>
							</li>
						     <li>
								<div class = "item-content">
									<div class = "item-inner">
										<div class = "item-title label">05:30-06:00 pm</div>
										<div class = "item-input">
		<input type = "text" name = "05:30_06:00" value="<?php echo $row3->slot18?>" placeholder = " - " required>
							<input type="hidden" name="doctor_id"value="<?php echo $row->doctor_id; ?>">
										</div>
									</div>
								</div>
							</li>
						     <li>
								<div class = "item-content">
									<div class = "item-inner">
										<div class = "item-title label">06:00-06:30 pm</div>
										<div class = "item-input">
		<input type = "text" name = "06:00_06:30" value="<?php echo $row3->slot19?>" placeholder = " - " required>
							<input type="hidden" name="doctor_id"value="<?php echo $row->doctor_id; ?>">
										</div>
									</div>
								</div>
							</li>
						     <li>
								<div class = "item-content">
									<div class = "item-inner">
										<div class = "item-title label">06:30-07:00 pm</div>
										<div class = "item-input">
	<input type = "text" name = "06:30_07:00" value="<?php echo $row3->slot20?>" placeholder = " - " required>
							<input type="hidden" name="doctor_id"value="<?php echo $row->doctor_id; ?>">
										</div>
									</div>
								</div>
							</li>
						     <li>
								<div class = "item-content">
									<div class = "item-inner">
										<div class = "item-title label">07:00-07:30 pm</div>
										<div class = "item-input">
		<input type = "text" name = "07:00_07:30" value="<?php echo $row3->slot21?>" placeholder = " - " required>
							<input type="hidden" name="doctor_id"value="<?php echo $row->doctor_id; ?>">
										</div>
									</div>
								</div>
							</li>
						     <li>
								<div class = "item-content">
									<div class = "item-inner">
										<div class = "item-title label">07:30-08:00 pm</div>
										<div class = "item-input">
		<input type = "text" name = "07:30_08:00" value="<?php echo $row3->slot22?>" placeholder = " - " required>
							<input type="hidden" name="doctor_id"value="<?php echo $row->doctor_id; ?>">
										</div>
									</div>
								</div>
							</li>
							
						     <li>
								<div class = "item-content">
									<div class = "item-inner">
										<div class = "item-title label">08:00-08:30 pm</div>
										<div class = "item-input">
		<input type = "text" name = "08:00_08:30" value="<?php echo $row3->slot23?>" placeholder = " - " required>
							<input type="hidden" name="doctor_id"value="<?php echo $row->doctor_id; ?>">
										</div>
									</div>
								</div>
							</li>
						     <li>
								<div class = "item-content">
									<div class = "item-inner">
										<div class = "item-title label">08:30-09:00 pm</div>
										<div class = "item-input">
		<input type = "text" name = "08:30_09:00" value="<?php echo $row3->slot24?>" placeholder = " - " required>
							<input type="hidden" name="doctor_id"value="<?php echo $row->doctor_id; ?>">
										</div>
									</div>
								</div>
							</li>
                       
                        </ul>
                   </div>
                     
                    
				<!--	<input type="submit" class = "button button-fill button-round color-red form-to-json" value="Submit">
					<input type="submit" class = "button button-fill button-round color-red form-to-json" value="Sign UP"   >
				-->
				<center><Button class="col button button-fill color-red" onclick="myFunction()">Submit</button></center>
					
                </form>
</form>
</div>
<?php
$query4= $db->query("select * from doctors where doctor_id ='$id' and days ='Thursday'");
$rowCount4 = $query4->num_rows;
$row4 = $query4->fetch_object();
?>
<div id="Thursday" class="tabcontent">
 <form id = "my-form" class = "list-block" method="POST" action="server.php?doctor_id=<?php echo $id;?>" >
 
  <input type='hidden' name='m' value="Thursday"/> 
                         <div class = "list-block inset">
                        <ul>
						<li>
						<div class = "item-content">
							<div class = "item-inner">
										<div class = "item-title label">Time</div>
										<div class = "item-input">
										<div class = "item-title label">No.of Patients</div>
										</div>
									</div>
								</div>
							</li>
							<li>
					<div class = "item-content">
						<div class = "item-inner">
							<div class = "item-title label">09-09:30 Am</div>
							<div class = "item-input">
								<input type = "text" name ="09_09:30"value="<?php echo $row4->slot1?>" placeholder = " - " required>
										</div>
									</div>
								</div>
							</li>
                           
							<li>
								<div class = "item-content">
									<div class = "item-inner">
										<div class = "item-title label">09:30-10:00 Am</div>
										<div class = "item-input">
									<input type = "text" name ="09:30-10:00"value="<?php echo $row4->slot2?>" placeholder = " - " required>
										</div>
									</div>
								</div>
							</li>

							<li>
								<div class = "item-content">
									<div class = "item-inner">
										<div class = "item-title label">10:00-10:30 Am</div>
										<div class = "item-input">
									<input type = "text" name ="10:00_10:30"value="<?php echo $row4->slot3?>" placeholder = " - " required>
										</div>
									</div>
								</div>
							</li>
							
							
							<li>
								<div class = "item-content">
									<div class = "item-inner">
										<div class = "item-title label">10:30-11:00 Am</div>
										<div class = "item-input">
									<input type = "text" name ="10:30_11:00"value="<?php echo $row4->slot4?>" placeholder = " - " required>
										</div>
									</div>
								</div>
							</li>
						   
							<li>
								<div class = "item-content">
									<div class = "item-inner">
										<div class = "item-title label">11:00-11:30 Am</div>
										<div class = "item-input">
									<input type = "text" name = "11:00_11:30"value="<?php echo $row4->slot5?>" placeholder = " - " required>
										</div>
									</div>
								</div>
							</li>
						   
							<li>
								<div class = "item-content">
									<div class = "item-inner">
										<div class = "item-title label">11:30-12:00 Am</div>
										<div class = "item-input">
								<input type = "text" name = "11:30_12:00"value="<?php echo $row4->slot6?>" placeholder = " - " required>
										</div>
									</div>
								</div>
							</li>
							<li>
								<div class = "item-content">
									<div class = "item-inner">
										<div class = "item-title label">12:00-12:30 Am</div>
										<div class = "item-input">
									<input type = "text" name = "12:00_12:30"value="<?php echo $row4->slot7?>"" placeholder = " - " required>
										</div>
									</div>
								</div>
							</li>
						   <li>
								<div class = "item-content">
									<div class = "item-inner">
										<div class = "item-title label">12:30-01:00 pm</div>
										<div class = "item-input">
				<input type = "text" name = "12:30_01:00"value="<?php echo $row4->slot8?>" placeholder = " - " required>
										</div>
									</div>
								</div>
							</li>
							<li>
								<div class = "item-content">
									<div class = "item-inner">
										<div class = "item-title label">01:00-01:30 pm</div>
										<div class = "item-input">
				<input type = "text" name = "01:00_01:30" value="<?php echo $row4->slot9?>" placeholder = " - " required>
							<input type="hidden" name="doctor_id"value="<?php echo $row->doctor_id; ?>">
										</div>
									</div>
								</div>
							</li>
							<li>
								<div class = "item-content">
									<div class = "item-inner">
										<div class = "item-title label">01:30-02:00 pm</div>
										<div class = "item-input">
							<input type = "text" name = "01:30_02:00" value="<?php echo $row4->slot10?>" placeholder = " - " required>
							<input type="hidden" name="doctor_id"value="<?php echo $row->doctor_id; ?>">
										</div>
									</div>
								</div>
							</li>
							<li>
								<div class = "item-content">
									<div class = "item-inner">
										<div class = "item-title label">02:00-02:30 pm</div>
										<div class = "item-input">
							<input type = "text" name = "02:00_02:30" value="<?php echo $row4->slot11?>" placeholder = " - " required>
							<input type="hidden" name="doctor_id"value="<?php echo $row->doctor_id; ?>">
										</div>
									</div>
								</div>
							</li>
							<li>
								<div class = "item-content">
									<div class = "item-inner">
										<div class = "item-title label">02:30-03:00 pm</div>
										<div class = "item-input">
							<input type = "text" name = "02:30_03:00" value="<?php echo $row4->slot12?>" placeholder = " - " required>
							<input type="hidden" name="doctor_id"value="<?php echo $row->doctor_id; ?>">
										</div>
									</div>
								</div>
							</li>
							<li>
								<div class = "item-content">
									<div class = "item-inner">
										<div class = "item-title label">03:00-03:30 pm</div>
										<div class = "item-input">
							<input type = "text" name = "03:00_03:30" value="<?php echo $row4->slot13?>" placeholder = " - " required>
							<input type="hidden" name="doctor_id"value="<?php echo $row->doctor_id; ?>">
										</div>
									</div>
								</div>
							</li>
						     <li>
								<div class = "item-content">
									<div class = "item-inner">
										<div class = "item-title label">03:30-04:00 pm</div>
										<div class = "item-input">
							<input type = "text" name = "03:30_04:00" value="<?php echo $row4->slot14?>" placeholder = " - " required>
							<input type="hidden" name="doctor_id"value="<?php echo $row->doctor_id; ?>">
										</div>
									</div>
								</div>
							</li>
						     <li>
								<div class = "item-content">
									<div class = "item-inner">
										<div class = "item-title label">04:00-04:30 pm</div>
										<div class = "item-input">
							<input type = "text" name = "04:00_04:30" value="<?php echo $row4->slot15?>" placeholder = " - " required>
							<input type="hidden" name="doctor_id"value="<?php echo $row->doctor_id; ?>">
										</div>
									</div>
								</div>
							</li>
							
						     <li>
								<div class = "item-content">
									<div class = "item-inner">
										<div class = "item-title label">04:30-05:00 pm</div>
										<div class = "item-input">
							<input type = "text" name = "04:30_05:00" value="<?php echo $row4->slot16?>" placeholder = " - " required>
							<input type="hidden" name="doctor_id"value="<?php echo $row->doctor_id; ?>">
										</div>
									</div>
								</div>
							</li>
						     <li>
								<div class = "item-content">
									<div class = "item-inner">
										<div class = "item-title label">05:00-05:30 pm</div>
										<div class = "item-input">
							<input type = "text" name = "05:00_05:50" value="<?php echo $row4->slot17?>" placeholder = " - " required>
							<input type="hidden" name="doctor_id"value="<?php echo $row->doctor_id; ?>">
										</div>
									</div>
								</div>
							</li>
						     <li>
								<div class = "item-content">
									<div class = "item-inner">
										<div class = "item-title label">05:30-06:00 pm</div>
										<div class = "item-input">
							<input type = "text" name = "05:30_06:00" value="<?php echo $row4->slot18?>" placeholder = " - " required>
							<input type="hidden" name="doctor_id"value="<?php echo $row->doctor_id; ?>">
										</div>
									</div>
								</div>
							</li>
						     <li>
								<div class = "item-content">
									<div class = "item-inner">
										<div class = "item-title label">06:00-06:30 pm</div>
										<div class = "item-input">
							<input type = "text" name = "06:00_06:30" value="<?php echo $row4->slot19?>" placeholder = " - " required>
							<input type="hidden" name="doctor_id"value="<?php echo $row->doctor_id; ?>">
										</div>
									</div>
								</div>
							</li>
						     <li>
								<div class = "item-content">
									<div class = "item-inner">
										<div class = "item-title label">06:30-07:00 pm</div>
										<div class = "item-input">
							<input type = "text" name = "06:30_07:00" value="<?php echo $row4->slot20?>" placeholder = " - " required>
							<input type="hidden" name="doctor_id"value="<?php echo $row->doctor_id; ?>">
										</div>
									</div>
								</div>
							</li>
						     <li>
								<div class = "item-content">
									<div class = "item-inner">
										<div class = "item-title label">07:00-07:30 pm</div>
										<div class = "item-input">
							<input type = "text" name = "07:00_07:30" value="<?php echo $row4->slot21?>" placeholder = " - " required>
							<input type="hidden" name="doctor_id"value="<?php echo $row->doctor_id; ?>">
										</div>
									</div>
								</div>
							</li>
						     <li>
								<div class = "item-content">
									<div class = "item-inner">
										<div class = "item-title label">07:30-08:00 pm</div>
										<div class = "item-input">
							<input type = "text" name = "07:30_08:00" value="<?php echo $row4->slot22?>" placeholder = " - " required>
							<input type="hidden" name="doctor_id"value="<?php echo $row->doctor_id; ?>">
										</div>
									</div>
								</div>
							</li>
							
						     <li>
								<div class = "item-content">
									<div class = "item-inner">
										<div class = "item-title label">08:00-08:30 pm</div>
										<div class = "item-input">
							<input type = "text" name = "08:00_08:30" value="<?php echo $row4->slot23?>" placeholder = " - " required>
							<input type="hidden" name="doctor_id"value="<?php echo $row->doctor_id; ?>">
										</div>
									</div>
								</div>
							</li>
						     <li>
								<div class = "item-content">
									<div class = "item-inner">
										<div class = "item-title label">08:30-09:00 pm</div>
										<div class = "item-input">
							<input type = "text" name = "08:30_09:00" value="<?php echo $row4->slot24?>" placeholder = " - " required>
							<input type="hidden" name="doctor_id"value="<?php echo $row->doctor_id; ?>">
										</div>
									</div>
								</div>
							</li>
                           
                       
                        </ul>
                        </div>
                   
                     
                    
				<!--	<input type="submit" class = "button button-fill button-round color-red form-to-json" value="Submit">
					<input type="submit" class = "button button-fill button-round color-red form-to-json" value="Sign UP"   >
				-->
				<center><Button class="col button button-fill color-red" onclick="myFunction()">Submit</button></center>
					
                </form>
</div>
 <?php
$query5= $db->query("select * from doctors where doctor_id ='$id' and days ='Friday'");
$rowCount5 = $query5->num_rows;
$row5 = $query5->fetch_object();
?>
<div id="Friday" class="tabcontent">
<form id = "my-form" class = "list-block" method="POST" action="server.php?doctor_id=<?php echo $id;?>" >
 <input type='hidden' name='m' value="Friday"/> 
                        <div class = "list-block inset">
                        <ul>
						<li>
								<div class = "item-content">
									<div class = "item-inner">
										<div class = "item-title label">Time</div>
										<div class = "item-input">
										<div class = "item-title label">No.of Patients</div>
										</div>
									</div>
								</div>
							</li>
							
                           
							<li>
					<div class = "item-content">
						<div class = "item-inner">
							<div class = "item-title label">09-09:30 Am</div>
							<div class = "item-input">
								<input type = "text" name ="09_09:30"value="<?php echo $row5->slot1?>" placeholder = " - " required>
										</div>
									</div>
								</div>
							</li>
                           
							<li>
								<div class = "item-content">
									<div class = "item-inner">
										<div class = "item-title label">09:30-10:00 Am</div>
										<div class = "item-input">
									<input type = "text" name ="09:30-10:00"value="<?php echo $row5->slot2?>" placeholder = " - " required>
										</div>
									</div>
								</div>
							</li>

							<li>
								<div class = "item-content">
									<div class = "item-inner">
										<div class = "item-title label">10:00-10:30 Am</div>
										<div class = "item-input">
									<input type = "text" name ="10:00_10:30"value="<?php echo $row5->slot3?>" placeholder = " - " required>
										</div>
									</div>
								</div>
							</li>
							
							
							<li>
								<div class = "item-content">
									<div class = "item-inner">
										<div class = "item-title label">10:30-11:00 Am</div>
										<div class = "item-input">
									<input type = "text" name ="10:30_11:00"value="<?php echo $row5->slot4?>" placeholder = " - " required>
										</div>
									</div>
								</div>
							</li>
						   
							<li>
								<div class = "item-content">
									<div class = "item-inner">
										<div class = "item-title label">11:00-11:30 Am</div>
										<div class = "item-input">
									<input type = "text" name = "11:00_11:30"value="<?php echo $row5->slot5?>" placeholder = " - " required>
										</div>
									</div>
								</div>
							</li>
						   
							<li>
								<div class = "item-content">
									<div class = "item-inner">
										<div class = "item-title label">11:30-12:00 Am</div>
										<div class = "item-input">
								<input type = "text" name = "11:30_12:00"value="<?php echo $row5->slot6?>"placeholder = " - " required>
										</div>
									</div>
								</div>
							</li>
							<li>
								<div class = "item-content">
									<div class = "item-inner">
										<div class = "item-title label">12:00-12:30 Am</div>
										<div class = "item-input">
									<input type = "text" name = "12:00_12:30"value="<?php echo $row5->slot7?>" placeholder = " - " required>
										</div>
									</div>
								</div>
							</li>
						   <li>
								<div class = "item-content">
									<div class = "item-inner">
										<div class = "item-title label">12:30-01:00 pm</div>
										<div class = "item-input">
								<input type = "text" name = "12:30_01:00"value="<?php echo $row5->slot8?>" placeholder = " - " required>
										</div>
									</div>
								</div>
							</li>
							<li>
								<div class = "item-content">
									<div class = "item-inner">
										<div class = "item-title label">01:00-01:30 pm</div>
										<div class = "item-input">
							<input type = "text" name = "01:00_01:30" value="<?php echo $row5->slot9?>" placeholder = " - " required>
							<input type="hidden" name="doctor_id"value="<?php echo $row->doctor_id; ?>">
										</div>
									</div>
								</div>
							</li>
							<li>
								<div class = "item-content">
									<div class = "item-inner">
										<div class = "item-title label">01:30-02:00 pm</div>
										<div class = "item-input">
							<input type = "text" name = "01:30_02:00"value="<?php echo $row5->slot10?>" placeholder = " - " required>
							<input type="hidden" name="doctor_id"value="<?php echo $row->doctor_id; ?>">
										</div>
									</div>
								</div>
							</li>
							<li>
								<div class = "item-content">
									<div class = "item-inner">
										<div class = "item-title label">02:00-02:30 pm</div>
										<div class = "item-input">
							<input type = "text" name = "02:00_02:30" value="<?php echo $row5->slot11?>" placeholder = " - " required>
							<input type="hidden" name="doctor_id"value="<?php echo $row->doctor_id; ?>">
										</div>
									</div>
								</div>
							</li>
							<li>
								<div class = "item-content">
									<div class = "item-inner">
										<div class = "item-title label">02:30-03:00 pm</div>
										<div class = "item-input">
							<input type = "text" name = "02:30_03:00" value="<?php echo $row5->slot12?>" placeholder = " - " required>
							<input type="hidden" name="doctor_id"value="<?php echo $row->doctor_id; ?>">
										</div>
									</div>
								</div>
							</li>
							<li>
								<div class = "item-content">
									<div class = "item-inner">
										<div class = "item-title label">03:00-03:30 pm</div>
										<div class = "item-input">
							<input type = "text" name = "03:00_03:30" value="<?php echo $row5->slot13?>" placeholder = " - " required>
							<input type="hidden" name="doctor_id"value="<?php echo $row->doctor_id; ?>">
										</div>
									</div>
								</div>
							</li>
						     <li>
								<div class = "item-content">
									<div class = "item-inner">
										<div class = "item-title label">03:30-04:00 pm</div>
										<div class = "item-input">
							<input type = "text" name = "03:30_04:00" value="<?php echo $row5->slot14?>" placeholder = " - " required>
							<input type="hidden" name="doctor_id"value="<?php echo $row->doctor_id; ?>">
										</div>
									</div>
								</div>
							</li>
						     <li>
								<div class = "item-content">
									<div class = "item-inner">
										<div class = "item-title label">04:00-04:30 pm</div>
										<div class = "item-input">
							<input type = "text" name = "04:00_04:30" value="<?php echo $row5->slot15?>" placeholder = " - " required>
							<input type="hidden" name="doctor_id"value="<?php echo $row->doctor_id; ?>">
										</div>
									</div>
								</div>
							</li>
							
						     <li>
								<div class = "item-content">
									<div class = "item-inner">
										<div class = "item-title label">04:30-05:00 pm</div>
										<div class = "item-input">
							<input type = "text" name = "04:30_05:00" value="<?php echo $row5->slot16?>" placeholder = " - " required>
							<input type="hidden" name="doctor_id"value="<?php echo $row->doctor_id; ?>">
										</div>
									</div>
								</div>
							</li>
						     <li>
								<div class = "item-content">
									<div class = "item-inner">
										<div class = "item-title label">05:00-05:30 pm</div>
										<div class = "item-input">
							<input type = "text" name = "05:00_05:50" value="<?php echo $row5->slot17?>" placeholder = " - " required>
							<input type="hidden" name="doctor_id"value="<?php echo $row->doctor_id; ?>">
										</div>
									</div>
								</div>
							</li>
						     <li>
								<div class = "item-content">
									<div class = "item-inner">
										<div class = "item-title label">05:30-06:00 pm</div>
										<div class = "item-input">
							<input type = "text" name = "05:30_06:00" value="<?php echo $row5->slot18?>" placeholder = " - " required>
							<input type="hidden" name="doctor_id"value="<?php echo $row->doctor_id; ?>">
										</div>
									</div>
								</div>
							</li>
						     <li>
								<div class = "item-content">
									<div class = "item-inner">
										<div class = "item-title label">06:00-06:30 pm</div>
										<div class = "item-input">
							<input type = "text" name = "06:00_06:30" value="<?php echo $row5->slot19?>" placeholder = " - " required>
							<input type="hidden" name="doctor_id"value="<?php echo $row->doctor_id; ?>">
										</div>
									</div>
								</div>
							</li>
						     <li>
								<div class = "item-content">
									<div class = "item-inner">
										<div class = "item-title label">06:30-07:00 pm</div>
										<div class = "item-input">
							<input type = "text" name = "06:30_07:00" value="<?php echo $row5->slot20?>" placeholder = " - " required>
							<input type="hidden" name="doctor_id"value="<?php echo $row->doctor_id; ?>">
										</div>
									</div>
								</div>
							</li>
						     <li>
								<div class = "item-content">
									<div class = "item-inner">
										<div class = "item-title label">07:00-07:30 pm</div>
										<div class = "item-input">
							<input type = "text" name = "07:00_07:30" value="<?php echo $row5->slot21?>"placeholder = " - " required>
							<input type="hidden" name="doctor_id"value="<?php echo $row->doctor_id; ?>">
										</div>
									</div>
								</div>
							</li>
						     <li>
								<div class = "item-content">
									<div class = "item-inner">
										<div class = "item-title label">07:30-08:00 pm</div>
										<div class = "item-input">
							<input type = "text" name = "07:30_08:00" value="<?php echo $row5->slot22?>" placeholder = " - " required>
							<input type="hidden" name="doctor_id"value="<?php echo $row->doctor_id; ?>">
										</div>
									</div>
								</div>
							</li>
							
						     <li>
								<div class = "item-content">
									<div class = "item-inner">
										<div class = "item-title label">08:00-08:30 pm</div>
										<div class = "item-input">
							<input type = "text" name = "08:00_08:30" value="<?php echo $row5->slot23?>" placeholder = " - " required>
							<input type="hidden" name="doctor_id"value="<?php echo $row->doctor_id; ?>">
										</div>
									</div>
								</div>
							</li>
						     <li>
								<div class = "item-content">
									<div class = "item-inner">
										<div class = "item-title label">08:30-09:00 pm</div>
										<div class = "item-input">
							<input type = "text" name = "08:30_09:00" value="<?php echo $row5->slot24?>" placeholder = " - " required>
							<input type="hidden" name="doctor_id"value="<?php echo $row->doctor_id; ?>">
										</div>
									</div>
								</div>
							</li>
                           
                       
                        </ul>
                   </div>
                     
                    
				<!--	<input type="submit" class = "button button-fill button-round color-red form-to-json" value="Submit">
					<input type="submit" class = "button button-fill button-round color-red form-to-json" value="Sign UP"   >
				-->
				<center><Button class="col button button-fill color-red" onclick="myFunction()">Submit</button></center>
					
                </form>
</div>
 <?php
$query6= $db->query("select * from doctors where doctor_id ='$id' and days ='Saturday'");
$rowCount6 = $query6->num_rows;
$row6 = $query6->fetch_object();
?>
<div id="Saturday" class="tabcontent">
 <form id = "my-form" class = "list-block" method="POST" action="server.php?doctor_id=<?php echo $id;?>" >
 
  <input type='hidden' name='m' value="Saturday"/> 
                         <div class = "list-block inset">
                        <ul>
						<li>
								<div class = "item-content">
									<div class = "item-inner">
										<div class = "item-title label">Time</div>
										<div class = "item-input">
										<div class = "item-title label">No.of Patients</div>
										</div>
									</div>
								</div>
							</li>
							<li>
					<div class = "item-content">
						<div class = "item-inner">
							<div class = "item-title label">09-09:30 Am</div>
							<div class = "item-input">
								<input type = "text" name ="09_09:30"value="<?php echo $row6->slot1?>" placeholder = " - " required>
										</div>
									</div>
								</div>
							</li>
                           
							<li>
								<div class = "item-content">
									<div class = "item-inner">
										<div class = "item-title label">09:30-10:00 Am</div>
										<div class = "item-input">
									<input type = "text" name ="09:30-10:00"value="<?php echo $row6->slot2?>" placeholder = " - " required>
										</div>
									</div>
								</div>
							</li>

							<li>
								<div class = "item-content">
									<div class = "item-inner">
										<div class = "item-title label">10:00-10:30 Am</div>
										<div class = "item-input">
									<input type = "text" name ="10:00_10:30"value="<?php echo $row6->slot3?>" placeholder = " - " required>
										</div>
									</div>
								</div>
							</li>
							
							
							<li>
								<div class = "item-content">
									<div class = "item-inner">
										<div class = "item-title label">10:30-11:00 Am</div>
										<div class = "item-input">
									<input type = "text" name ="10:30_11:00"value="<?php echo $row6->slot4?>" placeholder = " - " required>
										</div>
									</div>
								</div>
							</li>
						   
							<li>
								<div class = "item-content">
									<div class = "item-inner">
										<div class = "item-title label">11:00-11:30 Am</div>
										<div class = "item-input">
									<input type = "text" name = "11:00_11:30"value="<?php echo $row6->slot5?>" placeholder = " - " required>
										</div>
									</div>
								</div>
							</li>
						   
							<li>
								<div class = "item-content">
									<div class = "item-inner">
										<div class = "item-title label">11:30-12:00 Am</div>
										<div class = "item-input">
								<input type = "text" name = "11:30_12:00"value="<?php echo $row6->slot6?>" placeholder = " - " required>
										</div>
									</div>
								</div>
							</li>
							<li>
								<div class = "item-content">
									<div class = "item-inner">
										<div class = "item-title label">12:00-12:30 Am</div>
										<div class = "item-input">
									<input type = "text" name = "12:00_12:30"value="<?php echo $row6->slot7?>" placeholder = " - " required>
										</div>
									</div>
								</div>
							</li>
						   <li>
								<div class = "item-content">
									<div class = "item-inner">
										<div class = "item-title label">12:30-01:00 pm</div>
										<div class = "item-input">
								<input type = "text" name = "12:30_01:00"value="<?php echo $row6->slot8?>" placeholder = " - " required>
										</div>
									</div>
								</div>
							</li>
							<li>
								<div class = "item-content">
									<div class = "item-inner">
										<div class = "item-title label">01:00-01:30 pm</div>
										<div class = "item-input">
							<input type = "text" name = "01:00_01:30" value="<?php echo $row6->slot9?>" placeholder = " - " required>
							<input type="hidden" name="doctor_id"value="<?php echo $row->doctor_id; ?>">
										</div>
									</div>
								</div>
							</li>
							<li>
								<div class = "item-content">
									<div class = "item-inner">
										<div class = "item-title label">01:30-02:00 pm</div>
										<div class = "item-input">
							<input type = "text" name = "01:30_02:00" value="<?php echo $row6->slot10?>" placeholder = " - " required>
							<input type="hidden" name="doctor_id"value="<?php echo $row->doctor_id; ?>">
										</div>
									</div>
								</div>
							</li>
							<li>
								<div class = "item-content">
									<div class = "item-inner">
										<div class = "item-title label">02:00-02:30 pm</div>
										<div class = "item-input">
							<input type = "text" name = "02:00_02:30" value="<?php echo $row6->slot11?>" placeholder = " - " required>
							<input type="hidden" name="doctor_id"value="<?php echo $row->doctor_id; ?>">
										</div>
									</div>
								</div>
							</li>
							<li>
								<div class = "item-content">
									<div class = "item-inner">
										<div class = "item-title label">02:30-03:00 pm</div>
										<div class = "item-input">
							<input type = "text" name = "02:30_03:00" value="<?php echo $row6->slot12?>" placeholder = " - " required>
							<input type="hidden" name="doctor_id"value="<?php echo $row->doctor_id; ?>">
										</div>
									</div>
								</div>
							</li>
							<li>
								<div class = "item-content">
									<div class = "item-inner">
										<div class = "item-title label">03:00-03:30 pm</div>
										<div class = "item-input">
							<input type = "text" name = "03:00_03:30" value="<?php echo $row6->slot13?>" placeholder = " - " required>
							<input type="hidden" name="doctor_id"value="<?php echo $row->doctor_id; ?>">
										</div>
									</div>
								</div>
							</li>
						     <li>
								<div class = "item-content">
									<div class = "item-inner">
										<div class = "item-title label">03:30-04:00 pm</div>
										<div class = "item-input">
							<input type = "text" name = "03:30_04:00" value="<?php echo $row6->slot14?>" placeholder = " - " required>
							<input type="hidden" name="doctor_id"value="<?php echo $row->doctor_id; ?>">
										</div>
									</div>
								</div>
							</li>
						     <li>
								<div class = "item-content">
									<div class = "item-inner">
										<div class = "item-title label">04:00-04:30 pm</div>
										<div class = "item-input">
							<input type = "text" name = "04:00_04:30" value="<?php echo $row6->slot15?>" placeholder = " - " required>
							<input type="hidden" name="doctor_id"value="<?php echo $row->doctor_id; ?>">
										</div>
									</div>
								</div>
							</li>
							
						     <li>
								<div class = "item-content">
									<div class = "item-inner">
										<div class = "item-title label">04:30-05:00 pm</div>
										<div class = "item-input">
							<input type = "text" name = "04:30_05:00" value="<?php echo $row6->slot16?>" placeholder = " - " required>
							<input type="hidden" name="doctor_id"value="<?php echo $row->doctor_id; ?>">
										</div>
									</div>
								</div>
							</li>
						     <li>
								<div class = "item-content">
									<div class = "item-inner">
										<div class = "item-title label">05:00-05:30 pm</div>
										<div class = "item-input">
							<input type = "text" name = "05:00_05:50" value="<?php echo $row6->slot17?>" placeholder = " - " required>
							<input type="hidden" name="doctor_id"value="<?php echo $row->doctor_id; ?>">
										</div>
									</div>
								</div>
							</li>
						     <li>
								<div class = "item-content">
									<div class = "item-inner">
										<div class = "item-title label">05:30-06:00 pm</div>
										<div class = "item-input">
							<input type = "text" name = "05:30_06:00" value="<?php echo $row6->slot18?>" placeholder = " - " required>
							<input type="hidden" name="doctor_id"value="<?php echo $row->doctor_id; ?>">
										</div>
									</div>
								</div>
							</li>
						     <li>
								<div class = "item-content">
									<div class = "item-inner">
										<div class = "item-title label">06:00-06:30 pm</div>
										<div class = "item-input">
							<input type = "text" name = "06:00_06:30" value="<?php echo $row6->slot19?>" placeholder = " - " required>
							<input type="hidden" name="doctor_id"value="<?php echo $row->doctor_id; ?>">
										</div>
									</div>
								</div>
							</li>
						     <li>
								<div class = "item-content">
									<div class = "item-inner">
										<div class = "item-title label">06:30-07:00 pm</div>
										<div class = "item-input">
							<input type = "text" name = "06:30_07:00" value="<?php echo $row6->slot20?>" placeholder = " - " required>
							<input type="hidden" name="doctor_id"value="<?php echo $row->doctor_id; ?>">
										</div>
									</div>
								</div>
							</li>
						     <li>
								<div class = "item-content">
									<div class = "item-inner">
										<div class = "item-title label">07:00-07:30 pm</div>
										<div class = "item-input">
							<input type = "text" name = "07:00_07:30" value="<?php echo $row6->slot21?>" placeholder = " - " required>
							<input type="hidden" name="doctor_id"value="<?php echo $row->doctor_id; ?>">
										</div>
									</div>
								</div>
							</li>
						     <li>
								<div class = "item-content">
									<div class = "item-inner">
										<div class = "item-title label">07:30-08:00 pm</div>
										<div class = "item-input">
							<input type = "text" name = "07:30_08:00" value="<?php echo $row6->slot22?>" placeholder = " - " required>
							<input type="hidden" name="doctor_id"value="<?php echo $row->doctor_id; ?>">
										</div>
									</div>
								</div>
							</li>
							
						     <li>
								<div class = "item-content">
									<div class = "item-inner">
										<div class = "item-title label">08:00-08:30 pm</div>
										<div class = "item-input">
							<input type = "text" name = "08:00_08:30" value="<?php echo $row6->slot23?>" placeholder = " - " required>
							<input type="hidden" name="doctor_id"value="<?php echo $row->doctor_id; ?>">
										</div>
									</div>
								</div>
							</li>
						     <li>
								<div class = "item-content">
									<div class = "item-inner">
										<div class = "item-title label">08:30-09:00 pm</div>
										<div class = "item-input">
							<input type = "text" name = "08:30_09:00" value="<?php echo $row6->slot24?>" placeholder = " - " required>
							<input type="hidden" name="doctor_id"value="<?php echo $row->doctor_id; ?>">
										</div>
									</div>
								</div>
							</li>
                           
                       
                        </ul>
                        </div>
                   
                     
                    
				<!--	<input type="submit" class = "button button-fill button-round color-red form-to-json" value="Submit">
					<input type="submit" class = "button button-fill button-round color-red form-to-json" value="Sign UP"   >
				-->
				<center><Button class="col button button-fill color-red" onclick="myFunction()">Submit</button></center>
					
                </form>
</div>
<div id="Sunday" class="tabcontent">
 <?php
$query7= $db->query("select * from doctors where doctor_id ='$id' and days ='Sunday'");
$rowCount7 = $query7->num_rows;
$row7 = $query7->fetch_object();
?>
 <form id = "my-form" class = "list-block" method="POST" action="server.php?doctor_id=<?php echo $id;?>" >
  
  <input type='hidden' name='m' value="Sunday"/> 
                         <div class = "list-block inset">
                        <ul>
						<li>
								<div class = "item-content">
									<div class = "item-inner">
										<div class = "item-title label">Time</div>
										<div class = "item-input">
										<div class = "item-title label">No.of Patients</div>
										</div>
									</div>
								</div>
							</li>
							<li>
					<div class = "item-content">
						<div class = "item-inner">
							<div class = "item-title label">09-09:30 Am</div>
							<div class = "item-input">
								<input type = "text" name ="09_09:30"value="<?php echo $row7->slot1?>" placeholder = " - " required>
										</div>
									</div>
								</div>
							</li>
                           
							<li>
								<div class = "item-content">
									<div class = "item-inner">
										<div class = "item-title label">09:30-10:00 Am</div>
										<div class = "item-input">
									<input type = "text" name ="09:30-10:00"value="<?php echo $row7->slot2?>" placeholder = " - " required>
										</div>
									</div>
								</div>
							</li>

							<li>
								<div class = "item-content">
									<div class = "item-inner">
										<div class = "item-title label">10:00-10:30 Am</div>
										<div class = "item-input">
									<input type = "text" name ="10:00_10:30"value="<?php echo $row7->slot3?>" placeholder = " - " required>
										</div>
									</div>
								</div>
							</li>
							
							
							<li>
								<div class = "item-content">
									<div class = "item-inner">
										<div class = "item-title label">10:30-11:00 Am</div>
										<div class = "item-input">
									<input type = "text" name ="10:30_11:00"value="<?php echo $row7->slot4?>" placeholder = " - " required>
										</div>
									</div>
								</div>
							</li>
						   
							<li>
								<div class = "item-content">
									<div class = "item-inner">
										<div class = "item-title label">11:00-11:30 Am</div>
										<div class = "item-input">
									<input type = "text" name = "11:00_11:30"value="<?php echo $row7->slot5?>" placeholder = " - " required>
										</div>
									</div>
								</div>
							</li>
						   
							<li>
								<div class = "item-content">
									<div class = "item-inner">
										<div class = "item-title label">11:30-12:00 Am</div>
										<div class = "item-input">
								<input type = "text" name = "11:30_12:00"value="<?php echo $row7->slot6?>" placeholder = " - " required>
										</div>
									</div>
								</div>
							</li>
							<li>
								<div class = "item-content">
									<div class = "item-inner">
										<div class = "item-title label">12:00-12:30 Am</div>
										<div class = "item-input">
									<input type = "text" name = "12:00_12:30"value="<?php echo $row7->slot7?>" placeholder = " - " required>
										</div>
									</div>
								</div>
							</li>
						   <li>
								<div class = "item-content">
									<div class = "item-inner">
										<div class = "item-title label">12:30-01:00 pm</div>
										<div class = "item-input">
								<input type = "text" name = "12:30_01:00"value="<?php echo $row7->slot8?>" placeholder = " - " required>
										</div>
									</div>
								</div>
							</li>
							<li>
								<div class = "item-content">
									<div class = "item-inner">
										<div class = "item-title label">01:00-01:30 pm</div>
										<div class = "item-input">
							<input type = "text" name = "01:00_01:30" value="<?php echo $row7->slot9?>" placeholder = " - " required>
							<input type="hidden" name="doctor_id"value="<?php echo $row->doctor_id; ?>">
										</div>
									</div>
								</div>
							</li>
							<li>
								<div class = "item-content">
									<div class = "item-inner">
										<div class = "item-title label">01:30-02:00 pm</div>
										<div class = "item-input">
							<input type = "text" name = "01:30_02:00" value="<?php echo $row7->slot10?>" placeholder = " - " required>
							<input type="hidden" name="doctor_id"value="<?php echo $row->doctor_id; ?>">
										</div>
									</div>
								</div>
							</li>
							<li>
								<div class = "item-content">
									<div class = "item-inner">
										<div class = "item-title label">02:00-02:30 pm</div>
										<div class = "item-input">
							<input type = "text" name = "02:00_02:30" value="<?php echo $row7->slot11?>" placeholder = " - " required>
							<input type="hidden" name="doctor_id"value="<?php echo $row->doctor_id; ?>">
										</div>
									</div>
								</div>
							</li>
							<li>
								<div class = "item-content">
									<div class = "item-inner">
										<div class = "item-title label">02:30-03:00 pm</div>
										<div class = "item-input">
							<input type = "text" name = "02:30_03:00" value="<?php echo $row7->slot12?>" placeholder = " - " required>
							<input type="hidden" name="doctor_id"value="<?php echo $row->doctor_id; ?>">
										</div>
									</div>
								</div>
							</li>
							<li>
								<div class = "item-content">
									<div class = "item-inner">
										<div class = "item-title label">03:00-03:30 pm</div>
										<div class = "item-input">
							<input type = "text" name = "03:00_03:30" value="<?php echo $row7->slot13?>" placeholder = " - " required>
							<input type="hidden" name="doctor_id"value="<?php echo $row->doctor_id; ?>">
										</div>
									</div>
								</div>
							</li>
						     <li>
								<div class = "item-content">
									<div class = "item-inner">
										<div class = "item-title label">03:30-04:00 pm</div>
										<div class = "item-input">
							<input type = "text" name = "03:30_04:00" value="<?php echo $row7->slot14?>" placeholder = " - " required>
							<input type="hidden" name="doctor_id"value="<?php echo $row->doctor_id; ?>">
										</div>
									</div>
								</div>
							</li>
						     <li>
								<div class = "item-content">
									<div class = "item-inner">
										<div class = "item-title label">04:00-04:30 pm</div>
										<div class = "item-input">
							<input type = "text" name = "04:00_04:30" value="<?php echo $row7->slot15?>" placeholder = " - " required>
							<input type="hidden" name="doctor_id"value="<?php echo $row->doctor_id; ?>">
										</div>
									</div>
								</div>
							</li>
							
						     <li>
								<div class = "item-content">
									<div class = "item-inner">
										<div class = "item-title label">04:30-05:00 pm</div>
										<div class = "item-input">
							<input type = "text" name = "04:30_05:00" value="<?php echo $row7->slot16?>" placeholder = " - " required>
							<input type="hidden" name="doctor_id"value="<?php echo $row->doctor_id; ?>">
										</div>
									</div>
								</div>
							</li>
						     <li>
								<div class = "item-content">
									<div class = "item-inner">
										<div class = "item-title label">05:00-05:30 pm</div>
										<div class = "item-input">
							<input type = "text" name = "05:00_05:50" value="<?php echo $row7->slot17?>" placeholder = " - " required>
							<input type="hidden" name="doctor_id"value="<?php echo $row->doctor_id; ?>">
										</div>
									</div>
								</div>
							</li>
						     <li>
								<div class = "item-content">
									<div class = "item-inner">
										<div class = "item-title label">05:30-06:00 pm</div>
										<div class = "item-input">
							<input type = "text" name = "05:30_06:00" value="<?php echo $row7->slot18?>" placeholder = " - " required>
							<input type="hidden" name="doctor_id"value="<?php echo $row->doctor_id; ?>">
										</div>
									</div>
								</div>
							</li>
						     <li>
								<div class = "item-content">
									<div class = "item-inner">
										<div class = "item-title label">06:00-06:30 pm</div>
										<div class = "item-input">
							<input type = "text" name = "06:00_06:30" value="<?php echo $row7->slot19?>" placeholder = " - " required>
							<input type="hidden" name="doctor_id"value="<?php echo $row->doctor_id; ?>">
										</div>
									</div>
								</div>
							</li>
						     <li>
								<div class = "item-content">
									<div class = "item-inner">
										<div class = "item-title label">06:30-07:00 pm</div>
										<div class = "item-input">
							<input type = "text" name = "06:30_07:00" value="<?php echo $row7->slot20?>" placeholder = " - " required>
							<input type="hidden" name="doctor_id"value="<?php echo $row->doctor_id; ?>">
										</div>
									</div>
								</div>
							</li>
						     <li>
								<div class = "item-content">
									<div class = "item-inner">
										<div class = "item-title label">07:00-07:30 pm</div>
										<div class = "item-input">
							<input type = "text" name = "07:00_07:30" value="<?php echo $row7->slot21?>" placeholder = " - " required>
							<input type="hidden" name="doctor_id"value="<?php echo $row->doctor_id; ?>">
										</div>
									</div>
								</div>
							</li>
						     <li>
								<div class = "item-content">
									<div class = "item-inner">
										<div class = "item-title label">07:30-08:00 pm</div>
										<div class = "item-input">
							<input type = "text" name = "07:30_08:00" value="<?php echo $row7->slot22?>" placeholder = " - " required>
							<input type="hidden" name="doctor_id"value="<?php echo $row->doctor_id; ?>">
										</div>
									</div>
								</div>
							</li>
							
						     <li>
								<div class = "item-content">
									<div class = "item-inner">
										<div class = "item-title label">08:00-08:30 pm</div>
										<div class = "item-input">
							<input type = "text" name = "08:00_08:30" value="<?php echo $row7->slot23?>" placeholder = " - " required>
							<input type="hidden" name="doctor_id"value="<?php echo $row->doctor_id; ?>">
										</div>
									</div>
								</div>
							</li>
						     <li>
								<div class = "item-content">
									<div class = "item-inner">
										<div class = "item-title label">08:30-09:00 pm</div>
										<div class = "item-input">
							<input type = "text" name = "08:30_09:00" value="<?php echo $row7->slot24?>" placeholder = " - " required>
							<input type="hidden" name="doctor_id"value="<?php echo $row->doctor_id; ?>">
										</div>
									</div>
								</div>
							</li>
                           
                       
                        </ul>
                        </div>
                   
                     
                    
				<!--	<input type="submit" class = "button button-fill button-round color-red form-to-json" value="Submit">
					<input type="submit" class = "button button-fill button-round color-red form-to-json" value="Sign UP"   >
				-->
				<center><Button class="col button button-fill color-red" onclick="myFunction()">Submit</button></center>
					
                </form>
               
</div>

<script>
function openCity(evt, cityName) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " active";
}

// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();
</script>
     
</body>
</html> 