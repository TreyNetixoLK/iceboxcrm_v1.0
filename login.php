<?php include("connection.php") ?>
<?php include("logval.php") ?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/css/Google-Style-Login.css">
</head>

<body>
    <div class="login-card" align="center"><img src="assets/img/logo3.png" style="width: 200px;">
       <br /><br />
        <form class="form-signin" method="post" action=""><span class="reauth-email"> </span>
            <input class="form-control" type="text" required="" placeholder="Username" name="txtuname" autofocus id="inputEmail">
            <input class="form-control" type="password" required="" placeholder="Password" name="txtpword" id="inputPassword">
            <div class="checkbox">
                <div class="checkbox">
                    <label>
                        <input type="checkbox">Remember me</label>
                </div>
            </div>
            <button class="btn btn-primary btn-block btn-lg btn-signin" type="submit" name="btn_Login">Sign in</button>
        </form><a href="#" class="forgot-password"></a></div>
    <div align="center" style="color: #FF0004;"><?php echo $msg ?></div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>