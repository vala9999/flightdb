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
		
		require("tableshow.php");
		require("dbconnect.php");
		require("idGen.php");
			
		if(isset($_POST['add'])) {
            $i_ticketID = $_POST['$i_ticketID'];
			$i_email = $_POST['email'];
			
            $sql = "update ticket_holder SET username = '$i_email' WHERE ticket_id = $i_ticketID";
            $retval = mysqli_query($conn, $sql);
			
			echo " <br>You reserved these tickets:<br>";
			show_ticket_holder_adv($conn, $sql);
			
            mysqli_close($conn);
         } 
		 else if(isset($_POST['show'])){
			 
			 show_ticket_holder($conn);
		 }	 
		 
		 else {
			 show_ticket_holder($conn);
		?>
	  
     <p><br><br>Enter the flight-ID and Seating Class you want for your flight,<br>
				then enter your email address.<br><br></p>
      <form method = "post" action = "<?php $_PHP_SELF ?>">
         <table width = "600" border = "0" cellspacing = "1" cellpadding = "2">
            <tr>
               <td width = "250">Ticket ID</td>
               <td>
                  <input name = "$i_ticketID" type = "text" id = "$i_ticketID">
               </td>
            </tr>  
			
            <tr>
               <td width = "250">Email Address:</td>
			   <td>
			       <input name = "email" type = "text" id = "email">
               </td>
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
