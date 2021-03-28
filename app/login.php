<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en" dir="ltr" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="utf-8">
    <title>Login</title>
    <!-- Bootstrap core CSS -->

    <link rel="stylesheet" href="/books/bootstrap/Bootstrap/css/bootstrap.min.css">
    <script src="/books/bootstrap/cime/js/jquery-1.11.3.js"></script>
    <script src="/books/bootstrap/cime/js/bootstrap.js"></script>

    <link rel="stylesheet" href="/books/bootstrap/fonts/font-awesome/css/font-awesome.css">
    <link rel="stylesheet" href="/books/bootstrap/css/animate.min.css">
    <link rel="stylesheet" href="/books/bootstrap/css/style.css">


</head>
<div class="container">
     <div class="row">
     </br> </br> </br> </br> </br>
          <div class="col-md-6 col-md-offset-3">
              <div  class="panel panel-primary">
                  <div class="panel-heading ">
                       <h3>Login page</h3>
                 </div>
              <div class="panel-body">
                  <?php
                  include ("config.php");
                  if(isset($_POST['btn_login'])) {
                      $username = $_POST['Username'];
                      $password = md5($_POST['password']);
                      $user = mysqli_query($conn, "SELECT * FROM users
              WHERE Username='$username' and password='$password'");

                      if(mysqli_num_rows($user)>0)
                      {
                       $user=mysqli_fetch_array($user);

                       $_SESSION['user_id']=$user['Id'];
                       $_SESSION['Username']=$user['Username'];
                       $_SESSION['fname']=$user['fname'];
                       $_SESSION['lname']=$user['lname'];
                       $_SESSION['account']=$user['bankacc'];
                       $_SESSION['role']=$user['role'];


                      $balance = mysqli_query($conn, "SELECT * FROM bank WHERE accountno='bankacc'");
                       $userr=mysqli_fetch_array($balance);
                      $_SESSION['amount']=$userr['amount'];



                        header("Location:http://localhost/books/app/index.php?");
                      }
                      else 
                      {
                         ?>
              </div>
                  <div  class="alert alert-danger">Incorrect username or password.please try again</div>
<?php
                      }
                  }
                  ?>
                  <form action="login.php" method="post">
                      <div class="input-group">
                          <div class="input-group-addon">
                              <span class="glyphicon glyphicon-user"></span>
                           </div>
                          <input type="text" name ="Username" placeholder="user name" class="form-control"/>
                      </div>
                      <br/>
                      <div class="input-group">
                          <div class="input-group-addon">
                              <span class="glyphicon glyphicon-lock"></span>
                          </div>
                          <input type="password" name="password" placeholder="password" class="form-control"/>
                      </div>
                      </br>
                      <div class="form-group">
                          <button type="submit" name="btn_login" class="btn btn-primary btn-block">Login</button>
                      </div>
                      <div class="form-group">
                          <a style="color: blue" href="forgotpassword.php">Forgot password?</a>

                      <div class="form-group" style="float: right;">
                          <a style="color: blue" href="register.php">yet not registered?</a>
                      </div>
                      </div>
                  </form>

          </div>
          </div>
     </div>
</div>



</body>

<!-- Mirrored from getbootstrap.com/docs/3.3/examples/non-responsive/ by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 11 Jan 2019 07:26:34 GMT -->
</html>
