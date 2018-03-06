<?php
//Include the database configuration file
include 'dbConfig.php';

if(!empty($_POST["doctor_id"])){
    //Fetch all state data
	
	$doctor_id=$_POST["doctor_id"];
	echo $doctor_id; 
    $query = $db->query("SELECT * FROM doctordisplay WHERE doctor_id = ".$_POST['doctor_id']."");
    
    //Count total number of rows
    $rowCount = $query->num_rows;
    
    //State option list
    if($rowCount > 0){
        echo '<option value="">Select date</option>';
        while($row = $query->fetch_assoc()){ 
             echo '<option value="'.$row['date'].'">'.$row['date'].'</option>';
        }
    }else{
        echo '<option value="">State not available</option>';
    }
}
?>