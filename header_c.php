<?php
	// session_start();
	// if($_SESSION['login_user']==null){
	// 	header('location:home_page.php');
	// }
?>
<html>
	<head>
		<title>
			Welcome Customer
		</title>
		<style>
			input {
    			border: 1.5px solid #030337;
    			border-radius: 4px;
    			padding: 7px 30px;
			}
			input[type=submit] {
				background-color: #030337;
				color: white;
    			border-radius: 4px;
    			padding: 7px 45px;
    			margin: 0px 127px
			}
			input[type=date] {
				border: 1.5px solid #030337;
    			border-radius: 4px;
    			padding: 5.5px 44.5px;
			}
			select {
    			border: 1.5px solid #030337;
    			border-radius: 4px;
    			padding: 6.5px 75.5px;
			}
            #logo_C {
                width: 25%;
                /* margin: auto; */
                /* overflow: hidden; */
                /* border: 1px solid #ddd; */
            }
		</style>
        <left>
		<link rel="stylesheet" type="text/css" href="css/style.css"/>
		<link rel="stylesheet" href="font-awesome-4.7.0\css\font-awesome.min.css">
        </left>
	</head>
    <img id="logo_C" src="images/logo.jpg" alt="logo">
    <img id="line" src="images/line.png" alt="line" style="margin-left: 100px;">
	<body>

		<div>
			<ul>
				<li style="margin-left: 100px;"><a href="customer_homepage.php"><i class="fa fa-home" aria-hidden="true"></i> Home</a></li>
				<li style="margin-left: 100px;"><a href="dashboard.php"><i class="fa fa-desktop" aria-hidden="true"></i> Dashboard</a></li>
				<li style="margin-left: 100px;"><a href="about_C.php"><i class="fa fa-user" aria-hidden="true"></i> FAQ</a></li>
                <li style="margin-left: 100px;"><a href="pnr.php"><i class="fa fa-desktop" aria-hidden="true"></i> Print Ticket</a></li>
				<li style="margin-left: 100px;"><a href="logout_handler.php"><i class="fa fa-sign-out" aria-hidden="true"></i> Logout</a></li>
			</ul>
		</div>
		<?php
			// echo "<h3 class='fa fa-user fa-2x'style='margin-left: 80%;'> Welcome ".$_SESSION['login_user']."</h3>";
			// require_once('Database Connection file/mysqli_connect.php');
			// $query="SELECT count(*),frequent_flier_no,mileage FROM Frequent_Flier_Details WHERE customer_id=?";
			// $stmt=mysqli_prepare($dbc,$query);
			// mysqli_stmt_bind_param($stmt,"s",$_SESSION['login_user']);
			// mysqli_stmt_execute($stmt);
			// mysqli_stmt_bind_result($stmt,$cnt,$frequent_flier_no,$mileage);
			// mysqli_stmt_fetch($stmt);
			// if($cnt==1)
			// {
			// 	echo "<h4 style='padding-left: 20px;'>Frequent Flier No.: ".$frequent_flier_no."&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;Mileage: ".$mileage." points</h4><br>";
			// }
			// mysqli_stmt_close($stmt);
			// mysqli_close($dbc);
		?>