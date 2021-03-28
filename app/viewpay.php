<?php include("config.php");

 ?>
<?php include "layouts/top-menu.php";?>
<link rel="stylesheet" href="/books/bootstrap/Bootstrap/css/bootstrap.min.css">
<script src="/books/bootstrap/js/jquery3.3.1.min.js"></script>
<script src="/books/bootstrap/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="/books/bootstrap/css/style.css">
<div class="container-fluid">
    <br><br><br><br>
    <div class="row">
        <div class="col-sm-3">

        </div>
        <div class="col-md-9">
            <div class="team-member wow fadeInLeft" data-wow-duration="2s">


                <table class="table table-bordered table-striped table-condensed table-reposnsive">
                    <tr>
                        <th>Id Number</th>
                        <th>Bill no</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Email Address</th>
                        <th>Status</th>

                    </tr>
                    <?php
                    $bil="select * from bill where status='paid'";
                    $bill_run=mysqli_query($conn,$bil);

                    while ($bill_row=mysqli_fetch_array($bill_run)) {
                        $id=$bill_row['id'];

                        $users="SELECT * FROM users WHERE Id='$id' " ;
                        $users=mysqli_query($conn,$users);
                        $records=mysqli_num_rows($users);


                        ?>




                        <?php
                        while($user=mysqli_fetch_array($users)){
                            ?>
                            <tr>
                                <td><?php echo $user['Id']?></td>
                                <td><?php echo $user['billno']?></td>
                                <td><?php echo $user['fname']?></td>
                                <td><?php echo $user['lname']?></td>
                                <td><?php echo $user['email']?></td>
                                <td style="color: #1b6d85;font-size: 20px"><?php echo $bill_row['status']?></td>

                            </tr>
                            <?PHP

                        }
                    }

                    ?>
                </table>

            </div>

        </div>

    </div>

</div>
<a  class="btn btn-primary" style="float: right;width: 80px;"  href="user-management.php">Back</a>
<script type="text/javascript">
    function deleteuser(id){
        var answer= confirm("are you sure you want to delete user with id number ."+id+"?")
        if(answer){
            window.location="http://localhost:8080/books/app/deleteuser.php?id="+id;
        }
    }
</script>
<script src="js/wow.min.js"></script>
<script>
    new WOW().init();
</script>
