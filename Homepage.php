<!DOCTYPE html>
<html> 
	<head>
        <title>Home Page</title>
        <link rel="stylesheet" href="style.css">
    </head>
	<ul>
		<li><a class="active" href="Homepage.php">Home</a></li>
		<li><a href="BuyTicket.php">Buy Ticket</a></li>
		<li><a href="CancelTicket.php">Cancel Ticket</a></li>
		<li><a href="login.php">Admin Login</a></li>
	</ul>
	<body>
        <h1>Home</h1>
        <p><br>List of available tickets<br><br><br></p>
        
		<?php 
			require("tableshow.php");
			require("dbconnect.php");

            $sql = "select * from available_tickets natural join flight;";
            $retval = mysqli_query($conn, $sql);
         
            if(! $retval ) {
               die(mysqli_error($conn));
            }
			
			show_ticket_holder($conn, $sql);
			
            mysqli_close($conn);
			
			echo '<br> </br>';
			
		?>
    </body>
	
</html>
