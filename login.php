<!DOCTYPE html>
<html>
   <head>    
      <title>Log in as admin</title>
	  <link rel="stylesheet" href="style.css"> 
   </head>
   <ul>
	   <li><a href="Homepage.php">Home</a></li>
	   <li><a href="BuyTicket.php">Buy Ticket</a></li>
	   <li><a href="CancelTicket.php">Cancel Ticket</a></li>
	   <li><a class="active" href="login.php">Admin Login</a></li>
   </ul>
   <body>
      <h1>Admin Login</h1>
	  <br><br><br><br>
	  <?php
	      if(isset($_POST['add'])) {
              $i_pass = $_POST['$i_pass'];
		      if ($i_pass == 'smitty') {
			      header('Location: Adminpage.php');
		      }
		      else {
			      echo '<p>Incorrect password. Try again.</p><br><br>';
		      }
		  }
	  ?>
      <form method = "post" action = "<?php $_PHP_SELF ?>">
         <table width = "600" border = "0" cellspacing = "1" cellpadding = "2">
		 
            <tr>
               <td width = "250">Password</td>
               <td>
                  <input name = "$i_pass" type = "text" id = "$i_pass">
               </td>
            </tr>
         
            <tr>
               <td width = "250"> </td>
               <td>
                  <input name = "add" type = "submit" id = "add"  value = "Login">
               </td>
            </tr>
			
         </table>
   </div>
   </body>
</html>