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
				
				$vID = $_POST['vendorID'];
				$vNm = $_POST['vendor_name'];
				$vMail = $_POST['vendor_email'];
				$vAdd = $_POST['vendor_address'];
				$vPh = $_POST['vendor_phone'];
				$vIt = $_POST['vendor_item'];
			
				
				$query = "UPDATE vendor_list
							SET vendorID='".$vID."',
							vendor_name='".$vNm."',
							vendor_email='".$vMail."',
							vendor_address='".$vAdd."',
							vendor_phone='".$vPh."',
							vendor_item='".$vIt."'
							WHERE vendorID='".$uID."'";

				$result = mysqli_query($conn, $query);
				
				if($result)
				{
					echo "Data successfully updated";
					header("location:../../View/ManageVendor/managevendor.php");
				}
				else
				{
					die("Error updating data !  ".$conn->error);
				}
			}

			else
			{
				header("location:../../View/ManageVendor/managevendor.php");
			}
			
?>