<?php
	session_start();
	include "header_a.php";
?>
<style>
	table, th, td {
  border:1px solid black;
}
</style>
<h2 style="margin-left: 1050px;">Welcome Administrator!</h2>
<center>
	<h2><u>Currently Active Users</u></h2>
</center>
<?php
require_once('Database Connection file/mysqli_connect.php');
$query="SELECT `customer_id`,`name`,`email`,`phone_no`,`address` FROM `customer` ORDER BY 'name'";
						$stmt=mysqli_prepare($dbc,$query);
						mysqli_stmt_execute($stmt);
						mysqli_stmt_bind_result($stmt,$c_id,$name,$email,$p_no,$add);
						mysqli_stmt_store_result($stmt);
						if(mysqli_stmt_num_rows($stmt)==0)
						{
							echo "<h3>No users are available !</h3>";
						}
						else
						{
							echo "<center>";
							echo "<form action=\"book_tickets2.php\" method=\"post\">";
							echo "<table cellpadding=\"10\"";
							echo "<tr><th>User ID</th>
							<th>Name</th>
							<th>Email</th>
							<th>Phone no.</th>
							<th>Address</th>
							</tr>";
							while(mysqli_stmt_fetch($stmt)) {
        						echo "<tr>
        						<td>".$c_id."</td>
        						<td>".$name."</td>
								<td>".$email."</td>
								<td>".$p_no."</td>
								<td>".$add."</td>
        						</tr>";
								echo "</center>";

    						}
    					}
						?>
	</body>
</html>