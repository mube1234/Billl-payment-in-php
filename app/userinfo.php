<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en" dir="ltr" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="utf-8">
    <title>kifiya</title>
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="/books/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="/books/bootstrap/css/style.css">

</head>
<?php
include("layouts/top-menu.php");
?>
<div class="container">
    <div class="row">
        </br> </br> </br> </br> </br></br> </br>
        <div class="col-md-6 col-md-offset-3">
            <div  class="panel panel-primary panel-heading ">
                <div class=" panel-heading ">
                    <h3 style="text-align: center;color: #d9edf7; ">New User</h3>
                </div></br>
                <form action="userinfo.php" method="post">
                    <div class="input-group">
                        <input type="text" name ="fname" placeholder="Fristname" class="form-control"/>
                    </div>
                    <br/>
                    <div class="input-group">
                        <input type="text" name="lname" placeholder="last name" class="form-control"/>
                    </div></br>
                    <div class="input-group">
                        <input type="number" name="billno" placeholder="Bill Number" class="form-control"/>
                    </div>
                    </br>
                    <div class="form-group">
                        <button style="width: 100px" type="submit" name="btn_add" class="btn btn-success ">Add</button>
                        <a  class="btn btn-primary" style="float: right;width: 80px;"  href="user-management.php">Back</a>
                    </div>

                </form>



                    <?php
                    include "config.php";
                    if(isset($_POST['btn_add'])){

                        $fname=$_POST['fname'];
                        $lname=$_POST['lname'];

                        $billno=$_POST['billno'];




                        $creare_user="INSERT INTO user_info(fname,lname,billno) VALUES
                                   ('$fname','$lname','$billno')";
                        $sql_result=mysqli_query($conn,$creare_user);
                        if ($sql_result){
                            //echo  "<b> <font color='green'>user created successfully</font> </b>";
                            echo "<script>alert(' successfully Added')</script>";
                            //echo "<script>window.open('register','_self')</script>";
                        }
                        else{
                            //die( "<b> <font color='red'>user ca not created successfully</font> </b>");
                            echo "<script>alert(' failed please try again')</script>";
                            //echo "<script>window.open('register','_self')</script>";

                        }
                    }

                    ?>





            </div>
        </div>
    </div>
</div>


<script src="/books/bootstrap/js/jquery3.3.1.min.js"></script>
<script src="/books/bootstrap/js/bootstrap.min.js"></script>

</body>

<!-- Mirrored from getbootstrap.com/docs/3.3/examples/non-responsive/ by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 11 Jan 2019 07:26:34 GMT -->
</html>
