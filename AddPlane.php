<!DOCTYPE html>
<html>

   <head>
      <title>Add a New Plane</title>
   </head>

   <body>
   <div style="height:900px; background-color: lightblue;" align="center">
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
               "('$i_planeID','$i_firstClass','$i_secondClass', '$i_econClass');";
            //$sql = "insert into plane_makes_flight(flight_id, plane_id) values('NULL','$i_planeID');";  The plane makes flight table needs to be updated somehow... Haven't decided how to do it yet
			//mysqli_select_db($conn,'university');
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
     <p>Enter flight info for insertion <br> </p>
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
      $sql = "insert into plane_makes_flight(flight_id, plane_id) values('NULL','$i_planeID');";  
	   // should update the plane_makes_flight table
      $retval = mysqli_query($conn, $sql);
           
      if(! $retval ) {
         die('Could not enter data: ' . mysqli_error($conn));
      }
   ?>
   
   <hr width="50">
<a href="Frontpage.html" style="color:red;font-weight:bold;">Home</a>
<hr width="50">
   </div>
   
   </body>
</html>
