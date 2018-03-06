<?php

include 'config.php';

$id $_GET['id'];
	
	echo $id;die; 
	
		$Name = $_POST['Name']; 
		
		$doctor_id = $_POST['doctor_id']; 
		
		$age = $_POST['age'];
		
		$sex = $_POST['sex'];
		
		$Phone = $_POST['Phone'];
		
		$Email_id = $_POST['Email_id'];
		
		$services = $_POST['services'];
		
		$designation = $_POST['designation'];
		
		$Address = $_POST['Address'];
		
		$qualification = $_POST['qualification'];
		
		$experience = $_POST['experience'];
		
		$Achievement = $_POST['Achievement'];
		
		$Desciption = $_POST['Desciption'];
		
		$photo=$_FILES['photo']['name'];
		
		
	
		$target_dir = "img/";
		$target_file = $target_dir . basename($_FILES['photo']['name']);
		$uploadOk = 1;
		$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
		// Check if image file is a actual image or fake image
		if(isset($_POST['submit'])) {
		$check = getimagesize($_FILES['photo']['tmp_name']);
		if($check !== false) {
			echo "File is an image - " . $check['mime'] . ".";
			$uploadOk = 1;
		} 
		else {
			echo "File is not an image.";
			$uploadOk = 0;
		}
		}
		
		
		
	   echo  $query = "UPDATE doctorlist SET doctor_id='$doctor_id',Name='$Name ',services='$services ',age='$age',sex='$sex',Phone='$phone',designation='$designation',Email_id='$Email_id',Address='$Address',experience='$experience',Achievement='$Achievement',Desciption='$Desciption,photo='$photo',qualification='$qualification' where id='$id'"; die;
		
		$data = mysqli_query ($con,$query)or die(mysqli_error());
		if($data)
		{
			echo "YOUR REGISTRATION IS COMPLETED..."; 
		}

?>
