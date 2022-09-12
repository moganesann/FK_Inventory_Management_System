<?php

$sname= "localhost";
$unmae= "root";
$password = "";

$db_name = "fkims";

$conn = mysqli_connect($sname, $unmae, $password, $db_name);

if (!$conn) {
	echo "<br>";
	echo "Connection failed!";
}
	
session_start(); 

if(isset($_POST['Confirm']))
{


	$aID = $_POST['adminID'];
    $iID = $_POST['itemID'];
	$iQuan = $_POST['itemQuantity'];
	$sID = $_POST['staffID'];
	$dt = $_POST['date'];
	$tm = $_POST['time'];

	if (empty($aID)) 
	{
		
		header("Location: ../../View/ManageDispense/DispenseItem.php?error=admin ID is required");
	    exit();
		
	}
	else if(empty($iID))
	{
        
		header("Location: ../../View/ManageDispense/DispenseItem.php?error=Item ID is required");
	    exit();
		
	}
	else if(empty($iQuan))
	{
        
		header("Location: ../../View/ManageDispense/DispenseItem.php??error=Item Quantity is required");
	    exit();
		
	}
	else if(empty($sID))
	{
        
		header("Location: ../../View/ManageDispense/DispenseItem.php?error=Staff ID is required");
	    exit();
		
	}
	else if(empty($dt))
	{
        
		header("Location: ../../View/ManageDispense/DispenseItem.php?error=Date is required");
	    exit();
		
	}
	else if(empty($tm))
	{
        
		header("Location: ../../View/ManageDispense/DispenseItem.php?error=Time is required");
	    exit();
		
	}
	else
	{
		
		$query = "INSERT INTO dispenseitem (adminID, itemID, quantityOut, StaffID, Date, Time)
					VALUES ('$aID', '$iID', '$iQuan', '$sID', '$dt', '$tm')";
		$result = mysqli_query($conn, $query);
		
		
		
		
		$que = "SELECT * FROM itemlist WHERE itemID='$iID'";
		$que_run = mysqli_query($conn, $que);
        //$balance = mysqli_num_rows($que_run);
		if (mysqli_num_rows($que_run)>0){
			while($row=mysqli_fetch_assoc($que_run)){
				$test=$row['itemBalance'];
			}
		}
		
		$newQuant=$test-$iQuan;
				
		$qry = "UPDATE itemlist
				SET itemBalance='$newQuant'
				WHERE itemID='$iID'";

		$rest = mysqli_query($conn, $qry);

            
		if($result)
		{
			echo "Data successfully added into the system";
			header("location: ../../View/ManageDispense/DispenseItem.php");
		}
		else
		{
			die("Error inserting data !  ".$conn->error);
			header("location: ../../View/ManageDispense/DispenseItem.php");
		}

	}
	
}else{
	header("Location: ../../View/ManageDispense/DispenseItem.php");
	exit();
	
}
?>