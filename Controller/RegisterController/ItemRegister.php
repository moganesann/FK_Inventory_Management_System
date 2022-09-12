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


	$vID = $_POST['vendorID'];     
	$iType = $_POST['itemType'];
	$iID = $_POST['itemID'];
	$iName = $_POST['itemName'];
	$iQ = $_POST['itemQ'];
	$iPrice = $_POST['itemPrice'];
	$RegDate = $_POST['RegDate'];
	$RegTime = $_POST['RegTime'];
	$sc = $_POST['sec'];
	$Desc = $_POST['Desc'];

	if (empty($vID)) 
	{
		
		header("Location: ../../View/ItemRegistration/ItemRegistration.php?error=Vendor ID is required");
	    exit();
		
	}
	else if(empty($iType))
	{
        
		header("Location: ../../View/ItemRegistration/ItemRegistration.php?error=Item Type is required");
	    exit();
		
	}
	else if(empty($iID))
	{
        
		header("Location: ../../View/ItemRegistration/ItemRegistration.php?error=Item ID is required");
	    exit();
		
	}
	else if(empty($iName))
	{
        
		header("Location: ../../View/ItemRegistration/ItemRegistration.php?error=Item Name is required");
	    exit();
		
	}
	else if(empty($iQ))
	{
        
		header("Location: ../../View/ItemRegistration/ItemRegistration.php?error=Item Quantity is required");
	    exit();
		
	}
	else if(empty($iPrice))
	{
        
		header("Location: ../../View/ItemRegistration/ItemRegistration.php?error=Item Price is required");
	    exit();
		
	}
	else if(empty($RegDate))
	{
        
		header("Location: ../../View/ItemRegistration/ItemRegistration.php?error=Register Date is required");
	    exit();
		
	}
	else if(empty($RegTime))
	{
        
		header("Location: ../../View/ItemRegistration/ItemRegistration.php?error=Register Time is required");
	    exit();
		
	}
	else
	{
		
		$all= "SELECT * FROM itemlist";

		$check = mysqli_query($conn, $all);
		
		if (mysqli_num_rows($check)>0) 
		{
			while($row=mysqli_fetch_assoc($check))
			{
				$test=$row['itemID'];
				$balance=$row['itemQuantity'];
			}
			
			if($test==$iID)
				{
						$newQuant=$balance+$iQ;
						
						
						$que = "UPDATE itemlist
							SET vendorID='".$vID."',
							itemBalance='".$newQuant."',
							itemPrice='".$iPrice."',
							RegDate='".$RegDate."',
							RegTime='".$RegTime."',
							itemDesc='".$Desc."'
							WHERE itemID='".$iID."'";

							$rest = mysqli_query($conn, $que);
							
							header("location: ../../View/ItemRegistration/ItemRegistration.php?error=Item Updated into Database");
							exit();
							
				}
				else
				{
		
		
		
						$query = "INSERT INTO itemlist (vendorID, itemType, itemID, itemName, itemBalance, itemPrice, RegDate, RegTime, itemDesc, sectionID)
									VALUES ('$vID', '$iType', '$iID', '$iName', '$iQ', '$iPrice', '$RegDate', '$RegTime', '$Desc', '$sc')";

						$result = mysqli_query($conn, $query);
						
						header("location: ../../View/ItemRegistration/ItemRegistration.php?error=Item Added into Database");
						exit();
				}
		
		}
            
	}
	
}else{
	header("Location: ../../View/ItemRegistration/ItemRegistration.php");
	exit();
	
}