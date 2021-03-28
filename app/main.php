<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <title>kifiya</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="/books/bootstrap/css/bootstrap.css">
    <script src="/books/bootstrap/js/jquery3.3.1.min.js"></script>
    <script src="/books/bootstrap/js/bootstrap.min.js"></script>

</head>
<style>
    body{
        overflow-x: hidden;
    }
    #centered1{
        position: absolute;
        font-size: 10vw;
        top: 30%;
        left: 30%;
        transform: translate(-50%, -50%);
    }
    #centered2{
        position: absolute;
        font-size: 10vw;
        top: 50%;
        left: 40%;
        transform: translate(-50%, -50%);
    }
    #centered3{
        position: absolute;
        font-size: 10vw;
        top: 70%;
        left: 30%;
        transform: translate(-50%, -50%);
    }
    #signup{
        width: 50%;
        border-radius: 30px;
    }
    #login{
        width: 50%;
        background-color: #fff;
        border: 1px solid #1da1f2;
        color: #1da1f2;
        border-radius: 30px;

    }
    #login:hover{
        width: 50%;
        border-radius: 30px;
        background-color: #fff;
        border: 1px solid #1da1f2;
        color: #1da1f2;
    }
    .well{
        background-color: #009900;
    }


</style>
<body>
<div class="row">
    <div class="col-sm-12">
        <div class="well">
            <center><h1 style="color: white;"> Welcome to kifiya system</h1></center>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-sm-6" style="left: 0.5%;">
       <img src="layouts/Image/home.jpg" class="img-rounded" width="550px" height="430px">
        <div id="centered1" class="centered"><h3 style="color: white;"><span class="glyphicon glyphicon-search"></span>
                &nbsp&nbsp <strong>You get any information</strong> </h3></div>
        <div id="centered2" class="centered"><h3 style="color: white;"><span class="glyphicon glyphicon-search"></span>
                &nbsp&nbsp <strong>Report emargence</strong> </h3></div>
        <div id="centered3" class="centered"><h3 style="color: white;"><span class="glyphicon glyphicon-search"></span>
                &nbsp&nbsp <strong>Send your complain </strong> </h3></div>

    </div>
    <div class="col-sm-6" style="left:8%">
        <img src="layouts/Image/d.jpg" class="img-rounded" title="mube man"
             width="290px" height="230px">
        <h2 style="color: #009900"><strong>Be Fast in paying <br> your water bill online</strong>
        </h2>


        <form method="post" action="">
            <button id="signup" class="btn btn-info btn-lg" name="signup">Create Account</button>
            <?php
            if (isset($_POST['signup'])){
                echo "<script>window.open('register.php','_self')</script>";
            }
            ?>
            </br></br>
            <button style="background-color: #009900;color: white" id="login" class="btn btn-info btn-lg" name="login">Login</button>
            <?php
            if (isset($_POST['login'])){
                echo "<script>window.open('login.php','_self')</script>";
            }
            ?>
        </form>

</div>


</body>
</html>
