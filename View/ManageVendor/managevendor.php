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
  <link href="../assets/css/stylevendor.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: eBusiness - v4.2.0
  * Template URL: https://bootstrapmade.com/ebusiness-bootstrap-corporate-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
  <link href="assets/css/style.css" rel="stylesheet">
  <link rel="stylesheet" href="assets/css/stylevendor.css">
<style>

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
input[type=submit] 
{
  background-color: Crimson;
  border: 2px solid black;
  color: white; 
  border-radius: 5px;
  font-weight: bold;
  margin: auto; 
}

input[type=submit]:hover 
{
  background-color: Red;
  border: 2px solid black;
}

input[type=button] 
{
  background-color: RoyalBlue;
  border: 2px solid black;
  border-color: black;
  color: white; 
  border-radius: 5px;
  height:35px;
  width:80px;
  font-weight: bold;
  margin: auto; 
}

input[type=button]:hover 
{
  background-color: green;
  border: 2px solid black;
}

.button5
{
  background-color: black;
  border: 2px solid black;
  border-color: black;
  color: white; 
  border-radius: 5px;
  height:35px;
  width:80px;
  font-weight: bold;
  margin: auto; 
}
</style>

<script type="text/javascript"> 
	  
	  function deletevendor() 
	  {
				alert("Item Deleted from Database");
			
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
			<li><a href="../ManageStock/manageMain.php">Manage Store</a></li>
			<li class="dropdown"><a href="../ManageRequest/requestItem.php"><span>Request</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="../ManageRequest/requestMain.php">Manage Request</a></li>
            </ul>
          </li>
			<li><a class="active" href="../ManageVendor/managevendor.php">Vendor</a></li>
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
	
	  <!-- ======= About Section ======= -->
    <div id="about" class="about-area area-padding">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="section-headline text-center">
              <h2>Vendor List</h2>
            </div>
          </div>
        </div>
        <div class="row">
          <!-- single-well start-->

 <center> 
	 	<div class="vendor">
		<div class="vendorlist">
			<form method="post" action="../../Controller/VendorController/insertvendor.php">
			<div class="input_field">
				<label>Vendor ID</label>
				<input type="text" name="vendorID" class="input" required>				
			</div>
			<div class="input_field">
				<label>Vendor Name</label>
				<input type="text" name="vendor_name" class="input" required>				
			</div>
			<div class="input_field">
				<label>Vendor Address</label>
				<input type="text" name="vendor_address" class="input" required>				
			</div>
			<div class="input_field">
				<label>Vendor Phone Number</label>
				<input type="text" name="vendor_phone" class="input" required>				
			</div>
			<div class="input_field">
				<label>Vendor Email</label>
				<input type="text" name="vendor_email" class="input" required>				
			</div>
			<div class="input_field">
				<label>Vendor Item</label>
				<input type="text" name="vendor_item" class="input" required>				
			</div>
			<div>
				<br>
				<input type="submit" class="btn" name="Add" value="Add" required>
			</div>
			<div>
				
			</div>
			</form>
		</div>
	</div>
	
	<div class="display">
	<br><br>
	<form action="searchVendor.php" method="POST">
        <div>
            <input type="text" name="searchvendor" placeholder="Insert Vendor ID to Search..">
            
            <button class="button button5" type="submit">Search</button>
        </div>
        </form> 
		<br><br>
		<div class="ta">
			<table style="width:100%"; style="border-collapse:collapse;">
				<tr>
					<th>Vendor ID</th>
					<th>Vendor Name</th>
					<th>Vendor Email</th>
					<th>Vendor Address</th>
					<th>Vendor Phone Number</th>
					<th>Vendor's Item</th>	
					<th></th>		
				</tr>

				<?php
				include_once ("../../Controller/VendorController/insertvendor.php");
			
				$query = "SELECT * FROM vendor_list";
				$result = mysqli_query($conn,$query);
					
					
					if ($result-> num_rows > 0){
						while ($row = $result-> fetch_assoc()){
							
							$uID = $row['vendorID'];
							
						?>
						
						<tr>
							
						<td><?php echo $row["vendorID"];?></td>
						<td><?php echo $row["vendor_name"];?></td>
						<td><?php echo $row["vendor_email"];?></td>
						<td><?php echo $row["vendor_address"];?></td>
						<td><?php echo $row["vendor_phone"];?></td>
						<td><?php echo $row["vendor_item"];?></td>
						<td style="text-align:center;">
						<a href="updateVendor.php?GetID=<?php echo $uID ?>"><input type="button" value="Update"></a>
						<a href="../../Controller/VendorController/deleteVendor.php?DeleteID=<?php echo $uID ?>"><input style="background-color:red;" type="button" name="Delete" value="Delete" onclick="deletevendor()"></a></td>
						
						</tr>
						<?php
						}
					}
					?>
				</table>
						
		</div>
	</div>
 
  </center>  
 



  </main><!-- End #main -->

<!-- ======= Footer ======= -->
  <footer>
    <div class="footer-area">
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <div class="footer-content">
              <div class="footer-head">
                <div class="footer-logo">
                  <h2><span>f</span>KIMS</h2>
                </div>

                <p>Manage Your Item Effectively.</p>
                <div class="footer-icons">

                </div>
              </div>
            </div>
          </div>
          <!-- end single footer -->
          <div class="col-md-4">
            <div class="footer-content">
              <div class="footer-head">
                <h4>information</h4>
                <p>
                  DEVELOP BY GENESYSY 2021.
                </p>
                <div class="footer-contacts">
                  <p><span>Tel:</span> +123 456 789</p>
                  <p><span>Email:</span> genesys@mail.com</p>
                  <p><span>Working Hours:</span> 9am-5pm</p>
                </div>
              </div>
            </div>
          </div>
          <!-- end single footer -->
          <div class="col-md-4">
            <div class="footer-content">
              <div class="footer-head">
                <h4>Instagram</h4>
                <div class="img">
                  <a href="#"><img style="width:250px;height:250px;" src="../assets/img/portfolio/Logo Genesys.png" alt=""></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
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