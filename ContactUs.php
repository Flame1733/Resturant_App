<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale+1.0">
        <title>Neverland Main</title>
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
                            <a href="menu.php"><i class="fa fa-fw fa-list"></i> Menu</a>
                        </li>
                        <li>
                            <a href="Aboutus.php"><i class="fa fa-fw fa-group"></i> About us</a>
                        </li>
                        <li>
                            <a style=" background-color: #65969e;" href="#"><i class="fa fa-fw fa-envelope"></i> Contact us</a>
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
        <section class="container-contact">
            <form action="#">
                <label for="fname">First Name</label>
                <input type="text" id="fname" name="firstname" placeholder="Your name..">

                <label for="lname">Last Name</label>
                <input type="text" id="lname" name="lastname" placeholder="Your last name..">

                <label for="email">Email Address</label>
                <input type="text" id="email" name="email Address" placeholder="Your email Address..">

                <label for="subject">Subject</label>
                <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>

                <input type="submit" value="Submit">
            </form>
        </section>
    </body>
</html>
