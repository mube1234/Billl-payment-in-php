<link rel="stylesheet" href="/books/bootstrap/css/bootstrap.css">
<script src="/books/bootstrap/js/jquery3.3.1.min.js"></script>
<script src="/books/bootstrap/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="/books/bootstrap/css/style.css">

<body style="background-color: #e9f7f4">
<?php
include ("config.php");
$id=$_GET['idnumber'];
$user="SELECT * From users where id='$id'";

$user_result_set=mysqli_query($conn,$user);

$user=mysqli_fetch_array($user_result_set);
?>
<table border="0" cellspacing="10" cellpadding="10">
       <tr>
           <td>
               <img src="layouts/Image/user.png" width="100" height="100">

           </td>

    <td>

        <table border="0" cellspacing="5" cellpadding="5">
            <h2>Full information of user</h2>
           <tr>
               <td><strong>Id number :</strong> </td>
               <td><?php echo $user['Id']?></td>
           </tr>
            <tr>
                <td></br></td>
            </tr>

            <tr>
                <td><strong>Full Name :</strong> </td>
                <td><?php echo $user['fname']." ".$user['lname']?></td>
            </tr>

            <tr>
                <td></br></td>
            </tr>

            <tr>
                <td><strong>Email :</strong> </td>
                <td><?php echo $user['email']?></td>
            </tr>
            <tr>
                <td></br></td>
            </tr>
            <tr>
                <td><strong>Phone :</strong> </td>
                <td><?php echo $user['phone']?></td>
            </tr>
            <tr>
                <td></br></td>
            </tr>
            <tr>
                <td><strong>Bill number :</strong> </td>
                <td><?php echo $user['billno']?></td>
            </tr>
            <tr>
                <td></br></td>
            </tr>
            <tr>
                <td><strong>House number :</strong> </td>
                <td><?php echo $user['houseno']?></td>
            </tr>
            <tr>
                <td></br></td>
            </tr>
            <tr>
                <td><strong>Address :</strong> </td>
                <td><?php echo $user['address']?></td>
            </tr>

        </table>
    </td>
</tr></table>

    <center><a href= "index.php" style="color: white;background-color: #23415C;font-size: 20px">Back</a></center>


</body>