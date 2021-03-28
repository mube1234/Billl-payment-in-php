<?php
session_start();
include "config.php";
if(isset($_SESSION['user_id']))
{?>

    <!DOCTYPE html>
    <html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Check bill</title>

        <link rel="stylesheet" href="/books/bootstrap/css/bootstrap.css">
        <link rel="stylesheet" href="/books/bootstrap/css/style.css">


    </head>
    <?php
    include("layouts/top-menu.php");
    ?>

    <div class=" container-fluid">
        <br/><br/><br/><br/><br/><br/><br/><br/>
        <div class="row">

            <div class="col-md-9">
                <?php
                $id=$_GET['idnumber'];
                $users="select * from bill where id='$id'";
                $users=mysqli_query($conn,$users);



                ?>
                <table  class="table table-bordered table-striped table-condensed table-responsive">
                    <tr>
                        <th style="background-color: #5566;color: black">ID</th>

                        <th style="background-color: #5566;color: black">previous</th>
                        <th style="background-color:#5566;color: black">present</th>
                        <th style="background-color: #5566;color: black">consumption</th>
                        <th style="background-color: #5566;color: black">price</th>

                        <th style="background-color: #5566;color: black">Amount</th>
                        <th style="background-color: #5566;color: black">Month</th>
                        <th style="background-color: #5566;color: black">DueDate</th>
                        <th style="background-color: #5566;color: black">Status</th>

                    </tr>

                    <?php
                    $records=mysqli_num_rows($users);

                    if($records==0) {
                        echo "wait for bill ...";
                    }
                    while ($user=mysqli_fetch_array($users)){
                        ?>
                        <tr>
                            <td> <?php echo $user['id']?></td>

                            <td> <?php echo $user['prev']?></td>
                            <td> <?php echo $user['pres']?></td>
                            <td> <?php echo $user['consumption']?></td>
                            <td> <?php echo $user['price']?></td>
                            <td> <?php echo $user['Amount']?></td>
                            <td> <?php echo $user['month']?></td>
                            <td> <?php echo $user['duedate']?></td>
                            <td style="color: #4cae4c;font-style: italic;font-size: medium;"> <?php echo $user['status']?></td>


                        </tr>
                        <?php
                    }
                    ?>
                </table>
            </div>

        </div>



    </div>

    <!-- Mirrored from getbootstrap.com/docs/3.3/examples/non-responsive/ by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 11 Jan 2019 07:26:34 GMT -->
    </html>

    <?php

}
else{
    header("Location:http://localhost/books/app/index.php");
}
?>

