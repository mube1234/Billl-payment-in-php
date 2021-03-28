<?php
session_start();
$vb=$_GET['idnumber'];
?>
<!DOCTYPE html>
<html lang="en" dir="ltr" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="utf-8">
    <title>report</title>
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="/books/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="/books/bootstrap/css/style.css">

</head>
<?php
include("layouts/top-menu.php");
?>
<div class="container">
    <div class="row">
        </br> </br> </br> </br> </br>
        <div class="col-md-6 ">
            <div  class="panel panel-primary panel-heading  ">
                <div class="heading  ">
                    <h3 style="text-align: center;color: #d9edf7; background-color:#188a77; height: 50px;">Your Complian</h3>
                </div>
                <form  action="" method="post">
                    <label>Id</label>
                    <div class="form-group">
                        <input style="width: 100px" type="number" name="id" value=<?php echo $vb;?> class="form-control"/>
                    </div>
                    <div class="form-group">
                        <label>your complain</label>
                        &nbsp&nbsp <textarea style="height: 100px" name="textu" placeholder="please your complain...." class="form-control"></textarea>
                    </div>
                    <br/>

                    <div class="form-group">
                        &nbsp&nbsp &nbsp&nbsp &nbsp&nbsp<button style="width: 100px" type="submit" name="btn_add" class="btn btn-success ">send</button>
                        <button type="reset" class="btn btn-danger">reset</button>
                    </div>

                </form>

                <a  class="btn btn-primary" style="float: right;width: 80px;"  href="index.php">Back</a>

                <?php
                include "config.php";
                if(isset($_POST['btn_add'])){
                    $id=$_POST['id'];
                    $com=$_POST['textu'];
                     $kkk=  "select * from complain  WHERE comp_id='$id'";
                     $r=mysqli_query($conn,$kkk);
                     $rr=mysqli_num_rows($r);

                     if ($rr==0){
                         $oo=mysqli_query($conn,"INSERT INTO complain(comp_id,complain)VALUES ('$id','$com')");
                         if($oo){
                             echo "<h2 style='color: green'>send successfully</h2>";
                         }
                         else{
                             echo "<h2 style='color: red'>please check your id</h2>";

                         }

                     }
                     else{


                    $addcom="update complain set complain='$com' WHERE comp_id=$id";

                    $sql_result=mysqli_query($conn,$addcom);
                    if ($sql_result){
                        //echo  "<b> <font color='green'>user created successfully</font> </b>";
                        echo "<script>alert(' successfully Added')</script>";
                        //echo "<script>window.open('register','_self')</script>";
                    }
                    else {
                        ?>


                        <div class="alert alert-danger"><p>error please try again<?php echo mysqli_error($conn) ?> </p>
                        </div>
                        <?php
                    }   //echo "<script>window.open('register','_self')</script>";

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
