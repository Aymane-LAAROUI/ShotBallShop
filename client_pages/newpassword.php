<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forget Password</title>
    <link rel="stylesheet" href="../styles/login_style.css">
</head>
<body>
    <a id="logo" class="mini-header1" href="main_page.php"></a>
    <div class="box">
        <span class="borderLine"></span>
        <form action="update_password.php" method="post">
            <br>
            <br>
            <br>
            <h2>Change Password</h2>
            <div class="inputBox">
                <input type="password" name="password" required="required">
                <span>Enter your new password</span>
                <i></i>
            </div>
            <span name="error"></span>
            <div class="links">
                <a href="login.php">Login</a>
                <a href="register.php">Signup</a>
            </div>
            <input type="submit" value="Submit">
        </form>
    </div>
</body>
</html>