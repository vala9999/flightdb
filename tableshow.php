<?php

function show_flight($conn){

//include "dbconnect.php";

$sql = "SELECT * FROM flight";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
	
	echo "<br><h3 id='TT'> Flight Table<h3> <br>";
	
	echo '<table border>';
	echo '<thead><tr>';
	echo '<th>'."Flight ID".'</th>'.'<th>'."Departure Time".'</th>'.'<th>'."ETA".'</th>'.'<th>'."Destination Airport".'</th>'.'<th>'."Departure Airport".'</th>';
	echo '</tr></thead>';
	echo '<tbody>';

	while($row = $result->fetch_assoc()) {
		echo '<tr>';
        echo "<td>" . $row["flight_id"]. "</td>";
		echo "<td>" . $row["flight_depart_timestamp"]. "</td>";
		echo "<td>" . $row["ETA"]. "</td>";
		echo "<td>" . $row["destination_airport"]. "</td>";
		echo "<td>" . $row["departure_airport"]. "</td>";
		echo '</tr>';
    }
	
	echo '</tbody>';
	echo '</table>';
	
    // output data of each row
    
	
} else {
    echo "0 results";
}
//$conn->close();
}

function show_plane($conn){

//include "dbconnect.php";

$sql = "SELECT * FROM plane";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
	
	echo "<br><h3 id='TT'> Plane Table<h3> <br>";
	
	echo '<table border>';
	echo '<thead><tr>';
	echo '<th>'."Plane ID".'</th>'.'<th>'."1st Class Seats".'</th>'.'<th>'."2nd Class Seats".'</th>'.'<th>'."Economy Seats".'</th>';
	echo '</tr></thead>';
	echo '<tbody>';

	while($row = $result->fetch_assoc()) {
		echo '<tr>';
        echo "<td>" . $row["plane_id"]. "</td>";
		echo "<td>" . $row["first_class_seats"]. "</td>";
		echo "<td>" . $row["second_class_seats"]. "</td>";
		echo "<td>" . $row["economy_seats"]. "</td>";
		echo '</tr>';
    }
	
	echo '</tbody>';
	echo '</table>';
	
    // output data of each row
    
	
} else {
    echo "0 results";
}
//$conn->close();
}

function show_plane_makes_flight($conn){

//include "dbconnect.php";

$sql = "SELECT * FROM plane_makes_flight";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
	
	echo "<br><h3 id='TT'> Planes assigned to Flights Table<h3> <br>";
	
	echo '<table border>';
	echo '<thead><tr>';
	echo '<th>'."Plane ID".'</th>'.'<th>'."Flight ID".'</th>';
	echo '</tr></thead>';
	echo '<tbody>';

	while($row = $result->fetch_assoc()) {
		echo '<tr>';
        echo "<td>" . $row["plane_id"]. "</td>";
		echo "<td>" . $row["flight_id"]. "</td>";
		echo '</tr>';
    }
	
	echo '</tbody>';
	echo '</table>';
	
    // output data of each row
    
	
} else {
    echo "0 results";
}
//$conn->close();
}

function show_ticket_holder($conn){

//include "dbconnect.php";

$sql = "SELECT * FROM ticket_holder";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
	
	echo "<br><h3 id='TT'> Ticket Holders<h3> <br>";
	
	echo '<table border>';
	echo '<thead><tr>';
	echo '<th>'."Ticket ID".'</th>'.'<th>'."Seating Type".'</th>'.'<th>'."Price".'</th>'.'<th>'."Departure Time".'</th>'.'<th>'."Name".'</th>';
	echo '</tr></thead>';
	echo '<tbody>';

	while($row = $result->fetch_assoc()) {
		echo '<tr>';
        echo "<td>" . $row["ticket_id"]. "</td>";
		echo "<td>" . $row["seating_type"]. "</td>";
		echo "<td>" . $row["price"]. "</td>";
		echo "<td>" . $row["ticket_depart_timestamp"]. "</td>";
		echo "<td>" . $row["username"]. "</td>";
		echo '</tr>';
    }
	
	echo '</tbody>';
	echo '</table>';
	
    // output data of each row
    
	
} else {
    echo "0 results";
}
//$conn->close();
}

function show_ticket_holder_adv($conn, $sql){

//include "dbconnect.php";

//$sql = "SELECT * FROM ticket_holder";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
	
	echo "<br><h3 id='TT'> Ticket Holders<h3> <br>";
	
	echo '<table border>';
	echo '<thead><tr>';
	echo '<th>'."Ticket ID".'</th>'.'<th>'."Seating Type".'</th>'.'<th>'."Price".'</th>'.'<th>'."Departure Time".'</th>'.'<th>'."Name".'</th>';
	echo '</tr></thead>';
	echo '<tbody>';

	while($row = $result->fetch_assoc()) {
		echo '<tr>';
        echo "<td>" . $row["ticket_id"]. "</td>";
		echo "<td>" . $row["seating_type"]. "</td>";
		echo "<td>" . $row["price"]. "</td>";
		echo "<td>" . $row["ticket_depart_timestamp"]. "</td>";
		echo "<td>" . $row["username"]. "</td>";
		echo '</tr>';
    }
	
	echo '</tbody>';
	echo '</table>';
	
    // output data of each row
    
	
} else {
    echo "0 results";
}
//$conn->close();
}
?>