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
	
			if(isset($_GET['GetID']))
			{
				$uID = $_GET['GetID'];
				
				
				$query = "UPDATE managerequest
							SET status='Accept'
							WHERE RequestID='".$uID."'";

				$result = mysqli_query($conn, $query);
				
				if($result)
				{
					echo "Data successfully updated";
					header("location:../../View/ManageRequest/requestMain.php");
				}
				else
				{
					die("Error updating data !  ".$conn->error);
				}
			}

			else
			{
				header("location:../../View/ManageRequest/requestMain.php");
			}
			
?>