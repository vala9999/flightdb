<!DOCTYPE html>
<html>

   <head>
        <title>Remove Plane</title>
        <link rel="stylesheet" href="style.css">
    </head>
	<ul>
		<li><a href="Adminpage.php">Admin Home</a></li>
		<li><a href="AddPlane.php">Add Plane</a></li>
		<li><a class="active" href="RemovePlane.php">Remove Plane</a></li>
		<li><a href="AddFlight.php">Add Flight</a></li>
		<li><a href="RemoveFlight.php">Remove Flight</a></li>
		<li><a href="Homepage.php">Log Out</a></li>
	</ul>

   <body>
   <div>
      <?php
	  
		require("tableshow.php");
		require("dbconnect.php");
		require("idGen.php");
	  
		show_plane($conn);
         if(isset($_POST['add'])) {
            $i_planeID = $_POST['$i_planeID'];

			echo "<p><br>Plane table before deletion above<br></p>";
			$sql1 = "DELETE FROM ticket_holder WHERE plane_id = $i_planeID";
            $sql2 = "DELETE FROM plane WHERE plane_id = $i_planeID";
            
			//mysqli_select_db($conn,'university');
			$retval1 = mysqli_query($conn, $sql1);
         
            if(! $retval1 ) {
               die('Could not enter data: ' . mysqli_error($conn));
            }
			
			
            $retval2 = mysqli_query($conn, $sql2);
         
            if(! $retval2 ) {
               die('Could not enter data: ' . mysqli_error($conn));
            }
			
			echo " <p><br>Plane table after deletion below<br><br></p>";
			show_plane($conn);
			
            mysqli_close($conn);
         } 

		 else if(isset($_POST['show'])){
			 
			 show_plane($conn);
		 }	 
		 
		 else {
      ?>

     <p><br><br>Enter plane info for deletion <br><br></p>
      <form method = "post" action = "<?php $_PHP_SELF ?>">
         <table width = "600" border = "0" cellspacing = "1" cellpadding = "2">
            <tr>
               <td width = "250">Plane ID</td>
               <td>
                  <input name = "$i_planeID" type = "text" id = "$i_planeID">
               </td>
            </tr>
      
			
            <tr>
               <td width = "250"></td>
               <td> </td>
            </tr>
         
            <tr>
               <td width = "250"> </td>
               <td>
                  <input name = "add" type = "submit" id = "add"  value = "delete">
               </td>
            </tr>
			
         </table>
		
	  
   <?php
      }
   ?>
   
   </div>
   
   </body>
</html>