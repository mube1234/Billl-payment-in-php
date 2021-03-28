<?php
session_start();
include "config.php";
if(isset($_SESSION['user_id']))
{
    ?>

    <!DOCTYPE html>
    <html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Add bill</title>

        <link rel="stylesheet" href="/books/bootstrap/Bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="/books/bootstrap/css/style.css">


    </head>
    <body style="background-color: #d9edf7">
    <?php
    include("layouts/top-menu.php");
    ?>

    <div class="container-fluid">
        <br/><br/><br/><br/><br/><br/><br/><br/>


        <div class="row">
            <form action="" method="post">
              <div  class="col-md-6">
                <?php
                $users="select * from users WHERE role='customer'";
                $users=mysqli_query($conn,$users);


                $records=mysqli_num_rows($users);
                echo $records."  ". "Customers found";
                ?>


                <table style="width: 80%"  class=" table-striped table-condensed table-bordered ">
                    <tr>
                        <th style="background-color:#000000;color: white">ID</th>

                        <th style="background-color: #000000;color: white">billno</th>
                        <th style="background-color: #000000;color: white">frist name</th>
                        <th style="background-color: #000000;color: white">last name</th>

                        <th style="background-color: #000000;color: white">Action</th>




                    </tr>

                    <?php
                    while ($user=mysqli_fetch_array($users)){
                        ?>
                        <tr>
                            <td> <?php echo $user['Id']?></td>

                            <td> <?php echo $user['billno']?></td>
                            <td> <?php echo $user['fname']?></td>
                            <td> <?php echo $user['lname']?></td>



                            <td> <a class="btn btn-primary" style="width: 100%;" href="addbill.php?id=<?php echo $user['Id']?>"> insert</a></td>




                        </tr>
                        <?php
                    }
                    ?>
                </table>
            </div>

            <div  class="col-md-4">

                <div  class="panel panel-primary panel-heading">
                    <div  class="panel-heading">
                        <h4>Adding bill</h4>

                    </div>
                    <div  class="panel-heading" >
                        </br>
                        <div class="form-group">
                            <input type="number" name="owner_id" value="<?php echo $_GET['id']; ?>" required="required" class="form-control"/>
                        </div>

                        <div class="form-group">

                            <input type="number" name="ur_prev" placeholder="preveous" required="required" class="form-control"/>
                        </div>
                        <div class="form-group">

                            <input type="number" name="ur_pres" placeholder="present" required ="required" class="form-control"/>
                        </div>
                        <div class="form-group">

                            <select class="form-control" name="month" required="required">

                                <option>January</option>
                                <option>February</option>
                                <option>March</option>
                                <option>April</option>
                                <option>May</option>
                                <option>June</option>
                                <option>July</option>
                                <option>Augest</option>
                                <option>September</option>
                                <option>October</option>
                                <option>November</option>
                                <option>December</option>
                            </select>
                            </br>
                            <div class="form-group">

                            <input type="date" name="ur_duedate" placeholder="Due date" class="form-control"/>
                        </div>

                        <div class="form-group">
                            <button type="submit" name="sendbill" class="btn btn-success">
                                send bill</button>
                            <button type="reset" class="btn btn-danger">reset</button>
                        </div>

                    </div>
                </div>
            </div>
</form>


            <?php

            if(isset($_POST['sendbill'])) {
                $id = $_POST['owner_id'];

                $prev = $_POST['ur_prev'];
                $pres = $_POST['ur_pres'];
                $consumption = $pres - $prev;
                $price = 2;
                $amount = $price * $consumption;
                $month = $_POST['month'];
                $duedate = $_POST['ur_duedate'];
                $status="unpaid";

                $mm=  "select * from bill  WHERE id='$id'";
                $z=mysqli_query($conn,$mm);
                $rr=mysqli_num_rows($z);

                if ($rr==0){
                    $oo=mysqli_query($conn,"INSERT INTO bill(id,prev,pres,consumption,price,Amount,month,duedate,status)VALUES 
                                         ('$id','$prev','$pres',
                                      '$consumption','$price','$amount','$month','$duedate','$status')");
                    if($oo){
                        echo "<script>alert('successfully inserted')</script>";
                    }
                    else{
                        die('falied'.mysqli_error($conn));
                    }

                }


               else {


                    $sendind_bill = "UPDATE  bill set prev='$prev',pres='$pres',consumption='$consumption',price='$price',
                                   Amount='$amount',month='$month',duedate='$duedate',status='$status' WHERE id='$id'";

                    $sql_result = mysqli_query($conn, $sendind_bill);
                    if ($sql_result) {
                        //echo  "<b> <font color='green'>user created successfully</font> </b>";
                        echo "<script>alert('send successfully ')</script>";
                        //echo "<script>window.open('register','_self')</script>";
                    } else {
                        //die( "<b> <font color='red'>user ca not created successfully</font> </b>");
                        echo "<script>alert('not added try again')</script>";
                        //echo "<script>window.open('register','_self')</script>";

                    }

                }


            }
            ?>



        </div>



    </div>
    </body>

    <!-- Mirrored from getbootstrap.com/docs/3.3/examples/non-responsive/ by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 11 Jan 2019 07:26:34 GMT -->
    </html>

    <?php

}
else{
    header("Location:http://localhost/books/app/login.php");
}
?>

