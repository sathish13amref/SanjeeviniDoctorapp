<?php


session_start();
header("Cache-Control: private, must-revalidate, max-age=0");
  header("Pragma: no-cache");
	define('DB_HOST', 'localhost');
	define('DB_NAME', 'fkwcci_medical');
	define('DB_USER','fkwcci_myadmin'); 
	define('DB_PASSWORD','globe123');
	$con= mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME) or die("Failed to connect to MySQL: " . mysql_error());
//	$db=mysql_select_db(DB_NAME,$con) or die("Failed to connect to MySQL: " . mysql_error()); 



		$Email_id= $_POST['Email_id'];
			
		$password= $_POST['password'];

		
		$result1 ="SELECT * FROM doctorlist WHERE Email_id= '".$Email_id."' AND  password= '".$password."'";
			$data1 = mysqli_query ($con,$result1)or die(mysqli_error($con));
			
			$check = mysqli_fetch_object($data1);
			
			// $id=$check["id"];
			 //echo $id;
			 
			if(isset($check)){

				$_SESSION['EMAIL']=$check->Email_id;
	                        $_SESSION['NAME']=$check->Name;
                                $_SESSION['ID']=$check->id;
                                $_SESSION['DOCTOR_ID']=$check->doctor_id;
                                $_SESSION['msg']="You are successfully logged in !";
					header ('location:dashboard.php');
			}
			else
			{
					$_SESSION['msg']="This login details are not found !";
					header("location:index.php");
			
			}
			
?>