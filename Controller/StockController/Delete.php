<?php
	$conn = mysqli_connect("localhost", "root", "", "fkims");
	
	if(!$conn) 
	{ 
		die(" Connection Error "); 
	}
	
	if(isset($_GET['DeleteID']))
	{
		$ID = $_GET['DeleteID'];
		
		
		$que = "DELETE FROM dispenseitem
					WHERE itemID = '".$ID."'";
					
		$rst = mysqli_query($conn, $que);
		
		$qry = "DELETE FROM managerequest 
					WHERE itemID = '".$ID."'";
			
		$result = mysqli_query($conn, $qry);
		
		$query = "DELETE FROM itemlist 
					WHERE itemID = '".$ID."'";
			
		$result = mysqli_query($conn, $query);
		
		if($result)
		{
			echo "Data deleted from system";
			header("location: ../../View/ManageStock/manageMain.php");
		}
		
		else
		{
			die("Error deleting data !  ".$conn->error);
		}
	}
	else
	{
		header("location: ../../View/ManageStock/manageMain.php");
	}
?>