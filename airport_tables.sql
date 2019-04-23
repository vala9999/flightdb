create table flight (
	flight_id varchar(8),
	flight_depart_timestamp timestamp,
	ETA timestamp,
	destination_airport varchar(64),
	departure_airport varchar(64),
	primary key (flight_id)
	);
	
create table plane (
	plane_id varchar(8),
	first_class_seats numeric(3,0) check (first_class_seats >= 0),
	second_class_seats numeric(3,0) check (second_class_seats >= 0),
	economy_seats numeric(3,0) check (economy_seats >= 0),
	primary key (plane_id)
	);
	
create table ticket_holder (
	ticket_id varchar(16),
	seating_type varchar(32),
	price numeric(5,2) check (price > 0),
	ticket_depart_timestamp timestamp,
	username varchar(32),
	primary key (ticket_id)
	);
	
create table ticket_for_flight (
	ticket_id varchar(16),
	flight_id varchar(8),
	primary key (ticket_id, flight_id),
	foreign key (ticket_id) references ticket_holder (ticket_id),
	foreign key (flight_id) references flight (flight_id)
	);
	
create table plane_makes_flight (
	flight_id varchar(8),
	plane_id varchar(8),
	primary key (flight_id, plane_id),
	foreign key (flight_id) references flight (flight_id),
	foreign key (plane_id) references plane (plane_id)
	);	
	