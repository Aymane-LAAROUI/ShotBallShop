<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup</title>
    <link rel="stylesheet" href="../styles/register_style.css">
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
</head>
<body>
    <a id="logo" class="mini-header1" href="main_page.php"></a>
    <div class="box">
        <span class="borderLine"></span>
        <form action="register_verif.php" method="post">
            <h2>Signup</h2>
            <div class="inputBox">
                <input type="text" name="username" required="required" pattern="[A-Za-z]*">
                <span>Username</span>
                <i></i>
            </div>
            <div class="inputBox">
                <input type="email" name="email" required="required">
                <span>email</span>
                <i></i>
            </div>
            <div class="inputBox">
                <input type="password" name="password" required="required">
                <span>Password</span>
                <i></i>
            </div>
            <div class="inputBox">
                <input type="password" name="password-again" required="required">
                <span>Retype password</span>
                <i></i>
            </div>
            <div class="inputBox">
                <input type="Phone" name="Phone" required="required" pattern="[0-9]*">
                <span>Phone</span>
                <i></i>
            </div>
            <div class="inputBox">
                <input type="Adress" name="Adress" required="required">
                <span>Adress</span>
                <i></i>
            </div>
            <span name="error" class='error'><?php if(isset($_REQUEST['error'])) echo $_REQUEST['error']; ?></span>
            <div class="links">
                <!-- <a href="forget_password.php">Forgot Password</a> -->
                <a href="login.php">Login</a>
            </div>
            <div class="g-recaptcha" data-sitekey="6Le2Go8lAAAAAFRCpssmYGxjRp95qRxAIB9aeguH"></div>
            <input type="submit" value="Signup">
        </form>
    </div>
</body>
</html>