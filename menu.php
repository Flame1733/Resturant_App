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
                            <a  href="index.php"><i class="fa fa-fw fa-home"></i> Home</a>
                        </li>
                        <li>
                            <a style="background-color: #65969e;" href="#"><i class="fa fa-fw fa-list"></i> Menu</a>
                        </li>
                        <li>
                            <a href="Aboutus.php"><i class="fa fa-fw fa-group"></i> About us</a>
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
        <section>
            <button class="tablink" onclick="openPage('Appetizers', this, '#65969e')">Appetizers</button>
            <button class="tablink" onclick="openPage('MainCourse', this, '#65969e')" id="defaultOpen">Main Course</button>
            <button class="tablink" onclick="openPage('Desserts', this, '#65969e')">Desserts</button>
            <button class="tablink" onclick="openPage('Beverages', this, '#65969e')">Beverages</button>

            <div id="Appetizers" class="tabcontent">
                <div class="wrapper">
                    <div class="menu">
                        <div class="single-menu">
                            <img src="images/Appetizer-french fries.jpg" alt="french fries">
                            <div class="menu-content">
                                <h4>French fries <span>RM5</span></h4>
                                <p>French fries cooked with pure natural oil, crunchy and delicious.</p>
                                <button>Add to cart</button>
                            </div>
                        </div>
                        <div class="single-menu">
                            <img src="images/Appetizerlobster rolls.jpg" alt="Lobster Rolls">
                            <div class="menu-content">
                                <h4>Lobster Rolls <span>RM8.5</span></h4>
                                <p>Sandwich small cubes of celery or green onions, as it may contain lettuce, lemon juice, salt and black pepper.</p>
                                <button>Add to cart</button>
                            </div>
                        </div>

                        <div class="single-menu">
                            <img src="images/Appetizer-Salad.jpg" alt="Salad">
                            <div class="menu-content">
                                <h4>Salad <span>RM7.5</span></h4>
                                <p>A fresh salad of lettuce, tomatoes and other vegetables, you can prepare as desired.</p>
                                <button>Add to cart</button>
                            </div>

                        </div>
                        <div class="single-menu">
                            <img src="images/Appetizer-mini-pizza-.jpg" alt="Mini pizza">
                            <div class="menu-content">
                                <h4>Mini pizza <span>RM11</span></h4>
                                <p>Mini pizza fresh from our cuisine try and you order it again.</p>
                                <button>Add to cart</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div id="MainCourse" class="tabcontent">
                <div class="wrapper">
                    <div class="menu">
                        <div class="single-menu">
                            <img src="images/main course-Burgers.jpg" alt="Burger">
                            <div class="menu-content">
                                <h4>Neverland burger <span>RM14</span></h4>
                                <p>Sandwich consisting of one or more cooked patties of ground meat, beef or chiken may be pan fried, grilled, smoked or flame broiled.</p>
                                <button>Add to cart</button>
                            </div>
                        </div>
                        <div class="single-menu">
                            <img src="images/main course-lasagna.jpg" alt="Lasagna">
                            <div class="menu-content">
                                <h4>Lasagna <span>RM10.50</span></h4>
                                <p>Italian dish made of stacked layers of thin flat pasta alternating with fillings.</p>
                                <button>Add to cart</button>
                            </div>
                        </div>

                        <div class="single-menu">
                            <img src="images/maincourse-steak.jpg" alt="steak">
                            <div class="menu-content">
                                <h4>ٍSteak <span>RM21</span></h4>
                                <p>Loaded with flavor and has a minimum amount of fat. .</p>
                                <button>Add to cart</button>
                            </div>

                        </div>
                        <div class="single-menu">
                            <img src="images/Sushi.jpg" alt="Sushi">
                            <div class="menu-content">
                                <h4>Sushi <span>RM14</span></h4>
                                <p>Cooked rice flavoured with vinegar and a variety of vegetable, egg, or raw seafood garnishes and served cold.</p>
                                <button>Add to cart</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div id="Desserts" class="tabcontent">
            <div class="wrapper">
                    <div class="menu">
                        <div class="single-menu">
                            <img src="images/cream.jpg" alt="cream cramel">
                            <div class="menu-content">
                                <h4>Cream Caramel  <span>RM7</span></h4>
                                <p>A custard dessert with a layer of clear caramel sauce.</p>
                                <button>Add to cart</button>
                            </div>
                        </div>
                        <div class="single-menu">
                            <img src="images/icecream.jpg" alt="Ice-cream">
                            <div class="menu-content">
                                <h4>Ice-cream <span>RM8.50</span></h4>
                                <p>Two scoops of vanilla ice-cream served in dish with cookie crumbs.</p>
                                <button>Add to cart</button>
                            </div>
                        </div>

                        <div class="single-menu">
                            <img src="images/chocolate.jpg" alt="Chocolate roll">
                            <div class="menu-content">
                                <h4>Chocolate roll <span>RM5.50</span></h4>
                                <p>A chocolate cake rolled and filled with mint flavoured whipped cream and mini chocolate chips.</p>
                                <button>Add to cart</button>
                            </div>

                        </div>
                        <div class="single-menu">
                            <img src="images/cerep.jpg" alt="cerep roll">
                            <div class="menu-content">
                                <h4>Chocolate Crepe Roll <span>RM18</span></h4>
                                <p>Crepe roll stuffed with whipped cream and straberries, topped with chocoalte drizzles.</p>
                                <button>Add to cart</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div id="Beverages" class="tabcontent">
            <div class="wrapper">
                    <div class="menu">
                        <div class="single-menu">
                            <img src="images/water.jpg" alt="mineral water">
                            <div class="menu-content">
                                <h4>Mineral water <span>RM1.5</span></h4>
                                <p>A bottel of 1.5L mineral water.</p>
                                <button>Add to cart</button>
                            </div>
                        </div>
                        <div class="single-menu">
                            <img src="images/Coke.jpg" alt="Coke">
                            <div class="menu-content">
                                <h4>Coca Cola <span>RM2.50</span></h4>
                                <p>One can of coke served with a glass of ice.</p>
                                <button>Add to cart</button>
                            </div>
                        </div>

                        <div class="single-menu">
                            <img src="images/juices.jpg" alt="juices">
                            <div class="menu-content">
                                <h4>Fresh jucie <span>RM9</span></h4>
                                <p> Freshly blended Orange, Apple, Mango juices.</p>
                                <button>Add to cart</button>
                            </div>

                        </div>
                        <div class="single-menu">
                            <img src="images/greentea.jpg" alt="Green tea">
                            <div class="menu-content">
                                <h4>Green tea <span>RM4</span></h4>
                                <p>A hot cup of Green tea .</p>
                                <button>Add to cart</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </section>

        <script>
            function openPage(pageName,elmnt,color) {
            var i, tabcontent, tablinks;
            tabcontent = document.getElementsByClassName("tabcontent");
            for (i = 0; i < tabcontent.length; i++) {
                tabcontent[i].style.display = "none";
            }
            tablinks = document.getElementsByClassName("tablink");
            for (i = 0; i < tablinks.length; i++) {
                tablinks[i].style.backgroundColor = "";
            }
            document.getElementById(pageName).style.display = "block";
            elmnt.style.backgroundColor = color;
            }

            document.getElementById("defaultOpen").click();
        </script>

    <body>

<html>
