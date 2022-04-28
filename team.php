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
            <center>
                <h1 style="margin-top:70px;"> Our Expert team</h1>
                <p>Alone we can do so little, together we can do so much.</p>
                </h3>
            </center>

            <style>
            html {
            box-sizing: border-box;
            }

            *, *:before, *:after {
            box-sizing: inherit;
            }

            .column {
            float: left;
            width: 20%;
            margin-bottom: 16px;
            padding: 0 8px;
            }

            @media screen and (max-width: 650px) {
            .column {
                width: 100%;
                display: block;
            }
            }

            .card {
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
            }

            .container {
            padding: 0 16px;
            }

            .container::after, .row::after {
            content: "";
            clear: both;
            display: table;
            }

            .title {
            color: grey;
            }

            .tbutton{
                color: #000;
                rad

            }

            </style>
            
            <br>
            <div class="row">
            <div class="column">
                    <div class="card">
                    <img src="/img/user.png" alt="Jane" style="width:100%">
                    <div class="container">
                            <h2>Devesh Singh</h2>
                            <p class="title">CEO & Founder</p>
                            <p>Student at Chandigarh University</p>
                            <p>admin@tellmepass.ml</p>
                            <p><button class="tbutton">View Profile</button></p>
                        </div>
                    </div>
            </div>

            <div class="column">
                    <div class="card">
                        <img src="/img/user.png" alt="Mike" style="width:100%">
                        <div class="container">
                            <h2>Anand Kumar</h2>
                            <p class="title">Designation</p>
                            <p>Student at Chandigarh University</p>
                            <p>example@example.com</p>
                            <p><button class="tbutton">View Profile</button></p>
                        </div>
                    </div>
            </div>
            
            <div class="column">
                    <div class="card">
                        <img src="/img/user.png" alt="John" style="width:100%">
                        <div class="container">
                            <h2>Shekhar Kumar</h2>
                            <p class="title">Designation</p>
                            <p>Student at Chandigarh University</p>
                            <p>example@example.com</p>
                            <p><button class="tbutton">View Profile</button></p>
                        </div>
                    </div>
            </div>

            <div class="column">
                    <div class="card">
                        <img src="/img/user.png" alt="John" style="width:100%">
                        <div class="container">
                            <h2>Shivam Kumar</h2>
                            <p class="title">Designation</p>
                            <p>Student at Chandigarh University</p>
                            <p>example@example.com</p>
                            <p><button class="tbutton">View Profile</button></p>
                        </div>
                    </div>
                </div>

                <div class="column">
                    <div class="card">
                        <img src="/img/fuser.png" alt="John" style="width:100%">
                        <div class="container">
                            <h2>Paramjeet Kaur</h2>
                            <p class="title">Designation</p>
                            <p>Student at Chandigarh University</p>
                            <p>example@example.com</p>
                            <p><button class="tbutton">View Profile</button></p>
                        </div>
                    </div>
                </div>

            </div>

            

        </div>

        <?php include "include/footer.html"; ?>

    </body>
</html>