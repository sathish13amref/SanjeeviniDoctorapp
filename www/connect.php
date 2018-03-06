<?php

header("Cache-Control: private, must-revalidate, max-age=0");
  header("Pragma: no-cache");
	define('DB_HOST', 'localhost');
	define('DB_NAME', 'fkwcci_medical');
	define('DB_USER','fkwcci_myadmin'); 
	define('DB_PASSWORD','globe123');
	$con= mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME) or die("Failed to connect to MySQL: " . mysql_error());
//	$db=mysql_select_db(DB_NAME,$con) or die("Failed to connect to MySQL: " . mysql_error()); 
	
		$Name=$_GET['Name'];
		echo $Name;
		
		echo "<br>";
		$doctor_id=$_GET['doctor_id'];
		echo $doctor_id;
		echo "<br>";
		$date=$_GET['date'];
		$myArray = explode(',', $date);
		print_r($myArray);
		echo "<br>";
		$N = count($myArray);
		echo $N;
		echo "<br>";
		
	//	$query = "INSERT  INTO doctorlist (Name) VALUES ('$Name')";
		//$data = mysqli_query ($con,$query)or die(mysqli_error($con));
		
		
		if(isset($_GET["Name"], $_GET["doctor_id"])) 
		{     

			$Name = $_GET["Name"]; 
			
			echo $Name;
		
			echo "<br>";
			$doctor_id = $_GET["doctor_id"]; 

			
			echo $doctor_id;
			echo "<br>";
			$result1 ="SELECT * FROM doctorlist WHERE Name = '".$Name."' AND  doctor_id = '".$doctor_id."'";
			$data1 = mysqli_query ($con,$result1)or die(mysqli_error($con));
			
			$check = mysqli_fetch_array($data1);
			if(isset($check)){
			echo 'success';
			}
			else
			{
				echo 'failure';
			}
        
		}
		else{
			echo "hhhhhh 	 ";
		}
		
		$sql_u = "SELECT * FROM doctorlist WHERE Name='$Name'";
		$sql_e = "SELECT * FROM doctorlist WHERE doctor_id='$doctor_id'";
		$res_u = mysqli_query($con, $sql_u);
		$res_e = mysqli_query($con, $sql_e);

		if (mysqli_num_rows($res_u) > 0) {
			$name_error = "Sorry... doctor already taken"; 	
		}
		else if(mysqli_num_rows($res_e) > 0)
		{
			$email_error = "Sorry... doctor_id already taken"; 	
		}
		else
		{
           $query = "INSERT INTO doctorlist (Name, doctor_id) VALUES ('$Name', '$doctor_id')";
           $results = mysqli_query($con, $query);
           echo 'Saved!';
		   
		   
		   for($i=0;$i<$N;$i++)
		{
			$query = "INSERT  INTO doctors (Name,doctor_id,date) VALUES ('$Name','$doctor_id','$myArray[$i]')";
			
			$data = mysqli_query ($con,$query)or die(mysqli_error());
			if($data)
			{
				echo $Name;
				echo "<Br>";
				echo $myArray[$i]; 
				echo "<br>";
			}
		}
          
		}
	
		
		
		
?>
