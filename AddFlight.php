<!DOCTYPE html>
<html>

   <head>
      <title>Add a New Flight</title>
   </head>

   <body>
   <div style="height:900px; background-color: lightblue;" align="center">
      <?php
	  
		require("tableshow.php");
		require("dbconnect.php");
		require("idGen.php");
	  
         if(isset($_POST['add'])) {
            $i_flightID = generateID();
			$i_DepartTime = $_POST['i_DepartTime'];
            $i_DepartAP = $_POST['i_DepartAP'];
            $i_DestAP = $_POST['i_DestAP'];
            $i_ETA = $_POST['i_ETA'];
			$i_planeID = $_POST['i_planeID'];
			
			echo " <br> Flight table before insertion <br>";
			show_flight($conn);
   
            $sql = "INSERT INTO flight ".
               "(flight_id,flight_depart_timestamp, ETA, destination_airport, departure_airport) "."VALUES ".
               "('$i_flightID','$i_DepartTime','$i_ETA', '$i_DestAP','$i_DepartAP')";
            
			//Also when a plane is added and assigned to a flight we need to insert availible tickets 
			//corresponding with the number of seats to ticket holder with null in place of passenger_name(this get updated when a someone 'buys' a ticket)
			
			
			//mysqli_select_db($conn,'university');
            $retval = mysqli_query($conn, $sql);
            if(! $retval) {
               die('Could not enter data: ' . mysqli_error($conn));
            }
         
            echo "Entered data successfully\n\n";
			
			echo " <br> Flight table after insertion <br>";
			show_flight($conn);
			
            mysqli_close($conn);
         } 
		 else if(isset($_POST['show'])){
			 
			 show_flight($conn);
		 }	 
		 
		 else {
      ?>
	  <br><br><br><br>
     <p>Enter flight info for insertion <br> </p>
      <form method = "post" action = "<?php $_PHP_SELF ?>">
         <table width = "600" border = "0" cellspacing = "1" cellpadding = "2">
            <tr>
               <td width = "250">Departure Time</td>
               <td>
                  <input name = "i_DepartTime" type = "text" id = "i_DepartTime">
               </td>
            </tr>
         
            <tr>
               <td width = "250">Departure Airport</td>
               <td>
                  <input name = "i_DepartAP" type = "text" id = "i_DepartAP">
               </td>
            </tr>
         
            <tr>
               <td width = "250">Destination  Airport</td>
               <td>
                  <input name = "i_DestAP" type = "text" id = "i_DestAP">
               </td>
            </tr>
      
            <tr>
               <td width = "250"> ETA</td>
               <td> <input name="i_ETA" type= "text" id = "i_ETA"> </td>
            </tr>
			
			<tr>
               <td width = "250"> Plane ID</td>
               <td> <input name="i_planeID" type= "text" id = "i_planeID"> </td>
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
			show_plane_makes_flight($conn); //shows this table to help the user assign a plane to a flight, currently plane_makes_flight doesnt seem to be working as intended
		?>
		
	  
   <?php
      }
   ?>
   <hr width="50">
<a href="Frontpage.html" style="color:red;font-weight:bold;">Home</a>
<hr width="50">
   </div>
   
   </body>
</html>