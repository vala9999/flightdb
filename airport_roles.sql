create role pilot;
grant select on flight, plane_makes_flight to pilot;

create role customer;
grant select on ticket_holder, 
