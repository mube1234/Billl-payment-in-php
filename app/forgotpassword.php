<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/books/bootstrap/css/bootstrap.css">
    <script src="/books/bootstrap/js/jquery3.3.1.min.js"></script>
    <script src="/books/bootstrap/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="/books/bootstrap/css/style.css">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>password get</title>
</head>
<body>
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
        <form action="penas.php" method="post" style='margin-left: 50px;'>
            <div class="row">
                <form action="penas.php" style='margin-left: 20px;'>
                    <div class="form" style='width: 80% '>
                        <label for="pw">Enter your email:</label>
                        <input type="text" class="form-control" placeholder=" enter your email...." id="pw" name="password">
                    </div>
            </div>
            <button type="submit" method="post" class="btn btn-primary" method="send"
                    style='margin-left: 50px ;margin-top: 30px; width: 50%'>Request Password</button>
    </div>
</div>
</div>
</body>
</html>

