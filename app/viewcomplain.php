<?php
session_start();
include "config.php";
if(isset($_SESSION['user_id']))
{?>

    <!DOCTYPE html>
    <html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Online payment system</title>

        <link rel="stylesheet" href="/books/bootstrap/css/bootstrap.css">
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

            <div class="col-md-9">
                <?php
                $users="select * from complain";
                $users=mysqli_query($conn,$users);


                $com=mysqli_num_rows($users);
                echo "<h4 style='background-color: #b87690;color: white;width: 400px;font-style: italic;text-align: center'>Recently available complaints</h4>";
                ?>
                <div class="panel panel-primary panel-heading">


                    <?php
                    while ($user=mysqli_fetch_array($users)){


                        ?>
                        <br>

                            <td><img style="height: 50px;width: 50px" src="layouts/Image/user.png"></td>
                            <td> <?php echo $user['complain']?></td></br></br>
                            <td> <?php echo $user['date']?></td></br>

                            <?php $id=$user['comp_id'];?>
                            <td>

                                <a style="text-align: left" href='userdetail.php?idnumber=<?php echo $id;?> '  class='btn btn-primary btn-sm'>View</a>
                                <a href='?idnumber=<?php echo $id;?> ' class="btn btn-success btn-sm">more</a></br>


                            </td></br></br></br>

                        </tr>
                        <?php
                    }
                    ?>
               </div>
                <a  class="btn btn-primary" style="float: right;width: 80px;"  href="index.php">Back</a>
            </div>

        </div>



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
    function deleteUser(Id) {
        var ans=confirm("Are you sure to delete the customer with Id "+" = "+ Id+"?");
        if(ans){
            window.location="http://localhost/books/app/deleteuser.php?id="+Id;
        }

    }

</script>
