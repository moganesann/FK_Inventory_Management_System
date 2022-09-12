
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>FKIMS</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="../assets/img/favicon.png" rel="icon">
  <link href="../assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,400i,600,700|Raleway:300,400,400i,500,500i,700,800,900" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="../assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="../assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="../assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="../assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="../assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: eBusiness - v4.2.0
  * Template URL: https://bootstrapmade.com/ebusiness-bootstrap-corporate-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
<style>
input[type=submit] 
{
  background-color: RoyalBlue;
  border: 2px solid black;
  border-color: white;
  height: 50px;
  width: 100px;
  color: white; 
  border-radius: 5px;
  font-weight: bold;
  font-size: 20px; 
  margin: auto; 
}

input[type=submit]:hover 
{
  background-color: Red;
  border: 2px solid black;
}

input[type=reset]
{
  background-color: green;
  border-color: white;
  height: 50px;
  width: 100px;
  color: white; 
  border-radius: 5px;
  font-weight: bold;
  font-size: 20px; 
  margin: auto; 
  margin-left:20px;
}

input[type=reset]:hover 
{
  background-color: MediumSpringGreen;
}

table, th, td {
  border: 2px solid black;
  border-collapse: collapse;
  text-align: center;
  padding:10px;
  

}
th
{
	
	background-color: #DCDCDC;
	
}

.btn{

	width:90px;


}
.search
{
	width: 500px;
	border: 2px solid black;
	font-size: 20px; 
	
}
.search:hover 
{
  background-color: #c1f0f0;
}
</style>

<script type="text/javascript"> 
	  
	  function update() 
	  {
				alert("Item Detail have been updated");
			
	  }
	  
	</script>

</head>

<body>


  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex justify-content-between">

      <div class="logo">
        <h1><a href="../ManageLogin/Login.php"><span>f</span>KIMS</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav id="navbar" class="navbar">
        <ul>
			<li><a class="active"href="../ManageStock/manageMain.php">Manage Store</a></li>
			<li class="dropdown"><a href="../ManageRequest/requestItem.php"><span>Request</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="../ManageRequest/requestMain.php">Manage Request</a></li>
            </ul>
          </li>
			<li><a href="../ManageVendor/managevendor.php">Vendor</a></li>
			<li><a href="../ItemRegistration/ItemRegistration.php"><span>Register</span></a></li>
			<li><a href="../ManageDispense/DispenseItem.php">Dispense</a></li>
			<li><a href="../GenerateReport/reportMain.php">Report</a></li>
			<li><a style="font-weight:bold;font-style:italic;" href="../ManageLogin/Login.php">Log Out</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->
  
 <main id="main">
  
    <!-- ======= Blog Header ======= -->
    <div class="header-bg page-area">
      <div class="container position-relative">
        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="slider-content text-center">
              <div class="header-bottom">
                <div class="layer2">
                  <h1 class="title2">FK INVENTORY MANAGEMENT SYSTEM </h1>
                </div>
                <div class="layer3">
                  <h2 class="title3">Manage Your Items Easily</h2>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div><!-- End Blog Header -->
	
	
	<?php
	$conn = mysqli_connect("localhost", "root", "", "fkims");
	
	if(!$conn) 
	{ 
		die(" Connection Error "); 
	}
	
	$uID = $_GET['GetID'];
	$query = "SELECT * FROM itemlist WHERE itemID='".$uID."'";

	$result = mysqli_query($conn, $query);
	
	while($row=mysqli_fetch_assoc($result))
	{
		$iID = $row['itemID'];
		$vID = $row['vendorID'];
		$iType =$row['itemType'];
		$iName = $row['itemName'];
		$iQ = $row['itemBalance'];
		$iPrice = $row['itemPrice'];
		$RegDate = $row['RegDate'];
		$RegTime = $row['RegTime'];
		$sc = $row['sectionID'];
		$Desc = $row['itemDesc'];
		$stat = $row['itemStatus'];
	}
?>
	

  	  <!-- ======= About Section ======= -->
    <div id="about" class="about-area area-padding">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="section-headline text-center">
              <h2>Manage Item</h2>
            </div>
          </div>
        </div>
        <div class="row">
          <!-- single-well start-->
		  
 <center> 
 
		
		<form action="../../Controller/StockController/update.php?GetID=<?php echo $uID ?>" method="post">
           
			
			<h3 class="gap" style="font-size:25px";>ITEM LIST</h3>
            
            <table style="width:90%">

                <tr>
					<th style="text-align:center;"><label for="itemID">Item ID:</label></th>
					<td style="text-align:center;"><input type="text" id="itemID" name="itemID" value="<?php echo $iID ?>"></td>	
				</tr>
				<tr>
					<th style="text-align:center;"><label for="vendorID">Vendor ID:</label></th>
					<td style="text-align:center;"><input class="fill" type="text" id="vendorID" name="vendorID" value="<?php echo $vID ?>"></td>
				</tr>
				<tr>
					<th style="text-align:center;"><label for="itemName">Item Name:</label></th>
					<td style="text-align:center";><input class="fill" type="text" id="itemName" name="itemName" value="<?php echo $iName ?>"></td>
				</tr>
				<tr>
					<th style="text-align:center;"><label for="itemType">Item Type:</label></th>
					<td style="text-align:center"><input class="fill" type="text" id="itemType" name="itemType" value="<?php echo $iType ?>"></td>
				</tr>
				<tr>
					<th style="text-align:center;"><label for="Desc">Item Description:</label></th>
					<td style="text-align:center;"><input class="fill" type="text" id="Desc" name="Desc" value="<?php echo $Desc ?>"></td>
				</tr>
				<tr>
					<th style="text-align:center;"><label for="Desc">Item Status:</label></th></th>
					<td style="text-align:center;"><input class="fill" type="text" id="stat" name="stat" value="<?php echo $stat ?>"></td>
				</tr>
				<tr>
					<th style="text-align:center;"><label for="itemQ">Item Quantity:</label></th>
					<td style="text-align:center;"><input class="fill" type="number" id="itemQ" name="itemQ" value="<?php echo $iQ ?>"></td>
				</tr>
				<tr>
					<th style="text-align:center;"><label for="Desc">Section ID:</label></th>
					<td style="text-align:center;"><input class="fill" type="text" id="sec" name="sec" value="<?php echo $sc ?>"></td>
				</tr>
				<tr>
					<th style="text-align:center;"><label for="itemPrice">Item Price:</label></th>
					<td style="text-align:center;"><input class="fill" type="number" id="itemPrice" name="itemPrice" value="<?php echo $iPrice ?>"></td>
				</tr>
				<tr>
					<th style="text-align:center;"><label for="RegDate">Item Register Date:</label></th>
					<td style="text-align:center;"><input class="fill" type="text" id="RegDate" name="RegDate" value="<?php echo $RegDate ?>"></td>
				</tr>
				<tr>
					<th style="text-align:center;"><label for="RegTime">Item Register Time:</label></th>
					<td style="text-align:center;"><input class="fill" type="text" id="RegTime" name="RegTime" value="<?php echo $RegTime ?>"></td>
				</tr>
				
            </table>
			<br>
			<br>
			<input type="submit" value="Update" name="Update" onclick="update()">
			<input type="reset">
        </form>

				
    
					
	  </center>   
   

    
    


  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer>
    <div class="footer-area-bottom">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="copyright text-center">
              <p>
                &copy; Copyright <strong>genesys</strong>. All Rights Reserved
              </p>
            </div>
            <div class="credits">
              <!--
              All the links in the footer should remain intact.
              You can delete the links only if you purchased the pro version.
              Licensing information: https://bootstrapmade.com/license/
              Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=eBusiness
            -->
              Designed by <a>Genesys</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer><!-- End  Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="../assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="../assets/vendor/php-email-form/validate.js"></script>
  <script src="../assets/vendor/swiper/swiper-bundle.min.js"></script>

  <!-- Template Main JS File -->
  <script src="../assets/js/main.js"></script>

</body>

</html>