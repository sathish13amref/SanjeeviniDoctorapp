<?php

include 'config.php';


	$id=$_GET['doctor_id'];
	
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
		
		$acheivements= $_POST['acheivements'];
		
		$Desciption = $_POST['Desciption'];
		$password= $_POST['password'];
		
		if(!empty($_FILES['photo']['name'])) //new image uploaded
{
		
		$photo=$_FILES['photo']['name'];
		$tempname=$_FILES['photo']['tmp_name'];
		
		$imagename=move_uploaded_file($tempname,"../admin/images/$photo");
		
	     $query = "UPDATE doctorlist SET doctor_id='$doctor_id',Name='$Name ',services='$services ',age='$age',sex='$sex',Phone='$Phone ',designation='$designation',Email_id='$Email_id',Address='$Address',experience='$experience',acheivements='$acheivements',Desciption='$Desciption',photo='$photo',qualification='$qualification',password='$password' where doctor_id='$id'";
		
		$data = mysqli_query ($db,$query)or die(mysqli_error());
		if($data)
		{
			echo "YOUR REGISTRATION IS COMPLETED..."; 
			header ('location:dashboard.php');
		}
}
else // no image uploaded
{
$query = "UPDATE doctorlist SET doctor_id='$doctor_id',Name='$Name ',services='$services ',age='$age',sex='$sex',Phone='$Phone ',designation='$designation',Email_id='$Email_id',Address='$Address',experience='$experience',acheivements='$acheivements',Desciption='$Desciption',qualification='$qualification',password='$password' where doctor_id='$id'";

$data = mysqli_query ($db,$query)or die(mysqli_error());
		if($data)
		{
			echo "YOUR REGISTRATION IS COMPLETED..."; 
			header ('location:dashboard.php');
		}

}
//header ('location:dashboard.php');

?>