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

if (isset($_POST['id']) && isset($_POST['password'])) 
{

	function validate($data)
	{
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$uname = validate($_POST['id']);
	$pass = validate($_POST['password']);

	if (empty($uname)) 
	{
		
		header("Location: ../../View/ManageLogin/Login.php?error=User ID is required");
	    exit();
		
	}
	else if(empty($pass))
	{
        
		header("Location: ../../View/ManageLogin/Login.php?error=Password is required");
	    exit();
		
	}
	else
	{
		
		$sql = "SELECT * FROM user WHERE id='$uname' AND password='$pass'";

		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) === 1) 
		{
			
			$row = mysqli_fetch_assoc($result);
            
			if ($row['id'] === $uname && $row['password'] === $pass) 
			{
				
            	$_SESSION['user_name'] = $row['name'];
            	$_SESSION['id'] = $row['id'];
				
				if ($row['UserType'] === 'Admin') 
				{
					header("Location: ../../View/ManageLogin/mainMenu.php");
					exit();
				}
				else
				{
					header("Location: ../../View/ManageLogin/staffMain.php");
					exit();
				}
				
            }
			else
			{
				
				header("Location: ../../View/ManageLogin/Login.php?error=Incorect User ID or password");
		        
				exit();
			}
		}
		else
		{
			header("Location: ../../View/ManageLogin/Login.php?error=Incorect User ID or password");
	        exit();
		}
	}
	
}else{
	header("Location: ../../View/ManageLogin/Login.php");
	exit();
	
}