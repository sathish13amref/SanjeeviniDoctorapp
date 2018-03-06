<?php 
include 'config.php';
//$db = mysqli_connect("localhost","fkwcci_myadmin","globe123","fkwcci_medical");
if($db==true)
{
	//echo "success";
}
	$id=$_GET['doctor_id'];

	if(isset($_POST['m'])) 
	{
		$days=$_POST['m'];
	echo $days."</br>";
    }
	if(isset($_POST['09_09:30'])) 
	{
		$time1=$_POST['09_09:30'];
		echo $time1."</br>";
    }
	if(isset($_POST['09:30-10:00'])) 
	{
		$time2=$_POST['09:30-10:00'];
		echo $time2."</br>";
    }
	if(isset($_POST['10:00_10:30'])) 
	{
		$time3=$_POST['10:00_10:30'];
		echo $time3."</br>";
    }
	if(isset($_POST['10:30_11:00'])) 
	{
		$time4=$_POST['10:30_11:00'];
		echo $time4."</br>";
    }
	if(isset($_POST['11:00_11:30'])) 
	{
		$time5=$_POST['11:00_11:30'];
		echo $time5."</br>";
    }
	if(isset($_POST['11:30_12:00'])) 
	{
		$time6=$_POST['11:30_12:00'];
		echo $time6."</br>";
    }
	if(isset($_POST['12:00_12:30'])) 
	{
		$time23=$_POST['12:00_12:30'];
		echo $time23."</br>";
    }
    
   
	if(isset($_POST['12:30_01:00'])) 
	{
		$time7=$_POST['12:30_01:00'];
		echo $time7."</br>";
    }
	if(isset($_POST['01:00_01:30'])) 
	{
		$time8=$_POST['01:00_01:30'];
		echo $time8."</br>";
    }
	if(isset($_POST['01:30-02:00'])) 
	{
		$time9=$_POST['01:30_02:00'];
		echo $time9."</br>";
    }
	if(isset($_POST['02:00-02:30'])) 
	{
		$time10=$_POST['02:00_02:30'];
		echo $time10."</br>";
    }
	if(isset($_POST['02:30_03:00'])) 
	{
		$time11=$_POST['02:30_03:00'];
		echo $time11."</br>";
    }
	if(isset($_POST['03:00_03:30'])) 
	{
		$time12=$_POST['03:00_03:30'];
		echo $time12."</br>";
    }
	if(isset($_POST['03:30_04:00'])) 
	{
		$time13=$_POST['03:30_04:00'];
		echo $time13."</br>";
    }
    if(isset($_POST['04:00_04:30'])) 
	{
		$time14=$_POST['04:00_04:30'];
		echo $time14."</br>";
    }
    if(isset($_POST['04:30_05:00'])) 
	{
		$time15=$_POST['04:30_05:00'];
		echo $time15."</br>";
    }
    if(isset($_POST['05:00_05:50'])) 
	{
		$time16=$_POST['05:00_05:50'];
		echo $time16."</br>";
    }
    if(isset($_POST['05:30_06:00'])) 
	{
		$time17=$_POST['05:30_06:00'];
		echo $time17."</br>";
    }
    if(isset($_POST['06:00_06:30'])) 
	{
		$time18=$_POST['06:00_06:30'];
		echo $time18."</br>";
    }if(isset($_POST['06:30_07:00'])) 
	{
		$time19=$_POST['06:30_07:00'];
		echo $time19."</br>";
    }if(isset($_POST['07:00_07:30'])) 
	{
		$time20=$_POST['07:00_07:30'];
		echo $time20."</br>";
    }
    if(isset($_POST['07:30_08:00'])) 
	{
		$time21=$_POST['07:30_08:00'];
		echo $time21."</br>";
    }
    if(isset($_POST['08:00_08:30'])) 
	{
		$time22=$_POST['08:00_08:30'];
		echo $time22."</br>";
    }
    if(isset($_POST['08:30_09:00'])) 
	{
		$time24=$_POST['08:30_09:00'];
		echo $time24."</br>";
    }
    
   echo $query="UPDATE doctors SET days='$days',slot1='$time1',slot2='$time2',slot3='$time3',slot4='$time4',slot5='$time5',slot6='$time6',slot7='$time23',slot8='$time7',slot9='$time8',slot10='$time9',slot11='$time10',slot12='$time11',slot13='$time12',slot14='$time13',slot15='$time14',slot16='$time15',slot17='$time16',	slot18='$time17',slot19='$time18',slot20='$time19',slot21='$time20',slot22='$time21',slot23='$time22',slot24='$time24' WHERE doctor_id='$id' AND days='$days'";

          $data = mysqli_query ($db,$query)or die(mysqli_error());
		if($data)
		{
			echo "YOUR update IS COMPLETED..."; 
			header ('location:dashboard.php');
		}
		
	
	
	?>