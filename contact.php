<!DOCTYPE html>
<html>
    <head>
        <title> TellMePass</title>
        <meta name="viewport" content="width=device-width">
        
        <?php include "include/header.html"; ?>
        
        <link href="css/style.css" rel="stylesheet" type="text/css">

    </head>
    <body>

      <?php include "include/nav.html"; ?>

      <div class="content">
            <center><h1 style="margin-top:70px;"> Contact Us</h1></center>
            <div class="login">
                <h1> Contact Us </h1>

                <form method="post" action="">
                    <center>
                    <label for="username"> Full Name </label> <br> <input type="text" name="name" id="name" placeholder="your full name" required>
                        <br>

                    <label for="email">Email </label> <br>
                    <input type="email" id="email" placeholder="youremail@domain.com" required>
                    <br>

                    <label for="msg">Your Query</label> <br>
                    <textarea type="text" id="msg" name="msg" class="contarea" placeholder="describe your problem here..." required></textarea> </center>
    
                    <input type="submit" value="Send">
                </form>
            </div>

                
        </div>

        <?php include "include/footer.html"; ?>

    </body>
</html>