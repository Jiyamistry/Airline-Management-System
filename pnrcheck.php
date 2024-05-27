<?php

    session_start();
    error_reporting(1);
  ?>

  <html>
  <style>
table, th, td {
  border:1px solid black;
}
</style>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
        
         <link rel="stylesheet" href="bootstrap/bootstrap.min.css">
         <link rel="stylesheet" href="bootstrap/bootstrap-theme.min.css">
       <script src="bootstrap/jquery.min.js"></script>
        <script src="bootstrap/bootstrap.min.js"></script>
        <link type="text/css" rel="stylesheet" href="css/admform.css"></link>
        
        <script type="text/javascript">
            function printpage()
            {
            var printButton = document.getElementById("print");
            printButton.style.visibility = 'hidden';
            window.print()
             printButton.style.visibility = 'visible';
             }
        </script>
        
        
    </head>
  <?php

$con=mysqli_connect("localhost","root","","airline_reservation");
$q=mysqli_query($con,"select pnr,flight_no,journey_date, class, booking_status, no_of_passengers, lounge_access, priority_checkin, insurance, payment_id, customer_id from ticket_details where pnr='".$_SESSION['user']."'");
$n=  mysqli_fetch_assoc($q);
$stname= $n['pnr'];
$flight_no= $n['flight_no'];
$journey_date= $n['journey_date'];
$class= $n['class'];
$booking_status= $n['booking_status'];
$no_of_passengers= $n['no_of_passengers'];
$lounge_access= $n['lounge_access'];
$priority_checkin= $n['priority_checkin'];
$insurance= $n['insurance'];
$payment_id= $n['payment_id'];
$customer_id= $n['customer_id'];




$id=$_SESSION['user'];

$result = mysqli_query($con,"SELECT * FROM passengers WHERE pnr='".$_SESSION['user']."'");
                    
                    while($row = mysqli_fetch_array($result))
                      {
?>

<hr style="border: 1px solid black;border-style: dashed;">
<center><img src='images/logo.jpg' class='img-thumbnail' width='500px'></center>
<center><h2>Airpot Authority of India</h2></center>
<center><h3>Boarding Pass - Flight Reservation Slip</h3></center>
<center><h3>Booking status: <?php echo $booking_status;?></h3></center>
<center><h2><u>Ticket details</u></h2></center>
<center>
<table style="width:40%">
  <tr>
    <td><font style="font-family: Verdana; align: center;">PNR : </font></td>
    <td style="width:50%;" colspan="3"> <?php echo $id;?> </td><br> 
  </tr>
  <tr>
    <td><font style="font-family: Verdana;">Flight No : </font></td>
    <td style="width:8%;" colspan="3"> <?php echo $flight_no;?> </td><br>
  </tr>
  <tr>
    <td><font style="font-family: Verdana;">Date of journey : </font></td>
    <td style="width:8%;" colspan="3"> <?php echo $journey_date;?> </td><br>
  </tr>
  <tr>
    <td><font style="font-family: Verdana;">Class : </font></td>
    <td style="width:8%;" colspan="3"> <?php echo $class;?> </td><br>
  </tr>
  <tr>
    <td><font style="font-family: Verdana;">Payment ID : </font></td>
    <td style="width:8%;" colspan="3"> <?php echo $payment_id;?> </td><br>
  </tr>
  <tr>
    <td><font style="font-family: Verdana;">Status: </font></td>
    <td style="width:58%;" colspan="3"> <?php echo $booking_status;?> </td><br>
  </tr>
</table>
</center><br><br>
<center><h2><u>Passenger details</u></h2></center>
<center>
  <table style="width:40%">
    <tr>
      <td><font style="font-family: Verdana;">Passenger No : </font></td>
      <td colspan="3"> <?php echo ''. $row[0]. '   ' ?></tr>
      <tr>
        <td><font style="font-family: Verdana;">Name : </font></td>
        <td colspan="3"> <?php echo ''. $row[2]. '   ' ?><br>
      </tr>
      <tr>
        <td><font style="font-family: Verdana;">Age : </font></td>
        <td><?php echo ' '.$row[3] ?></td></td>
        <tr>
          <td><font style="font-family: Verdana;">Gender : </font></td>
          <td  colspan="3"><?php echo $row[4] ?> </td>
</tr>
        <!-- <tr>
          <td><font style="font-family: Verdana;">Meail Choice : </font></td>
          <td> <?php echo $row[5] ?></td>
</tr> -->
<tr>
  <td><font style="font-family: Verdana;">Priority Checkin : </font></td>
  <td style="width:8%;" colspan="3"> <?php echo $priority_checkin;?> </td><br>
</tr>
<tr>
  <td><font style="font-family: Verdana;">Lounge Access : </font></td>
  <td style="width:8%;" colspan="3"> <?php echo $lounge_access;?> </td><br>
</tr>
<tr>
  <td><font style="font-family: Verdana;">Insurance :  </font></td>
  <td style="width:8%;" colspan="3"> <?php echo $insurance;?> </td><br>
</tr>
<tr>
  <td><font style="font-family: Verdana;">Booked By (Username) : </font></td>
  <td style="width:8%;" colspan="3"> <?php echo $customer_id;?> </td><br>
</tr>
</table>
</center>
<center><img src='images/ticket.png' class='img-thumbnail' width='1000px'></center>

                 
                       </table></center>
                               </div>
                            </div>
            </div>
        <?php
              }
        ?>
 <p> 
<center> <input type="submit" id="print" class="toggle btn btn-primary" value="Print" onclick="printpage();"></center><br><br>
<CENTER><a class="print_hide" href="pnr.php">Check other PNR</a></center>
</p>
   <style>
     @media print {
      .print_hide{
        display:none;
      }
     }
   </style> 

    </body>
</html>


                     