<?php 

$dbServername = "localhost:3306";
$dbUsername = "root";
$dbPassword = "";
$dbName = "fkims";


$conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);

if (!$conn) {
	echo "<br>";
	echo "Connection failed!";
}
	
session_start(); 

if(isset($_POST['Confirm']))
{
	$stfID = $_POST['staffID'];
	$itID = $_POST['itemID'];
	$itQty = $_POST['itemQuantity'];
	$dRet = $_POST['dateRetrieve'];
	$com = $_POST['comment'];

	if (empty($stfID)) 
	{
		
		header("Location: ../../View/ManageRequest/requestItem.php?error=Staff ID is required");
	    exit();
		
	}
	else if(empty($itID))
	{
        
		header("Location: ../../View/ManageRequest/requestItem.php?error=Item ID is required");
	    exit();
		
	}
	else if(empty($itQty))
	{
        
		header("Location: ../../View/ManageRequest/requestItem.php?error=Item Quantity is required");
	    exit();
		
	}
	else if(empty($dRet))
	{
        
		header("Location: ../../View/ManageRequest/requestItem.php?error=Date Retrieve is required");
	    exit();
		
	}
	else
	{
		
		$query = "INSERT INTO managerequest (staffID, itemID, itemQuantity, dateRetrieve, comment, status)
		VALUES ('$stfID', '$itID', '$itQty', '$dRet', '$com', 'Pending')";

		$result = mysqli_query($conn, $query);

            
		if($result)
		{
			echo "Data successfully added into the system";
			header("Location: ../../View/ManageRequest/requestItem.php");
		}
		else
		{
			die("Error inserting data !  ".$conn->error);
			header("Location: ../../View/ManageRequest/requestItem.php");
		}

	}
	
}else
{
	header("Location: ../../View/ManageRequest/requestItem.php");
	exit();
}