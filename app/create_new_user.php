<?php
session_start();
if($_SESSION['Username']){
    ?>
}
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <title>create new user</title>

    <link rel="stylesheet" href="/books/bootstrap/css/bootstrap.css">
     <link rel="stylesheet" href="/books/bootstrap/css/style.css">


</head>
<body>
<?php  include("layouts/top-menu.php");?>
<br>
<div class="container">
</br> </br> </br>
    <div class="row">
        <?php    ?>
        </br> </br>  </br>
        <h2 class="text-info" style="text-align: center">create user</h2>
        <form action="create_new_user.php"method="post">
            <div class="row">
                <div  class="col-md-4">
                    <div class="form-group">
                        <label>user name</label>
                        <input type="text" name="Username" class="form-control" placeholder="user name"/>
                    </div>
                    <div class="form-group">
                        <label>password</label>
                        <input type="password" name="password" required="required" class="form-control" placeholder="password"/>
                    </div>
                    <div class="form-group">
                        <label>house no</label>
                        <input type="number" name=houseno" required="required" class="form-control" placeholder="house no"/>
                    </div>
                    </div>

                    <div  class="col-md-4">
                        <div class="form-group">
                            <label>frist name</label>
                            <input type="text" name="fname" required="required" class="form-control" placeholder="Frist name"/>
                        </div>
                        <div class="form-group">
                            <label>last name</label>
                            <input type="text" name="lname"  required ="required" class="form-control" placeholder="Last Name"/>
                        </div>
                        <div class="form-group">
                            <label>email</label>
                            <input type="email" name="email" class="form-control" placeholder="email"/>
                        </div>
                        <div class="form-group">
                            <label>phone</label>
                            <input type="text" name=phone" class="form-control" placeholder="phone"/>
                        </div>

                        </div>




                        <div  class="col-md-4">
                            <div class="form-group">
                                <label>billno</label>
                                <input type="number" name="billno" required="required" class="form-control" placeholder="billno"/>
                            </div>

                    <div class="form-group">

                        <select class="form-control" name="address" required="required">
                            <option disabled>select ur address</option>
                            <option>adama</option>
                            <option>bedele</option>
                            <option>finfine</option>
                            <option>jima</option>
                        </select>
                        </div>
                            <div class="input-group">
                        <span class="input-group-addon"> <i class="glyphicon glyphicon-chevron-down"></i></span>
                        <select class="form-control" name="role" required="required">
                            <option disabled>select role</option>
                            <option>customer</option>
                            <option>admin</option>

                        </select>

                    </div></br>

                            <div class="form-group">
                                <button type="submit" name="btn_create_user" class="btn btn-success">
                                    create user</button>
                                <button type="reset" class="btn btn-danger">reset</button>
                            </div>
                         </div>
                    </div>


        </form>

    </br>   </br>  </br>



        <?php
        include ("config.php");

        $username=@$_POST['Username'];
         $fname=@$_POST['fname'];
        $lname=@$_POST['lname'];
        $password=md5(@$_POST['password']);
         $email=@$_POST['email'];
        $phone=@$_POST['phone'];
          $billno=@$_POST['billno'];
        $houseno=@$_POST['houseno'];
         $address=@$_POST['address'];
         $role=@$_POST['role'];

        if(isset($_POST['btn_create_user'])){
        $create_user=mysqli_query($conn,"INSERT INTO users(Username,fname,lname,password,email,phone,billno,houseno,address,role)VALUES 
           ('$username','$fname','$lname','$password','$email','$phone','$billno','$houseno','$address','$role')");

        if($create_user){
        ?>
        <div class="alert-success"><p><strong><h2><new user added sucessfully</h2></strong></p></div>
            <?php
            echo "<script>alert('registered successfully')</script>";
            }
            else{
            ?>
         <div class="alert alert-danger"><p>error you didint add user<?php echo mysqli_error($conn)?> </p></div>
                <?php
        }

        }

                ?>
    </div>
</div>
<script src="/books/bootstrap/js/jquery3.3.1.min.js"></script>
<script src="/books/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>
<?php

}
else{
     header("Location:http://localhost/books/app/login.php");
}
?>