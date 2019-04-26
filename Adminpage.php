<!DOCTYPE html>
<html> 
	<head>
        <title>Admin Database Operations</title>
        <link rel="stylesheet" href="style.css">
    </head>
	<ul>
		<li><a href="Homepage.php">Home</a></li>
		<li><a href="BuyTicket.php">Buy Ticket</a></li>
		<li><a href="CancelTicket.php">Cancel Ticket</a></li>
		<li><a class="active" href="Adminpage.php">Admin Home</a></li>
		<li><a href="AddPlane.php">Add Plane</a></li>
		<li><a href="RemovePlane.php">Remove Plane</a></li>
		<li><a href="AddFlight.php">Add Flight</a></li>
		<li><a href="RemoveFlight.php">Remove Flight</a></li>
	</ul>
	<body>
        <h1>Admin Operations</h1>
		<br></br>
        <p>All Admin Operations on Database</p>
        <p>Current view of the database tables</p>
		<?php 
			require("tableshow.php");
			require("dbconnect.php");
			show_plane($conn);
			echo '<br> </br>';
			show_flight($conn);
			echo '<br> </br>';
			show_plane_makes_flight($conn);
		?>
    </body>
	
</html>
