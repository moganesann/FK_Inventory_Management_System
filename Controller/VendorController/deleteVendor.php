<?php
	$conn = mysqli_connect("localhost", "root", "", "fkims");
	
	if(!$conn) 
	{ 
		die(" Connection Error "); 
	}
	
	if(isset($_GET['DeleteID']))
	{
		$ID = $_GET['DeleteID'];
		
		$all = "SELECT * FROM itemlist 
					WHERE vendorID='".$ID."'";
			
		$call = mysqli_query($conn, $all);
		
		if (mysqli_num_rows($call)>0){
			while($row=mysqli_fetch_assoc($call)){
				$test=$row['itemID'];
				
				$q = "DELETE FROM dispenseitem
					WHERE itemID='$test'";
					
				$r = mysqli_query($conn, $q);
				
				$k = "DELETE FROM managerequest
					WHERE itemID='$test'";
					
				$e = mysqli_query($conn, $k);
				
				$que = "DELETE FROM itemlist 
					WHERE itemID='$test'";
					
				$rst = mysqli_query($conn, $que);
			}
		}
			
		
		$query = "DELETE FROM vendor_list
					WHERE vendorID='".$ID."'";
			
		$result = mysqli_query($conn, $query);
		
		if($result)
		{
			echo "Data deleted from system";
			header("location: ../../View/ManageVendor/managevendor.php");
		}
		
		else
		{
			die("Error deleting data !  ".$conn->error);
		}
	}
	else
	{
		header("location: ../../View/ManageVendor/managevendor.php");
	}
?>