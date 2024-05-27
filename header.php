<html>
    <heaad>
        <link rel="stylesheet" href="style/styles.css"> 
        <title>
        </title>
    </heaad>
    <style>
        #logo_l {
        width: 25%;
        margin: auto;
        /* overflow: hidden; */
        /* border: 1px solid #ddd; */
        }
       
    </style>
    <body>
        <!-- <ui style="align: right;">
            <img style="float: right;" src="images/logo.png" alt="Logo">
        </ui> -->
                    <!-- <img id="logo" src="images/logo.png" alt="Logo"> -->
                    <img id="logo_l" src="images/logo.jpg" alt="logo">
                    <img id="line" src="images/line.png" alt="line" style="margin-left: 100px;">
                    <div>
                        <ul>
				<li style="margin-left: 100px;"><a href="home_page.php"><i class="fa fa-home" aria-hidden="true"></i> Home</a></li>
				<li style="margin-left: 100px;">
					<?php
						if(isset($_SESSION['login_user'])&&$_SESSION['user_type']=='Customer')
						{
							echo "<a href=\"book_tickets.php\"><i class=\"fa fa-ticket\" aria-hidden=\"true\"></i> Book Tickets</a>";
						}
						else if(isset($_SESSION['login_user'])&&$_SESSION['user_type']=='Administrator')
						{
							echo "<a href=\"admin_ticket_message.php\"><i class=\"fa fa-ticket\" aria-hidden=\"true\"></i> Book Tickets</a>";
						}
						else
						{
							echo "<a href=\"login_page.php\"><i class=\"fa fa-ticket\" aria-hidden=\"true\"></i> Book Tickets</a>";
						}
					?>
				</li>
				<li style="margin-left: 100px;"><a href="about.php"><i class="fa fa-user" aria-hidden="true"></i> FAQ</a></li>
				<li style="margin-left: 100px;"><a href="pnrall.php"><i class="fa fa-plane" aria-hidden="true"></i> Check PNR </a></li>

				<li style="margin-left: 100px;">
					<?php
						if(isset($_SESSION['login_user'])&&$_SESSION['user_type']=='Customer')
						{
							echo "<a href=\"customer_homepage.php\"><i class=\"fa fa-sign-in\" aria-hidden=\"true\"></i> Login</a>";
						}
						else if(isset($_SESSION['login_user'])&&$_SESSION['user_type']=='Administrator')
						{
							echo "<a href=\"admin_homepage.php\"><i class=\"fa fa-sign-in\" aria-hidden=\"true\"></i> Login</a>";
						}
						else
						{
							echo "<a href=\"login_page.php\"><i class=\"fa fa-sign-in\" aria-hidden=\"true\"></i> Login</a>";
						}
					?>
                    
				</li>
			</ul>
		</div>

        </body>
</html>