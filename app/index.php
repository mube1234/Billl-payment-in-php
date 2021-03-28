<?php
session_start();
if(isset($_SESSION['user_id']))
{

    ?>
    <!DOCTYPE html>
    <html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <title>online payment system</title>
        <!-- Bootstrap core CSS -->
        <link rel="stylesheet" href="/books/bootstrap/Bootstrap/css/bootstrap.min.css">
        <script src="/books/bootstrap/cime/js/jquery-1.11.3.js"></script>
        <script src="/books/bootstrap/cime/js/bootstrap.js"></script>

        <link rel="stylesheet" href="/books/bootstrap/fonts/font-awesome/css/font-awesome.css">
        <link rel="stylesheet" href="/books/bootstrap/css/animate.min.css">
        <link rel="stylesheet" href="/books/bootstrap/css/style.css">



    </head>
    <body >
    <?php
    include("layouts/top-menu.php");
    ?>

    </br> </br></br>


    <div style="background: url('layouts/Image/home2.jpg') center fixed;height: 630px;
    position: relative;width: 100%;background-size: cover;" id="home">



        <div class="text" style="text-align: center">
            </br> </br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br>
            <h1 style="color: white"><strong>KIFIYA</strong></h1>
            <h3 style="color: white">Online water payment billing system</h3>
            <a href="index.php" class="btn btn-default btn-lg" >get started</a>
        </div>
    </div>
    </br></br></br>
    <div class="padding ">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6" style="left: -7.5%;">
                        <img style="height: 450px;width: 550px" src="layouts/Image/w2.jpg">
                    </div>
                    <div class="col-sm-6 text-center">
                        <h2>All about using the kifiya system</h2>
                        <p>To be able to pay ones payment online via internet is an important part in a growing
                            society of science and technology.
                            But in Ethiopia currently looking at the conditions and how payments are done it’s obvious that the requirement
                            for a simpler and more efficient way of payment is required,customers and public service servants. </p>
                        <p>The Adama city administration water supply sewage control began work on March 19, 1983 (E.C).
                            And it has been providing the appropriate resource for the city in all manners possible.
                            And to make their work efficient and technologically advanced they have developed and deployed a system in 2006.
                            The system was developed by a foreign company using the languages C# visual and sql (for the database).
                            Thee system now has around 67,000(67,392) registered users from some (65,321) users are active users and around
                            1300 are not currently active. The water resource is given under 5 main classifications of resource distribution
                            Thee system now has around 67,000(67,392) registered users from some (65,321) users are active users and around
                            1300 are not currently active. The water resource is given under 5 main classifications of resource distribution
                            Thee system now has around 67,000(67,392) registered users from some (65,321) users are active users and around
                            1300 are not currently active. The water resource is given under 5 main classifications of resource distribution
                            . </p>
                        <div class="form-group">
                            <button type="submit" name="sendbill" class="btn btn-primary">
                                Read More</button>

                        </div>

                    </div>
                </div>
            </div>
        </div>

    <div class="padding">
           <div class="container">
               <div class="row">
                   <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                       <h4>the best you choose the best you get</h4>
                       <p>you can get what you choose and also
                       send us your complaint and report
                       additionally you can make your payment
                       any time at the given days intervalyou can
                           get what you choose and also
                           send us your complaint and report
                           additionally you can make your payment
                           any time at the given days interval
                           you can get what you choose and also
                           send us your complaint and report
                           additionally you can make your payment
                           any time at the given days interval  at the given days interval so ....
                       </p>
                       <div class="form-group">
                           <button type="submit" name="sendbill" class="btn btn-primary">
                               Read More</button>

                       </div>
                   </div>

                   <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <img style="height: 420px" src="layouts/Image/sewer.jpg" class="img-responsive">
                   </div>
                   <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                       <h4>THE SECOND you choose the best you get</h4>
                       <p>you can get what you choose and also
                           send us your complaint and report
                           additionally you can make your payment
                           any time at the given days interval
                           you can get what you choose and also
                           send us your complaint and report
                           additionally you can make your payment
                           any time at the given days interval
                           you can get what you choose and also
                           send us your complaint and report
                           additionally you can make your payment
                           any time at the given days interval
                           you can get what you choose and a....
                       </p>
                       <div class="form-group">
                           <button type="submit" name="sendbill" class="btn btn-primary">
                               Read More</button>

                       </div>
                   </div>
                   <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <img style="height: 400px" src="layouts/Image/rr.jpg" class="img-responsive">
                   </div>
               </div>
           </div>
       </div>

<footer class="container-fluid text-center">
    <div class="row">
        <div class="col-sm-3">
            <h3>Developed By</h3>

            <h4>Tsion Belachew </h4>
            <h4>Abdi Desta</h4>
            <h4>Mubarik Tamiru </h4>
            <h4>Robera Daniel</h4>
            <h4>Naol worku</h4>


        </div>
        <div  style="margin-left: -10px"class="col-sm-3">
            <h3 >Follow us </h3>
            <a href="#" class="fam fa fa-facebook"></a>
            <a href="#" class="fam fa fa-google"></a>
            <a href="#" class="fam fa fa-youtube"></a>
            <a href="#" class="fam fa fa-twitter"></a>
        </div>
        <div class="col-sm-3">
            <h3>Contact us</h3>
            <kifiya3@gmail.com</h4>
            <h4>po.box 3344</h4>
            <h4> +251941208840 </h4>
            <h4> +251934405514 </h4>
            <h4> +251919342550 </h4>
            <h4> +251963668729 </h4>
        </div>
        <div class="col-sm-3">
            <h3>Help </h3>
           <link><a href="help.php"</a>  <h4>how to use</h4></link>

            </br>

        </div>
    </div>
    <div class="row">
        <div class="col-sm-12">
            <h4 style="text-align: center">Copyright <span class="glyphicon glyphicon-copyright-mark"></span>  2019 Astukifiya  All Rights Reserved.</h4>
        </div>
</footer>


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->



    </body>

    <!-- Mirrored from getbootstrap.com/docs/3.3/examples/non-responsive/ by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 11 Jan 2019 07:26:34 GMT -->
    </html>
    <?php
}
else{
    header("Location:http://localhost/books/app/login.php");
}
?>
