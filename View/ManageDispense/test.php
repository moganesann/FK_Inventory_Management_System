<html>
<body>


 <?php
  
    // Connect to database 
    $con = mysqli_connect("localhost","root","","fkims");
         
    // Get all the categories from user table
    $sql = "SELECT * FROM `user` WHERE id LIKE 'AD%';";
    $all_categories = mysqli_query($con,$sql);
   
    
?>



<form name="dispenseitem" action="../../Controller/DispenseController/dispenseController.php" method="post">
					  <center>
					  <table>
					  <tr>
					  <th><label for="adminID">Admin ID:</label></th>
					  <td>
					   <select type="text"  id="id" name="id" >
            <?php 
             
                while ($user = mysqli_fetch_array($all_categories)):; 
            ?>
                <option value="<?php echo $user["id"];
                   
                ?>">
				<?php echo $user["id"];?>
                   
                </option>
            <?php 
                endwhile; 
            ?>
        </select>
		
		</html>
</body>