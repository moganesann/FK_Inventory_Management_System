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

//option if click button
            if(isset($_POST['search']))
            {
            
             $sql = "Select * FROM  itemlist INNER JOIN dispenseitem ON itemlist.itemID=dispenseitem.itemID ORDER BY itemName";
             //query
             $result = mysqli_query($conn, $sql);
             //connection to database
             if(mysqli_num_rows($result) > 0)
             {
               while($row = mysqli_fetch_array($result))
                {
             ?>
             <tr>
               <td><?php echo $row["itemID"];?></td>
               <td><?php echo $row["itemName"];?></td>
               <td><?php echo $row["itemBalance"];?></td>
               <td><?php echo $row["itemType"];?></td>
               <td><?php echo $row["itemStatus"];?></td>
               <td><?php echo $row["sectionID"];?></td>
               <td><?php echo $row["dispenseID"];?></td>
               <td><?php echo $row["quantityOut"];?></td>
               <td><?php echo $row["Date"];?></td>
               
             </tr>
             <?php
                }
              }
            }
            elseif(isset($_POST['search2']))
            {
               //option if click button
                if(isset($_POST['search2']))
                {
          
                  $sql = "Select * FROM  itemlist INNER JOIN dispenseitem ON itemlist.itemID=dispenseitem.itemID ORDER BY Date DESC";
                   //query
                  $result = mysqli_query($conn, $sql);
                   //connection to database
                if(mysqli_num_rows($result) > 0)
                {
                while($row = mysqli_fetch_array($result))
                 {
                ?>
                 <tr>
						<td><?php echo $row["itemID"];?></td>
					   <td><?php echo $row["itemName"];?></td>
					   <td><?php echo $row["itemBalance"];?></td>
					   <td><?php echo $row["itemType"];?></td>
					   <td><?php echo $row["itemStatus"];?></td>
					   <td><?php echo $row["sectionID"];?></td>
					   <td><?php echo $row["dispenseID"];?></td>
					   <td><?php echo $row["quantityOut"];?></td>
					   <td><?php echo $row["Date"];?></td>
             
                 </tr>
                 <?php
                 }
               }
            }
          }

            else 
            { 
              $sql = "Select * FROM  itemlist INNER JOIN dispenseitem ON itemlist.itemID=dispenseitem.itemID ";
              $result = mysqli_query($conn, $sql);

              if(mysqli_num_rows($result) > 0)
              {
                while($row = mysqli_fetch_array($result))
                 {
              ?>
              <tr>
                <td><?php echo $row["itemID"];?></td>
               <td><?php echo $row["itemName"];?></td>
               <td><?php echo $row["itemBalance"];?></td>
               <td><?php echo $row["itemType"];?></td>
               <td><?php echo $row["itemStatus"];?></td>
               <td><?php echo $row["sectionID"];?></td>
               <td><?php echo $row["dispenseID"];?></td>
			   <td><?php echo $row["quantityOut"];?></td>
               <td><?php echo $row["Date"];?></td>
                
              </tr>
              <?php
                 }
               }
             }
?>