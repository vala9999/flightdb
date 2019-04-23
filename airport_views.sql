create view available_tickets as (
	select ticket_id, seating_type, price, ticket_depart_timestamp
	from ticket_holder where username = null
);

