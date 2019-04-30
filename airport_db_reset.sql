drop table ticket_holder;
drop table plane;
drop table flight;

create table flight (
	flight_id varchar(8),
	flight_depart_timestamp timestamp not null,
	ETA timestamp,
	destination_airport varchar(64) not null,
	departure_airport varchar(64) not null,
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
	ticket_id varchar(8),
	plane_id varchar(8),
	flight_id varchar(8),
	seating_type varchar(32) not null,
	price numeric(5,2) check (price > 0),
	ticket_depart_timestamp timestamp not null,
	username varchar(32),
	primary key (ticket_id),
	foreign key (flight_id) references flight (flight_id),
	foreign key (plane_id) references plane (plane_id)
	);
	
