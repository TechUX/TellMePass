<!DOCTYPE html>
<html>
    <head>
        <title>
            TellMePass - Create Your Account
        </title>
        <meta name="viewport" content="width=device-width">
        <?php include "../include/header.html"; ?>
        <link href="../accounts/css/style.css" rel="stylesheet" type="text/css">

    </head>

    <body>
        <?php include "../include/nav.html"; ?>

        <div class="content">
            <p style="text-align: center; margin-top: 100px;">Please Create a acccount to continue using service.</p>
            
            <div class="login">
                <h1>Register</h1>
                <form method="post" action="auth.php">

                    <label for="email"> Email </label> : <input type="email" name="email" id="email" placeholder="yourname@domain.tld" required>
                    <br>
                    <label for="username"> Username </label> : <input type="text" name="username" id="username" placeholder="username" required>
                    <br>
                    <label for="password"> Password </label> : <input type="password" name="password" id="password" placeholder="password" required>
                    
                    <p class="noacc"> <a href="login.php" class="noacc">Already have account with us ?  Login </a></p>
                    <input type="submit" value="Register Me">
                </form>

            </div>
        </div>

        <?php include "../include/footer.html"; ?>

    </body>
</html>