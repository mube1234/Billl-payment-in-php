<?php
session_start();
?>
<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/books/bootstrap/Bootstrap/css/bootstrap.min.css">
    <script src="/books/bootstrap/js/jquery3.3.1.min.js"></script>
    <script src="/books/bootstrap/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="/books/bootstrap/css/style.css">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>password get</title>
</head>
<body>
<?php  include("layouts/top-menu.php");?>
<div class="card" style="width:450px;height: 250px;position: absolute;
        margin-top: 100px;
        padding: 5px;
        top: 0%;
        left: 15%;
        border-radius: 10px;
        background: #ffffff;">
    <h4 style='text-align:center; color: rgb(0, 0, 0)'>Welcome</h4>
    <div class="container" style='margin-left: 20px;margin-top: 10px'>
        <!--last name-->
        <form action="" method="post" style='margin-left: 50px;'>
            <div class="row">
                <div class="col-md-8">
                <div class="panel panel-primary panel-heading">
                    <div class="form-group">
                        <input type="number" name="owner_id" value="<?php echo $_GET['idnumber']; ?>" required="required" class="form-control"/>
                    </div>
                    <div class="form" style='width: 80% '>
                        <label>current password:</label>
                        <input type="text" class="form-control" placeholder=" current password...." id="pw" name="curr_pass">
                    </div>
                    <div class="form" style='width: 80% '>
                        <label for="pw">new  password:</label>
                        <input type="text" class="form-control" placeholder="new password..." id="pw" name="new_pass">
                    </div>

                    <div class="form" style='width: 80% '>
                        <label for="pw">confirm password:</label>
                        <input type="text" class="form-control" placeholder=" confirm password...." id="pw" name="re_pass">
                    </div>
                    <button type="submit"  class="btn btn-primary" name="change" style='margin-left: 50px ;margin-top: 30px; width: 20%'>change</button>
                    <a  class="btn btn-primary" style="float: right;width: 80px;"  href="index.php">Back</a>
            </div>
                </div>

    </div>
        </form>
</div>
</div>

<?php
include "config.php";


if(isset($_POST['change'])) {
    $curr_pass=md5($_POST['curr_pass']);
    $new_pass = md5($_POST['new_pass']);
    $re_pass = md5($_POST['re_pass']);
    $id = $_POST['owner_id'];

    $check = mysqli_query($conn,"SELECT * FROM users WHERE  Id='$id'");
    $rows = mysqli_num_rows($check);
    while ($row = mysqli_fetch_array($check)) {
        $get_pass = $row['password'];
    }
    if (md5($curr_pass == $get_pass)) {
        if (strlen($new_pass) > 6) {
            if ($re_pass == $new_pass)
            {
                $change = "UPDATE  users set password='$new_pass' WHERE Id='$id'";
                if ($change)
                {
                    echo  "<script>alert('password changed successfully ')</script>";
                }
            } else
                {
                echo  "<script>alert('new password donot match')</script>";
              }
        } else
            {
            echo      "<script>alert('minimum password with character 6 ')</script>";
        }
    }
    else
    {
        echo      "<script>alert('Enter the correct current password ')</script>";
    }
}

?>
</body>
</html>
