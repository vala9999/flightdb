<!DOCTYPE html>
<html>
   <head>
        <title>Buy Ticket</title>
        <link rel="stylesheet" href="style.css">
    </head>
	<ul>
		<li><a href="Homepage.php">Home</a></li>
		<li><a class="active" href="BuyTicket.php">Buy Ticket</a></li>
		<li><a href="CancelTicket.php">Cancel Ticket</a></li>
		<li><a href="login.php">Admin Login</a></li>
	</ul>

   <body>
   <div>
		<?php
		/* NEEDS ALOT OF WORK currently when a flight is added the empty tickets for the flight is created 
		   to buy a ticket you should be able to first select a flight you want a ticket for then select 
		   any availible ticket id's for that flight(As it stands now, this is know where near finished)*/
		require("tableshow.php");
		require("dbconnect.php");
		require("idGen.php");
		
		
        
		if(isset($_POST['add'])) {
            $i_flightID = $_POST['$i_flightID'];
			$i_SClass = $_POST['$i_SClass'];
			
			

   
            $sql = "Update ticket_holder SET username = $i_name WHERE ticket_id = $i_ticketID";
            $retval = mysqli_query($conn, $sql);
         
            if(! $retval ) {
               die('Could not enter data: ' . mysqli_error($conn));
            }
         
            echo "Entered data successfully\n\n";
			
			echo " <br> Plane table after insertion <br>";
			show_ticket_holder_adv($conn, "SELECT * FROM ticket_holder where username != 'NULL'");
			
            mysqli_close($conn);
         } 
		 else if(isset($_POST['show'])){
			 
			 show_plane($conn);
		 }	 
		 
		 else {
			 show_flight($conn);
		?>
	  
     <p><br><br>Enter the flight-ID and Seating Class you want for your flight<br><br></p>
      <form method = "post" action = "<?php $_PHP_SELF ?>">
         <table width = "600" border = "0" cellspacing = "1" cellpadding = "2">
            <tr>
               <td width = "250">Flight ID</td>
               <td>
                  <input name = "$i_flightID" type = "text" id = "$i_flightID">
               </td>
            </tr>  
			
			<tr>
               <td width = "250">Seating Class:<br><br>
			       [FirstClass],<br>
				   [SecondClass],<br>
				   [EconomyClass]
			   </td>
               <td>
                  <input name = "$i_SClass" type = "text" id = "$i_SClass">
               </td>
            </tr>  
			
            <tr>
               <td width = "250"></td>
               <td> </td>
            </tr>
         
            <tr>
               <td width = "250"> </td>
               <td>
                  <input name = "add" type = "submit" id = "add"  value = "submit">
               </td>
            </tr>
			
         </table>
		
	  
   <?php
      }
   ?>
   
   </div>
   
   </body>
</html>