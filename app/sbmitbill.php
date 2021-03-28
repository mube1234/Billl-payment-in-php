<?php
$id=$_POST['id'];
$amount=$_POST['amount'];
echo $id." == ".$amount;
$bank="select amount from bank WHERE  ";
$bank_run=mysqli_query($conn, $bank);
$bank_row=mysqli_fetch_array($bank_run);
$balance=$bank_row['amount'];
$bal2=$bank_row['amount'];
@$acount=  $_SESSION['account'];


$user_id=$_GET['idnumber'];
$bill="select * from bill WHERE id='$user_id'";
$bill_run=mysqli_query($conn, $bill);
$bill_row=mysqli_fetch_array($bill_run);

$price=$bill_row['price'];
$consumtion=$bill_row['consumption'];
$total=$price*$consumtion;

$kifiya=$total+$balance;
$your=$bal2-$total;

?>
