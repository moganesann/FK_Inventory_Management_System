<?php
	$conn = mysqli_connect("localhost", "root", "", "fkims");
	
	if(!$conn) 
	{ 
		die(" Connection Error "); 
	}
	
	if(isset($_GET['DeleteID']))
	{
		$ID = $_GET['DeleteID'];
		
		$query = "DELETE FROM managerequest 
					WHERE RequestID = '".$ID."'";
			
		$result = mysqli_query($conn, $query);
		
		if($result)
		{
			echo "Data deleted from system";
			header("location:../../View/ManageRequest/requestMain.php");
		}
		
		else
		{
			die("Error deleting data !  ".$conn->error);
		}
	}
	else
	{
		header("location:../../View/ManageRequest/requestMain.php");
	}
?>