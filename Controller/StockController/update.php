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
	
			if(isset($_POST['Update']))
			{
				$uID = $_GET['GetID'];
				
				$iID = $_POST['itemID'];
				$vID = $_POST['vendorID'];
				$iType = $_POST['itemType'];
				$iName = $_POST['itemName'];
				$iQ = $_POST['itemQ'];
				$iP = $_POST['itemPrice'];
				$Date = $_POST['RegDate'];
				$Time = $_POST['RegTime'];
				$sc = $_POST['sec'];
				$Desc = $_POST['Desc'];
				$stat = $_POST['stat'];
				
				$query = "UPDATE itemlist
							SET itemID='".$iID."',
							vendorID='".$vID."',
							itemType='".$iType."',
							itemName='".$iName."',
							itemBalance='".$iQ."',
							itemPrice='".$iP."',
							RegDate='".$Date."',
							RegTime='".$Time."',
							sectionID='".$sc."',
							itemDesc='".$Desc."',
							itemStatus='".$stat."'
							WHERE itemID='".$uID."'";

				$result = mysqli_query($conn, $query);
				
				if($result)
				{
					echo "Data successfully updated";
					header("location: ../../View/ManageStock/manageMain.php");
				}
				else
				{
					die("Error updating data !  ".$conn->error);
				}
			}

			else
			{
				header("location: ../../View/ManageStock/manageMain.php");
			}
			
?>