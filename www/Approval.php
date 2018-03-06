<?php
header("Cache-Control: private, must-revalidate, max-age=0");
  header("Pragma: no-cache");
//Include the database configuration file
include 'dbConfig.php';

//Fetch all the country data
$query = $db->query("SELECT * FROM approve");

//Count total number of rows
$rowCount = $query->num_rows;
session_start();

if(! isset($_SESSION['ID']))
	{
		$_SESSION['msg']="Invalid acess";
		header("location:index.php");
	}
					
$_SESSION['EMAIL'];
 $_SESSION['NAME'];
$session_id= $_SESSION['ID'];
  $doctor_id= $_SESSION['DOCTOR_ID'];

?>
<html>

<head>
      <meta name = "viewport" content = "width = device-width, initial-scale = 1, 
         maximum-scale = 1, minimum-scale = 1, user-scalable = no, minimal-ui" />
      <meta name = "apple-mobile-web-app-capable" content = "yes" />
      <meta name = "apple-mobile-web-app-status-bar-style" content = "black" />
      <title>Enable form storage</title>
      <link rel = "stylesheet" 
         href = "https://cdnjs.cloudflare.com/ajax/libs/framework7/1.4.2/css/framework7.ios.min.css" />
      <link rel = "stylesheet" 
         href = "https://cdnjs.cloudflare.com/ajax/libs/framework7/1.4.2/css/framework7.ios.colors.min.css" />
		         <link rel = "stylesheet" 
         href = "https://cdnjs.cloudflare.com/ajax/libs/framework7/1.4.2/css/framework7.ios.min.css" />
      <link rel = "stylesheet" 
         href = "https://cdnjs.cloudflare.com/ajax/libs/framework7/1.4.2/css/framework7.ios.colors.min.css" />
  
   </head>
<style>
#p01 {
    color: blue;

	margin-left:30px;
	
}
#p01 span { 
    background-color: #f44336; 
}

select {


margin-left:30px;
  display: block;
  padding: 10px 70px 10px 13px !important; 
  max-width: 100%; height: auto !important; 
  border: 1px solid #e3e3e3; border-radius: 3px; 
  background: url("https://image.ibb.co/iMeAJv/selectbox_arrow.png") right center no-repeat;
  background-color: #fff; color: #444444;
  font-size: 12px;
  line-height: 16px !important;
  appearance: none;
  /* this is must */ -webkit-appearance: none; 
  -moz-appearance: none; } 

Read more at: https://www.proy.info/style-select-dropdown-using-css/
}
.button6 {
    background-color: white;
    color: black;
	height:50px;
	margin-top:10px;
    width:300px;
    border: 2px solid #f44336;
}
                         
.button6:hover {
    background-color: #f44336;
    color: white;
}

#customers {
    font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

#customers td, #customers th {
    border: 1px solid #ddd;
    padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
    padding-top: 12px;
    padding-bottom: 12px;
    text-align: left;
    background-color: #4CAF50;
    color: white;
}
  .Center1{
    margin: auto;
    width: 100px;
    border-radius: 10px;
    border: none;
    margin-left:130px;
    margin-bottom:20px;
    padding: 5px 10px;
    color: aliceblue;
    background-color: darkcyan;
    text-align: center;
}

 .imgg{
	width:150px;
  }
  
 
    
    .navbar-fixed .page-content, .navbar-through .page-content {
    padding-top: 4px;

}
</style>
<body>

<!-- Navbar -->
<div class = "navbar">
                     <div class = "navbar-inner">
                        <div class = "left"><a href="dashboard.php" class="external"><i class="icon icon-back"></i></a></div>
                        <div class = "center"><img class="imgg" src="img/logol.png"></div>
                        <div class = "right"></div>
                     </div>
                  </div>
                  
<div class = "views">
    <div class = "view view-main">
        <div class = "pages">
            <div data-page = "home" class = "page navbar-fixed">
                
				<div class = "page-content infinite-scroll">
                   <form action="" method="post" enctype="multipart/form-data" form id = "my-form" class = "list-block store-data">
                    
                    <div class = "page-content">
               
					    <ul>
							<li>
                                <div class = "item-content">
                                    <div class = "item-inner">
                                    <div class = "item-title label">Select</div>
                                        <div class = "item-input">
                                            <select id="country" name="status"  >
												<option value="">Click Here</option>
												<?php
												if($rowCount > 0){
												while($row = $query->fetch_assoc()){ 

													echo '<option value="'.$row['status'].'">'.$row['Approved'].'</option>';
													}
												}else{
													echo '<option value="">Country not available</option>';
												}
												?>
											</select>
										</div>
									</div>
								</div>
                           </li>
						</ul></br>
						<input type="submit" class = "col button button-fill button-round button-big color-blue" value="Submit">                           
                   
				   				 
					 <div>
					 <?php
$status=0;
if(isset($_POST['status']))
	{
		$status=$_POST['status'];
		
	
	}

	if($status==1){
	$query = $db->query("SELECT * FROM doctordisplay WHERE status = $status and doctor_id=$doctor_id");
//$query = $db->query("SELECT * FROM doctordisplay WHERE status = $status");

$rowCount = $query->num_rows;

	
echo "<table border='1' id='customers' width='60%' align='center'>

<tr>

<th>Slots</th>

<th>patient Name</th>

<th>Date</th>

<th></th>

<th></th>

</tr>";

    
    //State option list
    if($rowCount > 0){
		while($row = $query->fetch_assoc()){ 
			
			
		
  echo "<tr>";
  $id=$row["id"];

  echo "<td>" . $row['slot'] . "</td>";

  echo "<td>" . $row['UserName'] . "</td>";

  echo "<td>" . $row['days'] . "</td>";
  ?>
  <td>
  <a href="confirm.php?id=<?php echo $id;?>">Yes</a></td>
  
  <td>
  <a href="cancel.php?id=<?php echo $id;?>">Cancel</a></td>
 <?php
  echo "</tr>";

  }
  
	}
	else
	{
		echo "<tr>";
		echo "<td colspan='5' align='center'> No Related Data</td>";
	
		 echo "</tr>";
		
	}
echo "</table>";

	}
	else if($status==2)
	{
		$query = $db->query("SELECT * FROM doctordisplay WHERE status = $status and doctor_id=$doctor_id");
		//$query = $db->query("SELECT * FROM doctordisplay WHERE status = $status");

$rowCount = $query->num_rows;

	
echo "<table border='1' border='1' id='customers'>

<tr>

<th>Slot</th>

<th>patient Name</th>

<th>Days</th>

<th>Complete</th>


</tr>";

    
    //State option list
    if($rowCount > 0){
		while($row = $query->fetch_assoc()){ 
			
			
		
  echo "<tr>";
  $id=$row["id"];

  echo "<td>" . $row['slot'] . "</td>";

  echo "<td>" . $row['UserName'] . "</td>";

  echo "<td>" . $row['days'] . "</td>";
  ?>
  <td>
  <a href="approve.php?id=<?php echo $id;?>">Complete</a></td>
  
 
 <?php
  echo "</tr>";

  }
  
	}
	else
	{
		echo "<tr>";
		echo "<td colspan='5' align='center'> No Related Data</td>";
	
		 echo "</tr>";
		
	}
echo "</table>";

	}

?>



					 </div>	
					</div>
					   
                     </form>
	
                  </div>
				  </div>
               </div>
               
            </div>
         </div>

  
     
 </body>
 
 </html>
 