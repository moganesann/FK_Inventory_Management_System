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
}

.button {
    background-color: purple;
        border-color: white;
        color: white;
        padding: 20px 34px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
		border-radius: 5px;
        font-size: 20px;
		font-weight: bold;
        margin: 4px 2px;
        cursor: pointer;
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
}

input[type=reset]:hover 
{
  background-color: MediumSpringGreen;
}

table, th, td {
  border: 5px solid tan;
  border-collapse: outset;
  text-align: left;
  background-color:#fff;
  color: #fff;
  font-weight: bold;
  font-size: 20px; 
}
th{
	border: 5px solid black;
	border-left:5px solid crimson;
	border-right-color: 5px solid white;
	padding:15px;
	background-color:#08405e;
}
td{
	border: 3px solid black;
	padding:15px;
	background-color:#08405e;
}
input
{
	background-color:#f0f0f5;
	height:28px;
}
.error {
	background-color:#DC143C;
	border: 1px solid black;
   color: white;
   font-weight: bold;
   font-size: 20px;
   width:60%;
   border-radius: 5px;
   margin: 20px auto;
}
</style>
  
<script type="text/javascript">
	  
	
		  function deleteItem() 
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
			<li><a href="../ManageVendor/managevendor.php">Vendor</a></li>
			<li><a class="active" href="../ItemRegistration/ItemRegistration.php"><span>Register</span></a></li>
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
              <h2>Delete Item</h2>
            </div>
          </div>
        </div>
        <div class="row">
          <!-- single-well start-->
		  
 <center> 

				
     		<div class="display">
		<div class="ta">
			<table style="width:100%"; style="border-collapse:collapse;">
				<tr>
					<th>Vendor ID</th>
					<th>Item Type</th>
					<th>Item ID</th>
					<th>Item Name</th>
					<th>Item Quantity</th>
					<th>Item Register Time</th>	
					<th>Item Register Date</th>	
					<th>Section ID</th>	
					<th>Item Description</th>	
					<th></th>		
				</tr>
				<br>
				<a href="../ItemRegistration/VendorList.php" class ="button">Back</a>

				<?php
				include_once ("../../Controller/RegisterController/delete.php");
			
				$query = "SELECT * FROM itemlist";
				$result = mysqli_query($conn,$query);
					
					
					if ($result-> num_rows > 0){
						while ($row = $result-> fetch_assoc()){
							
							$uID = $row['vendorID'];
							
						?>
						
						<tr>
							
						<td><?php echo $row["vendorID"];?></td>
						<td><?php echo $row["itemType"];?></td>
						<td><?php echo $row["itemID"];?></td>
						<td><?php echo $row["itemName"];?></td>
						<td><?php echo $row["itemBalance"];?></td>
						<td><?php echo $row["RegDate"];?></td>
						<td><?php echo $row["RegTime"];?></td>
						<td><?php echo $row["sectionID"];?></td>
						<td><?php echo $row["itemDesc"];?></td>
						<td style="text-align:center;">
						<a href="../../Controller/RegisterController/delete.php?DeleteID=<?php echo $uID ?>"><input style="background-color:red;" type="button" name="Delete" value="Delete" onclick="deleteItem()"></a></td>
						
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