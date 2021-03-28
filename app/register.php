<!DOCTYPE html>
<html>
<head>
    <title>register</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="script.css">
    <link rel="stylesheet" href="/books/bootstrap/Bootstrap/css/bootstrap.min.css">
    <script src="/books/bootstrap/cime/js/jquery-1.11.3.js"></script>
    <script src="/books/bootstrap/cime/js/bootstrap.js"></script>

    <link rel="stylesheet" href="/books/bootstrap/fonts/font-awesome/css/font-awesome.css">
    <link rel="stylesheet" href="/books/bootstrap/css/animate.min.css">


</head>
<style>

    body{
        overflow-x: hidden;
    }
    .main-content{
        width: 50%;
        height: 40%;
        margin: 10px auto;
        background-color: #fff;
        border:2px solid #e6e6e6;
        padding: 40px 50px;
    }
    .header{
        border: 0px solid #000;
        margin-bottom: 5px;
    }
    .well{
        background-color: #187FAB;
    }
    #signup{
        width: 60%;
        border-radius: 30px;
        background-color: #187FAB;

    }


</style>
<body>
<div class="row">
    <div class="col-sm-12">
        <div class="well">
            <center><h1 style="color: white;font-style: italic;">Kifiya System Registration Page</h1></center></div>
    </div>
</div>
<div class="row">
    <div class="col-sm-12">
        <div class="main-content">
            <div class="header">
                <h2 style="text-align: center;color: green"><strong>Join kifiya system</strong></h2></br>
            </div>
            <div class="l-part">
                <form action="" method="post">



                    <div class="input-group">
                        <span class="input-group-addon"> <i class="glyphicon glyphicon-user"></i></span>
                        <input type="text" class="form-control" placeholder="username" name="username" required="required">

                    </div></br>

                    <div class="input-group">
                        <span class="input-group-addon"> <i class="glyphicon glyphicon-user"></i></span>
                        <input type="text" class="form-control" placeholder="fristname" name="first_name" required="required">

                    </div></br>

                    <div class="input-group">
                        <span class="input-group-addon"> <i class="glyphicon glyphicon-user"></i></span>
                        <input type="text" class="form-control" placeholder="lastname" name="last_name" required="required">

                    </div></br>


                    <div class="input-group">
                        <span class="input-group-addon"> <i class="glyphicon glyphicon-lock"></i></span>
                        <input id="password" type="password" class="form-control" placeholder="password" name="ur_pass" required="required">

                    </div></br>


                    <div class="input-group">
                        <span class="input-group-addon"> <i class="glyphicon glyphicon-lock"></i></span>
                        <input id="password" type="password" class="form-control" placeholder="confirm password" name="two_pass" required="required">

                    </div></br>

                    <div class="input-group">
                        <span class="input-group-addon"> <i class="glyphicon glyphicon-user"></i></span>
                        <input id="email" type="email" class="form-control" placeholder="email" name="ur_email">

                    </div></br>

                    <div class="input-group">
                        <span class="input-group-addon"> <i class="glyphicon glyphicon-pencil"></i></span>
                        <input type="number" class="form-control" placeholder="phone" name="ur_mobile" required="required">

                    </div></br>

                    <div class="input-group">
                        <span class="input-group-addon"> <i class="glyphicon glyphicon-pencil"></i></span>
                        <input type="number" class="form-control" placeholder="bill number" name="ur_bill" required="required">

                    </div></br>

                    <div class="input-group">
                        <span class="input-group-addon"> <i class="glyphicon glyphicon-pencil"></i></span>
                        <input  type="number" class="form-control" placeholder="house number" name="ur_house">

                    </div></br>
                    <div class="input-group">
                        <span class="input-group-addon"> <i class="glyphicon glyphicon-pencil"></i></span>
                        <input  type="number" class="form-control" placeholder="bank account number" name="bank">

                    </div></br>

                    <div class="input-group">
                        <span class="input-group-addon"> <i class="glyphicon glyphicon-chevron-down"></i></span>
                        <select class="form-control" name="ur_address" required="required">
                            <option disabled>select your kebele</option>
                            <option>kebele 01</option>
                            <option>kebele 02</option>
                            <option>kebele 03</option>
                            <option>kebele 04</option>
                            <option>kebele 05</option>
                            <option>kebele 06</option>
                            <option>kebele 07</option>
                            <option>kebele 08</option>
                        </select>

                    </div></br>


                    <a style="text-decoration: none;float: right;color: #187FAB;" data-toggle="tooltip" title="signin" href="login.php">already have account ?</a></br>
                    <button id="signup" style="color: white" class="btn-btn-info btn-lg" name="sign_up">signup</button>


                </form>



                <?php
                include "config.php";
                if(isset($_POST['sign_up'])){
                    $username=$_POST['username'];
                    $fname=$_POST['first_name'];
                    $lname=$_POST['last_name'];
                    $password=md5($_POST['ur_pass']);
                    $passwordtwo=md5($_POST['two_pass']);
                    $email=$_POST['ur_email'];
                    $mobile=$_POST['ur_mobile'];
                    $billno=$_POST['ur_bill'];
                    $houseno=$_POST['ur_house'];
                    $account=$_POST['bank'];
                    $address=$_POST['ur_address'];
                    $role="customer";


                    if (strlen($password)<5) {
                        echo "<script>alert('Password should be minimum 6 characters!')</script>";
                        exit();
                    }
                    if ($password != $passwordtwo) {
                        echo "<script>alert('confirm your password')</script>";
                        //echo "<script>window.open('register.php','_self')</script>";
                        exit();

                        }
                    $check_email="select * from users where email='$email' or billno='$billno' or bankacc='$account'";
                    $run_email = mysqli_query($conn,$check_email);
                    $check2=mysqli_fetch_array($run_email);
                    $check= mysqli_num_rows($run_email);
                    if ($check>0 && $check2['email']==$email) {
                        echo "<script>alert('Email aready exist, please try using another email')</script>";
                        echo "<script>window.open('register.php','_self')</script>";
                       exit();
                    }
                    if ($check>0 && $check2['bankacc']==$account) {
                        echo "<script>alert('this account is not your account, please try an other account')</script>";
                        echo "<script>window.open('register.php','_self')</script>";
                        exit();
                    }
                    if ($check>0&& $check2['billno']==$billno) {
                        echo "<script>alert('you are aready register, with this bill number')</script>";
                        echo "<script>window.open('register.php','_self')</script>";
                        exit();
                    }

                    $user_info= "select * from user_info where billno='$billno'";
                    $run_info= mysqli_query($conn,$user_info);
                    $chech_info= mysqli_num_rows($run_info);
                    if($chech_info ==0){
                        echo "<script>alert('you are not membership please contact kifiya campany ')</script>";
                        exit();
                    }

                    $user_bank= "select * from bank where accountno='$account'";
                    $run_bank= mysqli_query($conn,$user_bank);
                    $chech_bank= mysqli_num_rows($run_bank);
                    if($chech_bank ==0){
                        echo "<script>alert('THE ACOUNT NUMBER IS NOT AVALIABLE please use other account ')</script>";
                       echo "<script>window.open('register.php','_self')</script>";
                        exit();
                    }

$creare_user="INSERT INTO users(Username,fname,lname,password,email,phone,billno,houseno,bankacc,address,role) VALUES
       ('$username','$fname','$lname','$password','$email','$mobile','$billno','$houseno','$account','$address','$role')";
$sql_result=mysqli_query($conn,$creare_user);
                    if ($sql_result){
                        //echo  "<b> <font color='green'>user created successfully</font> </b>";
                        echo "<script>alert('well done $fname,your are successfully registered')</script>";
                        echo "<script>window.open('login.php','_self')</script>";
                    }
                    else{
                        //die( "<b> <font color='red'>user ca not created successfully</font> </b>");
                        echo "<script>alert('registration failed please try again')</script>";
                        //echo "<script>window.open('register','_self')</script>";

                    }
                }

                ?>





            </div>

        </div>
    </div>
</div>
</body>
</html>