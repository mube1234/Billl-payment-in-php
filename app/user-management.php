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
        <title>user management</title>

        <link rel="stylesheet" href="/books/bootstrap/Bootstrap/css/bootstrap.min.css">
        <script src="/books/bootstrap/js/jquery3.3.1.min.js"></script>
        <script src="/books/bootstrap/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="/books/bootstrap/css/style.css">

    </head>
    <?php
    include("layouts/top-menu.php");
    ?>

    <div class="container-fluid">
    <br/><br/><br/><br/><br/><br/><br/><br/>
        <div class="row">
            <div class="col-md-3">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h4>user management</h4>
                    </div>
               <div class="panel-body">
                   <br>
                       <li style="background-color: #5cb85c"><a href="register.php">create customer</a> </li></br>

                   <li style="background-color: #5cb85c"><a href="userinfo.php">Add User</a></li></br>
                   <li style="background-color: #5cb85c" ><a href="viewpay.php">History</a> </li></br>

                   </ul>
               </div>
                </div>
            </div>
            <div class="col-md-9">
                <?php
                $users="select * from users WHERE role='customer'";
                $users=mysqli_query($conn,$users);


                $records=mysqli_num_rows($users);
                echo $records."  ". "customers found";
                ?>
                <table  class="table table-bordered table-striped table-condensed table-responsive">
                    <tr>
                        <th style="background-color: #8a6d3b;color: white">ID Number</th>
                        <th style="background-color: #8a6d3b;color: white">username</th>
                        <th style="background-color: #8a6d3b;color: white">frist name</th>
                        <th style="background-color: #8a6d3b;color: white">last name</th>
                        <th style="background-color: #8a6d3b;color: white">email</th>
                        <th style="background-color: #8a6d3b;color: white">billno</th>
                        <th style="background-color: #8a6d3b;color: white">mobile no.</th>
                        <th style="background-color: #8a6d3b;color: white">Actions</th>

                    </tr>

                <?php
                while ($user=mysqli_fetch_array($users)){


?>
                    <tr>
                        <td> <?php echo $user['Id']?></td>
                        <td> <?php echo $user['Username']?></td>
                        <td> <?php echo $user['fname']?></td>
                        <td> <?php echo $user['lname']?></td>
                        <td> <?php echo $user['email']?></td>
                        <td> <?php echo $user['billno']?></td>
                        <td> <?php echo $user['phone']?></td>
                         <?php $id=$user['Id'];?>
                        <td>

                            <a href='userdetail.php?idnumber=<?php echo $id;?> '  class='btn btn-primary btn-sm'>View</a>
                            <a href='#'  onclick='deleteUser(<?php echo $id;?>)' class="btn btn-danger btn-sm">Delete</a
                        </td>

                    </tr>
                <?php
                }
                ?>
                </table>
            </div>

        </div>

        <a  class="btn btn-primary" style="float: right;width: 80px;"  href="index.php">Back</a>

    </div>

    <!-- Mirrored from getbootstrap.com/docs/3.3/examples/non-responsive/ by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 11 Jan 2019 07:26:34 GMT -->
    </html>

<?php

}
else{
    header("Location:http://localhost/books/app/login.php");
}
?>

<script type="text/javascript">//to delete the customer
function deleteUser(Id)
{
    var ans=confirm("Are you sure to delete the customer with Id "+" = "+ Id+"?");
    if(ans){
        window.location="http://localhost/books/app/deleteuser.php?id="+Id;
    }

}

</script>
