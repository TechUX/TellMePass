<!DOCTYPE html>
<html>
    <head>
        <title>
            TellMePass - Login to Your Account
        </title>
        <meta name="viewport" content="width=device-width">
        
        <?php include "../include/header.html"; ?>

        <link href="../accounts/css/style.css" rel="stylesheet" type="text/css">

    </head>

    <body>

        <?php include "../include/nav.html"; ?>

        <div class="content">
            <p style="text-align: center; margin-top: 100px;">Please login with your acccount to continue using service.</p>
            
            <div class="login">
                <h1>Login</h1>
                <form method="post" action="auth.php">
                    <label for="username"> Username </label> : <input type="text" name="username" id="username" placeholder="username" required>
                    <br>

                    <label for="password"> Password </label> : <input type="password" name="password" id="password" placeholder="password" required>
                    <br>
                    <p class="noacc"> <a href="register.php" class="noacc">Not account with us ?  Sign Up</a></p>
                    <input type="submit" value="Login">
                </form>

            </div>
        </div>

        <?php include "../include/footer.html"; ?>

    </body>
</html>