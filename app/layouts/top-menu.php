
<?php include 'config.php';?>

<nav class="navbar navbar-custom navbar-nav navbar-default navbar-fixed-top">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-4">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#robust" >
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>

            </button>
            <a class="navbar-brand" href="#"><b><span class="text-primary" style="color: white">WELCOME TO KIFIYA SYSTEM</span> </b> </a>
        </div>
            </div>
        <div class="col-md-8">
        <div class="collapse navbar-collapse" id="robust">


            <ul class="nav navbar-nav navbar-right"  >
                <li><a href="index.php" >Home</a></li>
                <li><a href="about.php" >About</a></li>

                <?php
                    if(isset($_SESSION['user_id']))
                    {
                       if ($_SESSION['role']=='admin')
                             {

                ?>

                <?php
                        $v=$_SESSION['user_id'];
                        $users=mysqli_query($conn,"select * from users where Id='$v'");
                        $user=mysqli_fetch_array($users);
                        $id=$user['Id'];
                ?>

                        <li><a href="user-management.php" >Management</a></li>
                        <li><a href="addbill.php" >Add bill</a></li>
                        <li><a href="viewcomplain.php?idnumber=<?php echo $id;?>" >New Complain</a></li>


                <?php
                    }

                if ($_SESSION['role']=='manager')
                    {
                       ?>

                        <?php
                         $v=$_SESSION['user_id'];
                        $users=mysqli_query($conn,"select * from users where Id='$v'");

                        $user=mysqli_fetch_array($users);
                        $id=$user['Id'];
                        ?>

                        <li><a href=create_new_user.php?idnumber=<?php echo $id;?>" >Add Admin</a></li>
                        <li><a href="viewcomplain.php?idnumber=<?php echo $id;?>" >New Complain</a></li>

                        <?php
                    }
                    if ($_SESSION['role']=='customer')
                    {
                        ?>
                       <?php $v=$_SESSION['user_id'];

                         $users=mysqli_query($conn,"select * from users where Id='$v'");

                         $user=mysqli_fetch_array($users);
                         $id=$user['Id'];
                         ?>

                        <li><a href="checkbill.php?idnumber=<?php echo $id;?> " >Check bill</a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle"  data-toggle="dropdown" role="button"
                               aria-haspopup="true" aria-expanded="false">Make payment <span class="caret"></span></a>
                            <ul class="dropdown-menu" style="">
                                <li><a href="paybill.php?idnumber=<?php echo $id;?> " >Bank</a></li>
                                <li><a href="#">CBE birr</a></li>
                                <li><a href="#">Mobile Banking</a></li>

                            </ul>
                        </li>
                        <li><a href="complain.php?idnumber=<?php echo $id;?>" >Report</a></li>

r
                        <?php

                    }
                    ?>


                    <?php $v=$_SESSION['user_id'];

                    $users=mysqli_query($conn,"select * from users where Id='$v'");

                    $user=mysqli_fetch_array($users);
                    $id=$user['Id'];
                    ?>

                    <li class="dropdown">

                        <a href="#" class="dropdown-toggle"  data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                            <?php
                            echo $_SESSION['fname'] . " " . $_SESSION['lname'];
                            ?>
                            <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="userdetail.php?idnumber=<?php echo $id;?>" >Profile</a></li>
                            <li><a href="changepassword.php?idnumber=<?php echo $id;?>">Change Password</a></li>
                            <li><a href="logout.php">Logout</a></li>

                        </ul>
                    </li>

                    <?php
                }
                else{
                    ?>

                <?php
                }
                    ?>
            </ul>
        </div>

    </div>
    </div>
</nav>