<!DOCTYPE html>
<html> 
	<head>
        <title>Admin Database Operations</title>
        <link rel="stylesheet" href="style.css">
    </head>
	<ul>
		<li><a class="active" href="Adminpage.php">Admin Home</a></li>
		<li><a href="AddPlane.php">Add Plane</a></li>
		<li><a href="RemovePlane.php">Remove Plane</a></li>
		<li><a href="AddFlight.php">Add Flight</a></li>
		<li><a href="RemoveFlight.php">Remove Flight</a></li>
		<li><a href="Homepage.php">Log Out</a></li>
	</ul>
	<body>
        <h1>Admin Operations</h1>
        <p><br>All Admin Operations on Database</p>
        <p>Current view of the database tables<br><br><br></p>
		<?php 
			require("tableshow.php");
			require("dbconnect.php");
			show_plane($conn);
			echo '<br><br>';
			show_flight($conn);
		?>
    </body>
	
</html>
