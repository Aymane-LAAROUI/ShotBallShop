<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Account verification</title>
    <link rel="stylesheet" href="../styles/login_style.css">
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
</head>
<body>
    <a id="logo" class="mini-header1" href="main_page.php"></a>
    <div class="box">
        <span class="borderLine"></span>
        <form action="verify_verif.php" method="post">
            <h2>verification</h2>
            <div class="inputBox">
                <input type="text" name="num" required="required">
                <span>Password</span>
                <i></i>
            </div>
            <span name="error" class='error'><?php if(isset($_REQUEST['error'])) echo $_REQUEST['error']; ?></span>
            <div class="links">
                <!-- <a href="forget_password.php">Forgot Password</a> -->
                <a href="register.php">Signup</a>
            </div>
            <input type="submit" value="Login">
            <a class='resend' href="resend_code.php">Resend code</a>
        </form>
    </div>
</body>
</html>