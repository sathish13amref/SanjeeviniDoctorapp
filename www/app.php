<?php
header("Cache-Control: private, must-revalidate, max-age=0");
  header("Pragma: no-cache");
	include 'dbConfig.php';
//include 'Approval.php'; 


if(isset($_POST['status']))
	{
		$status=$_POST['status'];
	//echo $status;
	}
	if($status==1){
$query = $db->query("SELECT * FROM doctordisplay WHERE status = $status");

$rowCount = $query->num_rows;

	
echo "<table border='1'>

<tr>

<th>Services</th>

<th>Name</th>

<th>Date</th>

<th>Approve</th>

<th>cancel</th>

</tr>";

    
    //State option list
    if($rowCount > 0){
		while($row = $query->fetch_assoc()){ 
			
			
		
  echo "<tr>";
  $id=$row["id"];

  echo "<td>" . $row['services'] . "</td>";

  echo "<td>" . $row['Name'] . "</td>";

  echo "<td>" . $row['date'] . "</td>";
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
		$query = $db->query("SELECT * FROM doctordisplay WHERE status = $status");

$rowCount = $query->num_rows;

	
echo "<table border='1'>

<tr>

<th>Services</th>

<th>Name</th>

<th>Date</th>

<th>Complete</th>


</tr>";

    
    //State option list
    if($rowCount > 0){
		while($row = $query->fetch_assoc()){ 
			
			
		
  echo "<tr>";
  $id=$row["id"];

  echo "<td>" . $row['services'] . "</td>";

  echo "<td>" . $row['Name'] . "</td>";

  echo "<td>" . $row['date'] . "</td>";
  ?>
  <td>
  <a href="approve.php?id=<?php echo $id;?>">Complete</a></td>
  
 
 <?php
  echo "</tr>";
  
  
  header('Location:Approval.php');
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
