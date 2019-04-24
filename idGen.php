<?php

function generateID(){ //generates an 8-Digit ID
	
	$newID = mt_rand (10000000 , 99999999);
	return $newID;
}
?>