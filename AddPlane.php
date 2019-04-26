<!DOCTYPE html>
<html>

   <head>
        <title>Add Plane</title>
        <link rel="stylesheet" href="style.css">
    </head>
	<ul>
		<li><a href="Homepage.php">Home</a></li>
		<li><a href="BuyTicket.php">Buy Ticket</a></li>
		<li><a href="CancelTicket.php">Cancel Ticket</a></li>
		<li><a href="Adminpage.php">Admin Home</a></li>
		<li><a class="active" href="AddPlane.php">Add Plane</a></li>
		<li><a href="RemovePlane.php">Remove Plane</a></li>
		<li><a href="AddFlight.php">Add Flight</a></li>
		<li><a href="RemoveFlight.php">Remove Flight</a></li>
	</ul>

   <body>
   <div>
      <?php
	  
		require("tableshow.php");
		require("dbconnect.php");
		require("idGen.php");
	  
         if(isset($_POST['add'])) {
            $i_planeID = generateID();
			$i_firstClass = $_POST['$i_firstClass'];
            $i_secondClass = $_POST['$i_secondClass'];
            $i_econClass = $_POST['$i_econClass'];
			
			echo " <br> Plane table before insertion <br>";
			show_plane($conn);
   
            $sql = "INSERT INTO plane ".
               "(plane_id, first_class_seats, second_class_seats, economy_seats) "."VALUES ".
               "('$i_planeID','$i_firstClass','$i_secondClass', '$i_econClass')";
            $retval = mysqli_query($conn, $sql);
         
            if(! $retval ) {
               die('Could not enter data: ' . mysqli_error($conn));
            }
         
            echo "Entered data successfully\n\n";
			
			echo " <br> Plane table after insertion <br>";
			show_plane($conn);
			
            mysqli_close($conn);
         } 
		 else if(isset($_POST['show'])){
			 
			 show_plane($conn);
		 }	 
		 
		 else {
      ?>
	  <br><br><br><br>
     <p>Enter plane info for insertion <br> </p>
      <form method = "post" action = "<?php $_PHP_SELF ?>">
         <table width = "600" border = "0" cellspacing = "1" cellpadding = "2">
			<tr>
				<td>Plane Id will be randomly assigned</td>
			</tr>
            <tr>
               <td width = "250">Number of 1st Class Seats</td>
               <td>
                  <input name = "$i_firstClass" type = "text" id = "$i_firstClass">
               </td>
            </tr>
         
            <tr>
               <td width = "250">Number of 2nd Class Seats</td>
               <td>
                  <input name = "$i_secondClass" type = "text" id = "$i_secondClass">
               </td>
            </tr>
         
            <tr>
               <td width = "250">Number of Economy Class Seats</td>
               <td>
                  <input name = "$i_econClass" type = "text" id = "$i_econClass">
               </td>
            </tr>
      
			
            <tr>
               <td width = "250"></td>
               <td> </td>
            </tr>
         
            <tr>
               <td width = "250"> </td>
               <td>
                  <input name = "add" type = "submit" id = "add"  value = "insert">
               </td>
            </tr>
			
         </table>
		
	  
   <?php
      }
   ?>
   
   </div>
   
   </body>
</html>