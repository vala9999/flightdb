delimiter //
create procedure purchase_ticket (in uname varchar(32), 
in ticket_num varchar(16))
begin
	update ticket_holder set username = un 
	where ticket_holder = ticket_num;
end //

create procedure return_ticket (in ticket_num varchar(16))
begin
	update ticket_holder set username = null 
	where ticket_holder = ticket_num;
end //
						      
create procedure delay_flight (in fly_id varchar(8), in dept_time timestamp)
begin
	update flight set departure_timestamp = dept_time
	where flight_id = fly_id;
end //
delimiter ;
						      
		
