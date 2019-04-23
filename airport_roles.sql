create role pilot;
grant select on flight, plane_makes_flight to pilot;

create role customer;
grant select on flight, available_tickets, ticket_for_flight, plane_for_flight 
    to customer;
grant update on ticket_holder to customer;
