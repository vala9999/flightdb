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
		<li><a href="Adminpage.php">Admin Home</a></li>
		
	</ul>
	<body>
        <h1>Home</h1>
		<br></br>
        <p>Buy or Cancel a Ticket</p>
        
		<?php 
			require("tableshow.php");
			require("dbconnect.php");
			show_plane($conn);
			echo '<br> </br>';
			
		?>
    </body>
	
</html>
