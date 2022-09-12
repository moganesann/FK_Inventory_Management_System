<!-- insertdata.php -->
<!-- To insert data of add.php into database. -->
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


if(isset($_POST['Add']))
{


	$vID = $_POST['vendorID'];
	$vNm = $_POST['vendor_name'];
	$vEm = $_POST['vendor_email'];
	$vAdd = $_POST['vendor_address'];
	$vPh = $_POST['vendor_phone'];
	$vIt = $_POST['vendor_item'];


	$query = "INSERT INTO vendor_list (vendorID,vendor_name,vendor_email,vendor_address,vendor_phone,vendor_item) 
			VALUES('$vID','$vNm','$vEm','$vAdd','$vPh','$vIt')";

if (mysqli_query($conn, $query)) {
      
   echo "<script type='text/javascript'> window.location='../../View/ManageVendor/managevendor.php' </script>";
	
} else {
    echo '<script type="text/javascript">alert("Duplicate Vendor");
	history.back();</script>';
}
}


?>