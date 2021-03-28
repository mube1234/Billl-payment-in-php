<?php
include("config.php");
session_start();

?>

<link rel="stylesheet" href="/books/bootstrap/css/bootstrap.css">
<script src="/books/bootstrap/js/jquery3.3.1.min.js"></script>
<script src="/books/bootstrap/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="/books/bootstrap/css/style.css">
<?php
include("layouts/top-menu.php");
?>
</br>
<div class="container-fluid">
    <br><br><br><br>
    <div class="row">
        <div class="col-sm-4">
            <form class="" action="" method="post">
                <input type="text" name="id" value="<?php echo  $id=$_GET['idnumber'];?>">
                <input type="submit" name="submit" value="look">

            </form>
        </div>

        <div class="col-sm-8">
            <div class="team-member wow fadeInLeft" data-wow-duration="2s">
                <div class="panel panel-success">
                    <div class="panel-heading">
                        <h4>Making payment</h4>

                    </div>
                    <div class="panel-body">


                        <?php
                        if(isset($_POST['submit'])) {
                            $user_id = $_GET['idnumber'];

                            $user = "select * from users WHERE Id='$user_id'";
                            $user_run = mysqli_query($conn, $user);
                            $user_row = mysqli_fetch_array($user_run);


                            $id = $user_row['Id'];
                            $fname = $user_row['fname'];
                            $lname = $user_row['lname'];
                            $bill_no = $user_row['billno'];
                            $account_no = $user_row['bankacc'];
                      // selecting users id from bill table
                            $bill = "select * from bill WHERE id='$user_id'";
                            $bill_run = mysqli_query($conn, $bill);
                            $bill_row = mysqli_fetch_array($bill_run);
                            $amount = $bill_row['Amount'];
                            $prev = $bill_row['prev'];
                            $present = $bill_row['pres'];
                            $price = $bill_row['price'];
                            $consumtion = $bill_row['consumption'];
                            $total = $price * $consumtion;
                            //form model in the table form
                            ?>

                            <form class="" action="" method="post">
                                <table border="0">
                                    <tr>
                                        <td>ID:</td>
                                        <td> <?php echo $id ?></td>
                                    </tr>
                                    <tr>
                                        <td></br></td>
                                    </tr>
                                    <tr>
                                        <td>bill_number:</td>
                                        <td><?php echo $bill_no; ?></td>
                                    </tr>
                                    <tr>
                                        <td></br></td>
                                    </tr>
                                    <tr>
                                        <td>Account number:</td>
                                        <td><?php echo $account_no; ?></td>
                                    </tr>
                                    <tr>
                                        <td></br></td>
                                    </tr>
                                    <tr>
                                        <td>Consumption:</td>
                                        <td><?php echo $consumtion ?></td>
                                    </tr>
                                    <tr>
                                        <td></br></td>
                                    </tr>
                                    <tr>
                                        <td>Full name:</td>
                                        <td>
                                            <?php echo $fname . ' ' . $lname ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td></br></td>
                                    </tr>
                                    <tr>
                                        <td>previous reading:</td>
                                        <td>
                                            <?php echo $prev ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td></br></td>
                                    </tr>
                                    <tr>
                                        <td>present reading:</td>
                                        <td>
                                            <?php echo $present ?>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td></br></td>
                                    </tr>
                                    <tr>
                                        <td> Amount:</td>
                                        <td>
                                            <?php echo $amount ?>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td></br></td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <button type class="btn btn-success" name="pay">makepay</button>
                                        </td>
                                    </tr>
                                </table>
                            </form>
                            <?php
                        }
                     //select data account number from users data table
                            $accnumber = "select bankacc from users WHERE Id=$id ";
                            $ba = mysqli_query($conn, $accnumber);

                            $bank_row = mysqli_fetch_array($ba);
                           $a=$bank_row[0];
         // select the balance of user from users bank for comparing with value
                            $bank = "select amount from bank WHERE accountno=$bank_row[0] ";
                            $ba = mysqli_query($conn, $bank);

                            $bank_row = mysqli_fetch_array($ba);

                        $amountb = "select Amount from bill WHERE id=$id";
                        $ba = mysqli_query($conn, $amountb);

                        $amount = mysqli_fetch_array($ba);


                            ?>

                            <?php
            //clicking the button to make the payment
                            if (isset($_POST['pay'])) {
                //to check whether paid or not
                                $paid = "select status from bill WHERE id=$id";
                                $baa = mysqli_query($conn, $paid);
                                $amounrt = mysqli_fetch_array($baa);
                                $fething=$amounrt['status'];
                                if ($fething=='paid'){
                                    die('<h3 style="color: red">Already paid for this month</h3>');
                                }


                        //checking the balance of user from the bank whether it is suffiecient for payment or not.
                            if ( $bank_row[0] >= $amount[0]){
                                $value=$bank_row[0]-$amount[0];

                                $bank_up2="update bank set amount='$value' WHERE accountno='$a'";
                                $bankuu=mysqli_query($conn, $bank_up2);

                                $adminbal = "select amount from bank  WHERE accountno='125'";
                                $ba = mysqli_query($conn, $adminbal);

                                $adminbir = mysqli_fetch_array($ba);

                                $value=$amount[0]+$adminbir[0];
                                $bank_up2="update bank set amount='$value' WHERE accountno='125'";
                                $bankuu=mysqli_query($conn, $bank_up2);

                                $bank_up2="update bill set status='paid' WHERE id='$id'";
                                $bankuu=mysqli_query($conn, $bank_up2);


                                echo "<h1 style='color: #4cae4c;font-size: 20px'>congratulations done successfully</h1>";
                                echo "<script>alert('you have paid successfully')</script>";


                                ?>



                                <script>document.getElementById("message").innerHTML='well done successfully paid'</script>

                        <?php

                            }
                            else {
                                echo 'try to recharge your account';
                                echo "<script>alert('your amount is insufficient')</script>";
                            }




                            }



                        ?>

                        <p id="message"></p>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div><!--end row-->
</script>
<script src="js/wow.min.js"></script>
<script>
    new WOW().init();
</script>
