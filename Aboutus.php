<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale+1.0">
        <title>Neverland / About us</title>
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
    <body>
        <section>
            <div style="background-color: rgba(255, 255, 255);" class = "container">
                <div class="logo">
                    <img style="width: 8cm;" src="images/Logo.jpg" alt="Logo">
                </div>
                <div class="navbar">
                    <ul>
                        <li>
                            <a href="index.php"><i class="fa fa-fw fa-home"></i> Home</a>
                        </li>
                        <li>
                            <a  href="menu.php"><i class="fa fa-fw fa-list"></i> Menu</a>
                        </li>
                        <li>
                            <a style=" background-color: #65969e;" href="#"><i class="fa fa-fw fa-group"></i> About us</a>
                        </li>
                        <li>
                            <a href="ContactUs.php"><i class="fa fa-fw fa-envelope"></i> Contact us</a>
                        </li>
                        <li style="float:right;">
                            <div class="dropdown">
                                <button class="dropbtn">Sign up/Log in
                                    <i class="fa fa-caret-down"></i>
                                </button>
                                <div class="dropdown-content">
                                    <a href="login.php"><i class="fa fa-fw fa-user"></i>Log in</a>
                                    <a href="sign_in.php"><i class="fa fa-fw fa-user-o"></i>Sign up</a>
                                </div>
                            </div>
                        </li>

                    </ul>
                </div>

            </div>
        </section>
        <section class="about-image">
            <div class="about-text">
                <h1 class="title">About Us</h1>
                <h1 style="font-size:50px">Neverland</h1>
                <p>Neverland Restaurant is a restaurant that offers the most delicious food in Cyberjaya - Malaysia.<br> It was established by four people in the year 2021.<br> Our food is of high quality and the meat and fruits are fresh from our own farm and we get them delivered to us fresh daily!</p>
                <button onclick="window.location.href='sign_in.php';">Join Us And Order Now!</button>   
            </div>
        </section>
    </body>

</html>
