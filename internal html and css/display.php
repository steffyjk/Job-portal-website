<?php
$c =  mysqli_connect("localhost", "root", "","employee");
$q = mysqli_query($c,"SELECT * from data");
?>
<html>
<body>
<table align="center"cellpadding = "10" border="20" bordercolordark="#000000">
           <tr>
           <th>Employee Name</th>
		   <th>Emp. no.</th>
           <th>Email</th>
           <th>City</th>
		   <th>Contact</th>
		   <th>Department</th>
		   <th>Designation</th>
           <th><a href="form.php">SIGN UP</th></a>
           </tr>          <br> <br>    	    			 
<h2 align="center">Employee Detail</h2>
		   <?php
           while($res=mysqli_fetch_array($q))
           {
           	echo '<tr>';
            echo '<td>'.$res['ename'].'</td>';
	        echo '<td>'.$res['eno'].'</td>';
		    echo '<td>'.$res['email'].'</td>';		
           	echo '<td>'.$res['city'].'</td>';
           	echo '<td>'.$res['contact'].'</td>';
           	echo '<td>'.$res['department'].'</td>';
           	echo '<td>'.$res['designation'].'</td>';
           	echo '</tr>';
           }
           ?>
           </table>
		   </body>
		   </html>
