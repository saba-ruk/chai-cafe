<?php
//include auth_session.php file on all user panel pages
// include("auth_session.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
    <title>Chai Cafe MENU</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD2Hhh_14Uam62GXGaTMcXWhhVkYg0EbDY&callback=initMap" async defer></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.0/font/bootstrap-icons.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- Custom CSS File Link -->
    <link rel="stylesheet" href="../assets/css/style28.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"><!-- font awesome cdn link -->
    <link rel="icon" type="image/x-icon" href="../logo.png"><!-- Favicon / Icon -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"><!-- Google font cdn link -->

</head>

<body>
    <!-- HEADER SECTION -->
    <header class="header">
        <div class="imgg">
            <a href="#"><img src="../logo.png" id="logo1" height="50px" width="60px"></a>
        </div>

        <!-- MAIN MENU FOR SMALLER DEVICES -->
        <div class="hamburger">
            <nav class="navbar navbar-expand-lg">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a href="index1.php" class="items" style="left:-60px;font-weight:550; color:black; text-decoration: none;"><i class="fa-solid fa-house-chimney" style="position:relative;left:-5px;"></i>Home</a>
                    </li>

                    <li class="nav-item">
                        <a href="#menu" class="items" style="left:7px;font-weight:550; text-decoration: none;"><img src="../menu.png" height="30px" width="26px" style="position:relative;left:-5px;">Menu</a>
                    </li>

                </ul>
            </nav>

        </div>




        <div class="icons">
            <div id="search-btn"></div>
            <div class="fas fa-shopping-cart" id="cart-btn"></div>
            <div class="fas fa-bars" id="menu-btn"></div>
        </div>



        <!-- CART SECTION -->
        <div class="cart">
            <h2 class="cart-title">Your Cart:</h2>
            <div class="cart-content">

            </div>
            <div class="total">
                <div class="total-title">Total: </div>
                <div class="total-price">₹0</div>
            </div>
            <!-- BUY BUTTON -->
            <button type="button" class="btn-buy" style="margin-bottom: 20px;">Checkout Now</button>
        </div>
    </header>



    <!-- adding functionality not to close the cart section by clicking outside the page -->
    <script>
        document.addEventListener('DOMContentLoaded', (event) => {
            const cartIcon = document.querySelector('.cart-icon'); // Adjust selector to match your cart icon
            const cartSection = document.querySelector('.header .cart');

            // Function to toggle the active class on the cart section
            function toggleCart() {
                const isActive = cartSection.classList.contains('active');
                cartSection.classList.toggle('active');

                // Reset scroll position when opening the cart section
                if (!isActive) {
                    cartSection.scrollTop = 0;
                    document.body.style.overflow = 'hidden'; // Prevent scrolling on the body
                } else {
                    document.body.style.overflow = ''; // Restore default scrolling on the body
                }
            }

            // Add click event listener to the cart icon
            cartIcon.addEventListener('click', toggleCart);

            // Prevent closing the cart section when scrolling
            cartSection.addEventListener('wheel', (event) => {
                const {
                    scrollTop,
                    scrollHeight,
                    clientHeight
                } = cartSection;

                if (event.deltaY > 0 && scrollTop + clientHeight >= scrollHeight) {
                    // Prevent page scroll when scrolling down and reaching the bottom of the cart
                    event.preventDefault();
                } else if (event.deltaY < 0 && scrollTop === 0) {
                    // Prevent page scroll when scrolling up and reaching the top of the cart
                    event.preventDefault();
                }
            });

            // Prevent body scroll when cart section is open
            document.addEventListener('wheel', (event) => {
                if (cartSection.classList.contains('active')) {
                    event.preventDefault();
                }
            }, {
                passive: false
            });

            // Handle touchmove to prevent body scroll on touch devices
            document.addEventListener('touchmove', (event) => {
                if (cartSection.classList.contains('active')) {
                    event.preventDefault();
                }
            }, {
                passive: false
            });
        });
    </script>




    <!-- MENU SECTION -->

    <section class="menu" id="menu">
        <h1 class="heading"><span>Menu</span></h1>
        <h3 class="font">Chai Varieties</h3>
        <div class="box-container">
            <div class="container">

                <div class="row">

                    <div class="card">
                        <div class="card-inner">
                            <div class="box card-front">
                                <img src="../pics1/tea_1-removebg-preview.png" class="product-img">
                                <h3 class="product-title">Chai </h3>
                                <div class="price">₹15.00</div>
                                <a class="btn add-cart">Add to Cart</a>

                                <button class="btn btn-primary btn-flip"><i class="fa-solid fa-arrows-rotate"></i></button>
                            </div>
                            <div class="box card-back">
                                <img src="../pics1/tea_1-removebg-preview.png" class="product-img">
                                <h3 class="product-title">Chai</h3>
                                <h4>Ingredients:</h4>
                                <h4>tea leaves,milk,sugar</h4>


                                <button class="btn btn-primary btn-flip"><i class="fa-solid fa-arrows-rotate"></i></button>
                            </div>
                        </div>
                    </div>
                    <br />



                    <div class="card">
                        <div class="card-inner">
                            <div class="box card-front">
                                <img src="../pics1/special_chai_2-removebg-preview.png" class="product-img">
                                <h3 class="product-title">Spc Chai </h3>
                                <div class="price">₹20.00</div>
                                <a class="btn add-cart">Add to Cart</a>

                                <button class="btn btn-primary btn-flip"><i class="fa-solid fa-arrows-rotate"></i></button>
                            </div>
                            <div class="box card-back">
                                <img src="../pics1/special_chai_2-removebg-preview.png" class="product-img">
                                <h3 class="product-title">Spc Chai</h3>
                                <h4>Ingredients:</h4>
                                <h4>tea leaves,milk,sugar,elachi,ginger</h4>


                                <button class="btn btn-primary btn-flip"><i class="fa-solid fa-arrows-rotate"></i></button>
                            </div>
                        </div>
                    </div>
                    <br />




                    <div class="card">
                        <div class="card-inner">
                            <div class="box card-front">
                                <img src="../pics1/ginger_3-removebg-preview.png" class="product-img">
                                <h3 class="product-title">Ginger Chai </h3>
                                <div class="price">₹20.00</div>
                                <a class="btn add-cart">Add to Cart</a>

                                <button class="btn btn-primary btn-flip"><i class="fa-solid fa-arrows-rotate"></i></button>
                            </div>
                            <div class="box card-back">
                                <img src="../pics1/ginger_3-removebg-preview.png" class="product-img">
                                <h3 class="product-title">Ginger Chai </h3>
                                <h4>Ingredients:</h4>
                                <h4>tea leaves,milk,sugar,ginger</h4>

                                <button class="btn btn-primary btn-flip"><i class="fa-solid fa-arrows-rotate"></i></button>
                            </div>
                        </div>
                    </div>
                    <br />
                </div>


                <div class="row">

                    <div class="card">
                        <div class="card-inner">
                            <div class="box card-front">
                                <img src="../pics1/masala_chai_4-removebg-preview.png" class="product-img">
                                <h3 class="product-title">Masala Chai </h3>
                                <div class="price">₹25.00</div>
                                <a class="btn add-cart">Add to Cart</a>

                                <button class="btn btn-primary btn-flip"><i class="fa-solid fa-arrows-rotate"></i></button>
                            </div>
                            <div class="box card-back">
                                <img src="../pics1/masala_chai_4-removebg-preview.png" class="product-img">
                                <h3 class="product-title">Masala Chai </h3>
                                <h4>Ingredients:</h4>
                                <h4>tea leaves,milk,sugar,cinnamon,<br>elachi,cloves,ginger</h4>

                                <button class="btn btn-primary btn-flip"><i class="fa-solid fa-arrows-rotate"></i></button>
                            </div>
                        </div>
                    </div>
                    <br />



                    <div class="card">
                        <div class="card-inner">
                            <div class="box card-front">
                                <img src="../pics1/coffee_5-removebg-preview.png" class="product-img">
                                <h3 class="product-title">Coffee</h3>
                                <div class="price">₹20.00</div>
                                <a class="btn add-cart">Add to Cart</a>

                                <button class="btn btn-primary btn-flip"><i class="fa-solid fa-arrows-rotate"></i></button>
                            </div>
                            <div class="box card-back">
                                <img src="../pics1/coffee_5-removebg-preview.png" class="product-img">
                                <h3 class="product-title">Coffee </h3>
                                <h4>Ingredients:</h4>
                                <h4>milk,sugar,coffee powder</h4>

                                <button class="btn btn-primary btn-flip"><i class="fa-solid fa-arrows-rotate"></i></button>
                            </div>
                        </div>
                    </div>
                    <br />




                    <div class="card">
                        <div class="card-inner">
                            <div class="box card-front">
                                <img src="../pics1/horlicks_6-removebg-preview.png" class="product-img">
                                <h3 class="product-title">Horlicks</h3>
                                <div class="price">₹20.00</div>
                                <a class="btn add-cart">Add to Cart</a>

                                <button class="btn btn-primary btn-flip"><i class="fa-solid fa-arrows-rotate"></i></button>
                            </div>
                            <div class="box card-back">
                                <img src="../pics1/horlicks_6-removebg-preview.png" class="product-img">
                                <h3 class="product-title">Horlicks</h3>
                                <h4>Ingredients:</h4>
                                <h4>milk,sugar,horlicks powder</h4>

                                <button class="btn btn-primary btn-flip"><i class="fa-solid fa-arrows-rotate"></i></button>
                            </div>
                        </div>
                    </div>
                    <br />
                </div>


                <div class="row row-to-hide" id="hide1">
                    <div class="row">

                        <div class="card">
                            <div class="card-inner">
                                <div class="box card-front">
                                    <img src="../pics1/boost_8-removebg-preview.png" class="product-img">
                                    <h3 class="product-title">Boost</h3>
                                    <div class="price">₹20.00</div>
                                    <a class="btn add-cart">Add to Cart</a>

                                    <button class="btn btn-primary btn-flip"><i class="fa-solid fa-arrows-rotate"></i></button>
                                </div>
                                <div class="box card-back">
                                    <img src="../pics1/boost_8-removebg-preview.png" class="product-img">
                                    <h3 class="product-title">Boost</h3>
                                    <h4>Ingredients:</h4>
                                    <h4>milk,sugar,Boost powder</h4>

                                    <button class="btn btn-primary btn-flip"><i class="fa-solid fa-arrows-rotate"></i></button>
                                </div>
                            </div>
                        </div>
                        <br />



                        <div class="card">
                            <div class="card-inner">
                                <div class="box card-front">
                                    <img src="../pics1/milk 9.1.png" class="product-img">
                                    <h3 class="product-title">Milk</h3>
                                    <div class="price">₹15.00</div>
                                    <a class="btn add-cart">Add to Cart</a>

                                    <button class="btn btn-primary btn-flip"><i class="fa-solid fa-arrows-rotate"></i></button>
                                </div>
                                <div class="box card-back">
                                    <img src="../pics1/milk 9.1.png" class="product-img">
                                    <h3 class="product-title">Milk</h3>
                                    <h4>Ingredients:</h4>
                                    <h4>milk,sugar</h4>

                                    <button class="btn btn-primary btn-flip"><i class="fa-solid fa-arrows-rotate"></i></button>
                                </div>
                            </div>
                        </div>
                        <br />




                        <div class="card">
                            <div class="card-inner">
                                <div class="box card-front">
                                    <img src="../pics1/black_tea_10-removebg-preview.png" class="product-img">
                                    <h3 class="product-title">Black tea</h3>
                                    <div class="price">₹15.00</div>
                                    <a class="btn add-cart">Add to Cart</a>

                                    <button class="btn btn-primary btn-flip"><i class="fa-solid fa-arrows-rotate"></i></button>
                                </div>
                                <div class="box card-back">
                                    <img src="../pics1/black_tea_10-removebg-preview.png" class="product-img">
                                    <h3 class="product-title">Black tea</h3>
                                    <h4>Ingredients:</h4>
                                    <h4>tea leaves,water,sugar</h4>

                                    <button class="btn btn-primary btn-flip"><i class="fa-solid fa-arrows-rotate"></i></button>
                                </div>
                            </div>
                        </div>
                        <br />
                    </div>
                    <div class="row">

                        <div class="card">
                            <div class="card-inner">
                                <div class="box card-front">
                                    <img src="../pics1/Lemon-Tea_11-removebg-preview.png" class="product-img">
                                    <h3 class="product-title">Lemon tea</h3>
                                    <div class="price">₹15.00</div>
                                    <a class="btn add-cart">Add to Cart</a>

                                    <button class="btn btn-primary btn-flip"><i class="fa-solid fa-arrows-rotate"></i></button>
                                </div>
                                <div class="box card-back">
                                    <img src="../pics1/Lemon-Tea_11-removebg-preview.png" class="product-img">
                                    <h3 class="product-title">Lemon tea</h3>
                                    <h4>Ingredients:</h4>
                                    <h4>tea leaves,lemon,mint,water,sugar</h4>

                                    <button class="btn btn-primary btn-flip"><i class="fa-solid fa-arrows-rotate"></i></button>
                                </div>
                            </div>
                        </div>
                        <br />



                        <div class="card">
                            <div class="card-inner">
                                <div class="box card-front">
                                    <img src="../pics1/lemon_ginger_tea_12-removebg-preview.png" class="product-img">
                                    <h3 class="product-title">Lemon ginger tea</h3>
                                    <div class="price">₹20.00</div>
                                    <a class="btn add-cart">Add to Cart</a>

                                    <button class="btn btn-primary btn-flip"><i class="fa-solid fa-arrows-rotate"></i></button>
                                </div>
                                <div class="box card-back">
                                    <img src="../pics1/lemon_ginger_tea_12-removebg-preview.png" class="product-img">
                                    <h3 class="product-title">Lemon ginger tea</h3>
                                    <h4>Ingredients:</h4>
                                    <h4>tea leaves,lemon,ginger,water,sugar</h4>

                                    <button class="btn btn-primary btn-flip"><i class="fa-solid fa-arrows-rotate"></i></button>
                                </div>
                            </div>
                        </div>
                        <br />




                        <div class="card">
                            <div class="card-inner">
                                <div class="box card-front">
                                    <img src="../pics1/jeera-tea_13-removebg-preview.png" class="product-img">
                                    <h3 class="product-title">Jeera tea</h3>
                                    <div class="price">₹15.00</div>
                                    <a class="btn add-cart">Add to Cart</a>

                                    <button class="btn btn-primary btn-flip"><i class="fa-solid fa-arrows-rotate"></i></button>
                                </div>
                                <div class="box card-back">
                                    <img src="../pics1/jeera-tea_13-removebg-preview.png" class="product-img">
                                    <h3 class="product-title">Jeera tea</h3>
                                    <h4>Ingredients:</h4>
                                    <h4>Jeera,sugar,water</h4>

                                    <button class="btn btn-primary btn-flip"><i class="fa-solid fa-arrows-rotate"></i></button>
                                </div>
                            </div>
                        </div>
                        <br />
                    </div>

                    <div class="row">

                        <div class="card">
                            <div class="card-inner">
                                <div class="box card-front">
                                    <img src="../pics1/lemon_14-removebg-preview.png" class="product-img">
                                    <h3 class="product-title">Lemon ginger jeera tea</h3>
                                    <div class="price">₹15.00</div>
                                    <a class="btn add-cart">Add to Cart</a>

                                    <button class="btn btn-primary btn-flip"><i class="fa-solid fa-arrows-rotate"></i></button>
                                </div>
                                <div class="box card-back">
                                    <img src="../pics1/lemon_14-removebg-preview.png" class="product-img">
                                    <h3 class="product-title">Lemon ginger jeera tea</h3>
                                    <h4>Ingredients:</h4>
                                    <h4>lemon,Jeera,sugar,water</h4>

                                    <button class="btn btn-primary btn-flip"><i class="fa-solid fa-arrows-rotate"></i></button>
                                </div>
                            </div>
                        </div>
                        <br />



                        <div class="card">
                            <div class="card-inner">
                                <div class="box card-front">
                                    <img src="../pics1/pudina_tea_15-removebg-preview.png" class="product-img" width="100px" height="50px">
                                    <h3 class="product-title">Pudina tea</h3>
                                    <div class="price">₹15.00</div>
                                    <a class="btn add-cart">Add to Cart</a>

                                    <button class="btn btn-primary btn-flip"><i class="fa-solid fa-arrows-rotate"></i></button>
                                </div>
                                <div class="box card-back">
                                    <img src="../pics1/pudina_tea_15-removebg-preview.png" class="product-img">
                                    <h3 class="product-title">Pudina tea</h3>
                                    <h4>Ingredients:</h4>
                                    <h4>water,sugar,mint leaves</h4>

                                    <button class="btn btn-primary btn-flip"><i class="fa-solid fa-arrows-rotate"></i></button>
                                </div>
                            </div>
                        </div>
                        <br />




                        <div class="card">
                            <div class="card-inner">
                                <div class="box card-front">
                                    <img src="../pics1/15.png" class="product-img">
                                    <h3 class="product-title">kashya tea</h3>
                                    <div class="price">₹20.00</div>
                                    <a class="btn add-cart">Add to Cart</a>

                                    <button class="btn btn-primary btn-flip"><i class="fa-solid fa-arrows-rotate"></i></button>
                                </div>
                                <div class="box card-back">
                                    <img src="../pics1/15.png" class="product-img">
                                    <h3 class="product-title">kashya tea</h3>
                                    <h4>Ingredients:</h4>
                                    <h4>kashya tea,sugar,water/h4>

                                        <button class="btn btn-primary btn-flip"><i class="fa-solid fa-arrows-rotate"></i></button>
                                </div>
                            </div>
                        </div>
                        <br />
                    </div>
                    <div class="row">

                        <div class="card">
                            <div class="card-inner">
                                <div class="box card-front">
                                    <img src="../pics1/badam-milk-new-removebg-preview.png" class="product-img">
                                    <h3 class="product-title">Badam milk</h3>
                                    <div class="price">₹25.00</div>
                                    <a class="btn add-cart">Add to Cart</a>

                                    <button class="btn btn-primary btn-flip"><i class="fa-solid fa-arrows-rotate"></i></button>
                                </div>
                                <div class="box card-back">
                                    <img src="../pics/badam-milk-new-removebg-preview.png" class="product-img">
                                    <h3 class="product-title">Badam milk</h3>
                                    <h4>Ingredients:</h4>
                                    <h4>milk,sugar,yellow color,almond</h4>

                                    <button class="btn btn-primary btn-flip"><i class="fa-solid fa-arrows-rotate"></i></button>
                                </div>
                            </div>
                        </div>
                        <br />



                        <div class="card">
                            <div class="card-inner">
                                <div class="box card-front">
                                    <img src="../pics1/Piyush-3-320x320-removebg-preview.png" class="product-img">
                                    <h3 class="product-title">Badam milk</h3>
                                    <div class="price">₹25.00</div>
                                    <a class="btn add-cart">Add to Cart</a>

                                    <button class="btn btn-primary btn-flip"><i class="fa-solid fa-arrows-rotate"></i></button>
                                </div>
                                <div class="box card-back">
                                    <img src="../pics1/Piyush-3-320x320-removebg-preview.png" class="product-img">
                                    <h3 class="product-title">Badam milk</h3>
                                    <h4>Ingredients:</h4>
                                    <h4>milk,sugar,yellow color,pista</h4>

                                    <button class="btn btn-primary btn-flip"><i class="fa-solid fa-arrows-rotate"></i></button>
                                </div>
                            </div>
                        </div>
                        <br />




                        <div class="card">
                            <div class="card-inner">
                                <div class="box card-front">
                                    <img src="../pics1/elaichi_tea_19-removebg-preview.png" class="product-img">
                                    <h3 class="product-title">Elaici tea</h3>
                                    <div class="price">₹20.00</div>
                                    <a class="btn add-cart">Add to Cart</a>

                                    <button class="btn btn-primary btn-flip"><i class="fa-solid fa-arrows-rotate"></i></button>
                                </div>
                                <div class="box card-back">
                                    <img src="../pics1/elaichi_tea_19-removebg-preview.png" class="product-img">
                                    <h3 class="product-title">Elaici tea</h3>
                                    <h4>Ingredients:</h4>
                                    <h4>milk,sugar,tea leaves,elaichi</h4>

                                    <button class="btn btn-primary btn-flip"><i class="fa-solid fa-arrows-rotate"></i></button>
                                </div>
                            </div>
                        </div>
                        <br />
                    </div>

                </div><br />
                <center>
            <button class="btn btn-dark showHideBtn">SHOW MORE</button>
        </center>


            </div>
        </div>
     
    </section>


    <!-- 2nd section -->
    <section class="menu" id="menu">
        <h3 class="font">Chat & Snacks</h3>
        <div class="box-container">
            <div class="container">

                <div class="row">

                    <div class="card">
                        <div class="card-inner">
                            <div class="box card-front">
                                <img src="../pics1/1 (1).png" class="product-img">
                                <h3 class="product-title">Dahi puri</h3>
                                <div class="price">₹55.00</div>
                                <a class="btn add-cart">Add to Cart</a>

                                <button class="btn btn-primary btn-flip"><i class="fa-solid fa-arrows-rotate"></i></button>
                            </div>
                            <div class="box card-back">
                                <img src="../pics1/1 (1).png" class="product-img">
                                <h3 class="product-title">Dahi puri</h3>
                                <h4>Ingredients:</h4>
                                <h4>maida,dahi,chat masala<br>salt,chilli powder,tamarind</h4>


                                <button class="btn btn-primary btn-flip"><i class="fa-solid fa-arrows-rotate"></i></button>
                            </div>
                        </div>
                    </div>
                    <br />



                    <div class="card">
                        <div class="card-inner">
                            <div class="box card-front">
                                <img src="../pics1/22 (1).png" class="product-img">
                                <h3 class="product-title">Sev puri</h3>
                                <div class="price">₹30.00</div>
                                <a class="btn add-cart">Add to Cart</a>

                                <button class="btn btn-primary btn-flip"><i class="fa-solid fa-arrows-rotate"></i></button>
                            </div>
                            <div class="box card-back">
                                <img src="../pics1/22 (1).png" class="product-img">
                                <h3 class="product-title">Sev puri</h3>
                                <h4>Ingredients:</h4>
                                <h4>potato,tomato,onion,<br>tmarind,maida,corainder</h4>


                                <button class="btn btn-primary btn-flip"><i class="fa-solid fa-arrows-rotate"></i></button>
                            </div>
                        </div>
                    </div>
                    <br />




                    <div class="card">
                        <div class="card-inner">
                            <div class="box card-front">
                                <img src="../pics1/3 (1).png" class="product-img">
                                <h3 class="product-title">Chicken roll</h3>
                                <div class="price">₹30.00</div>
                                <a class="btn add-cart">Add to Cart</a>

                                <button class="btn btn-primary btn-flip"><i class="fa-solid fa-arrows-rotate"></i></button>
                            </div>
                            <div class="box card-back">
                                <img src="../pics1/3 (1).png" class="product-img">
                                <h3 class="product-title">Chicken roll</h3>
                                <h4>Ingredients:</h4>
                                <h4>maida,chilli paste,chicken,<br>salt,mayonnaise</h4>

                                <button class="btn btn-primary btn-flip"><i class="fa-solid fa-arrows-rotate"></i></button>
                            </div>
                        </div>
                    </div>
                    <br />
                </div>


                <div class="row">

                    <div class="card">
                        <div class="card-inner">
                            <div class="box card-front">
                                <img src="../pics1/4.png" class="product-img">
                                <h3 class="product-title">Maggie</h3>
                                <div class="price">₹20.00</div>
                                <a class="btn add-cart">Add to Cart</a>

                                <button class="btn btn-primary btn-flip"><i class="fa-solid fa-arrows-rotate"></i></button>
                            </div>
                            <div class="box card-back">
                                <img src="../pics1/4.png" class="product-img">
                                <h3 class="product-title">Maggie</h3>
                                <h4>Ingredients:</h4>
                                <h4>maggie packet,water</h4>

                                <button class="btn btn-primary btn-flip"><i class="fa-solid fa-arrows-rotate"></i></button>
                            </div>
                        </div>
                    </div>
                    <br />



                    <div class="card">
                        <div class="card-inner">
                            <div class="box card-front">
                                <img src="../pics1/5.png" class="product-img">
                                <h3 class="product-title">Spcl Maggie</h3>
                                <div class="price">₹30.00</div>
                                <a class="btn add-cart">Add to Cart</a>

                                <button class="btn btn-primary btn-flip"><i class="fa-solid fa-arrows-rotate"></i></button>
                            </div>
                            <div class="box card-back">
                                <img src="../pics1/5.png" class="product-img">
                                <h3 class="product-title">Spcl Maggie</h3>
                                <h4>Ingredients:</h4>
                                <h4>maggie packet,water,carrot<br>onion,egg,chilli powder</h4>

                                <button class="btn btn-primary btn-flip"><i class="fa-solid fa-arrows-rotate"></i></button>
                            </div>
                        </div>
                    </div>
                    <br />




                    <div class="card">
                        <div class="card-inner">
                            <div class="box card-front">
                                <img src="../pics1/6.png" class="product-img">
                                <h3 class="product-title">Burger</h3>
                                <div class="price">₹50.00</div>
                                <a class="btn add-cart">Add to Cart</a>

                                <button class="btn btn-primary btn-flip"><i class="fa-solid fa-arrows-rotate"></i></button>
                            </div>
                            <div class="box card-back">
                                <img src="../pics1/6.png" class="product-img">
                                <h3 class="product-title">Burger</h3>
                                <h4>Ingredients:</h4>
                                <h4>maida,chicken,salt,pizza seasoning,<br>lettuce,tomato,cheese,onion</h4>

                                <button class="btn btn-primary btn-flip"><i class="fa-solid fa-arrows-rotate"></i></button>
                            </div>
                        </div>
                    </div>
                    <br />
                </div>


                <div class="row pic-to-hide" id="hide2">
                    <div class="row">

                        <div class="card">
                            <div class="card-inner">
                                <div class="box card-front">
                                    <img src="../pics1/7.png" class="product-img">
                                    <h3 class="product-title">Pizza</h3>
                                    <div class="price">₹70.00</div>
                                    <a class="btn add-cart">Add to Cart</a>

                                    <button class="btn btn-primary btn-flip"><i class="fa-solid fa-arrows-rotate"></i></button>
                                </div>
                                <div class="box card-back">
                                    <img src="../pics1/7.png" class="product-img">
                                    <h3 class="product-title">Pizza</h3>
                                    <h4>Ingredients:</h4>
                                    <h4>maida,tomato sauce,cheese,chicken,<br>chilli paste,onion,tomato,pizza seasonings</h4>

                                    <button class="btn btn-primary btn-flip"><i class="fa-solid fa-arrows-rotate"></i></button>
                                </div>
                            </div>
                        </div>
                        <br />



                        <div class="card">
                            <div class="card-inner">
                                <div class="box card-front">
                                    <img src="../pics1/8 (1).png" class="product-img">
                                    <h3 class="product-title">Puff</h3>
                                    <div class="price">₹20.00</div>
                                    <a class="btn add-cart">Add to Cart</a>

                                    <button class="btn btn-primary btn-flip"><i class="fa-solid fa-arrows-rotate"></i></button>
                                </div>
                                <div class="box card-back">
                                    <img src="../pics1/8 (1).png" class="product-img">
                                    <h3 class="product-title">Puff</h3>
                                    <h4>Ingredients:</h4>
                                    <h4>Flour,Butter,Salt,chicken,chilli paste</h4>

                                    <button class="btn btn-primary btn-flip"><i class="fa-solid fa-arrows-rotate"></i></button>
                                </div>
                            </div>
                        </div>
                        <br />




                        <div class="card">
                            <div class="card-inner">
                                <div class="box card-front">
                                    <img src="../pics1/9.png" class="product-img">
                                    <h3 class="product-title">Samosa</h3>
                                    <div class="price">₹15.00</div>
                                    <a class="btn add-cart">Add to Cart</a>

                                    <button class="btn btn-primary btn-flip"><i class="fa-solid fa-arrows-rotate"></i></button>
                                </div>
                                <div class="box card-back">
                                    <img src="../pics1/9.png" class="product-img">
                                    <h3 class="product-title">Samosa</h3>
                                    <h4>Ingredients:</h4>
                                    <h4>Flour,Potatoes,Peas,cumin, coriander,<br> garam masala, turmeric,chili powder,Oil</h4>

                                    <button class="btn btn-primary btn-flip"><i class="fa-solid fa-arrows-rotate"></i></button>
                                </div>
                            </div>
                        </div>
                        <br />
                    </div>
                    <div class="row">

                        <div class="card">
                            <div class="card-inner">
                                <div class="box card-front">
                                    <img src="../pics1/10.png" class="product-img">
                                    <h3 class="product-title">masala poori</h3>
                                    <div class="price">₹60.00</div>
                                    <a class="btn add-cart">Add to Cart</a>

                                    <button class="btn btn-primary btn-flip"><i class="fa-solid fa-arrows-rotate"></i></button>
                                </div>
                                <div class="box card-back">
                                    <img src="../pics1/10.png" class="product-img">
                                    <h3 class="product-title">masala poori</h3>
                                    <h4>Ingredients:</h4>
                                    <h4>maida,chana,onion,tomato<br>chilli,gram masala </h4>

                                    <button class="btn btn-primary btn-flip"><i class="fa-solid fa-arrows-rotate"></i></button>
                                </div>
                            </div>
                        </div>
                        <br />



                        <div class="card">
                            <div class="card-inner">
                                <div class="box card-front">
                                    <img src="../pics1/11 (1).png" class="product-img">
                                    <h3 class="product-title">Appagudi</h3>
                                    <div class="price">₹50.00</div>
                                    <a class="btn add-cart">Add to Cart</a>

                                    <button class="btn btn-primary btn-flip"><i class="fa-solid fa-arrows-rotate"></i></button>
                                </div>
                                <div class="box card-back">
                                    <img src="../pics1/11 (1).png" class="product-img">
                                    <h3 class="product-title">Appagudi</h3>
                                    <h4>Ingredients:</h4>
                                    <h4>maida,egg,coconut,oil,sugar</h4>

                                    <button class="btn btn-primary btn-flip"><i class="fa-solid fa-arrows-rotate"></i></button>
                                </div>
                            </div>
                        </div>
                        <br />




                        <div class="card">
                            <div class="card-inner">
                                <div class="box card-front">
                                    <img src="../pics1/12.png" class="product-img">
                                    <h3 class="product-title">Bread sadwich</h3>
                                    <div class="price">₹40.00</div>
                                    <a class="btn add-cart">Add to Cart</a>

                                    <button class="btn btn-primary btn-flip"><i class="fa-solid fa-arrows-rotate"></i></button>
                                </div>
                                <div class="box card-back">
                                    <img src="../pics1/12.png" class="product-img">
                                    <h3 class="product-title">Bread sadwich</h3>
                                    <h4>Ingredients:</h4>
                                    <h4>chicken,mayonnaise,bread</h4>

                                    <button class="btn btn-primary btn-flip"><i class="fa-solid fa-arrows-rotate"></i></button>
                                </div>
                            </div>
                        </div>
                        <br />
                    </div>

                    <div class="row">

                        <div class="card">
                            <div class="card-inner">
                                <div class="box card-front">
                                    <img src="../pics1/13.png" class="product-img">
                                    <h3 class="product-title">Egg roll</h3>
                                    <div class="price">₹30.00</div>
                                    <a class="btn add-cart">Add to Cart</a>

                                    <button class="btn btn-primary btn-flip"><i class="fa-solid fa-arrows-rotate"></i></button>
                                </div>
                                <div class="box card-back">
                                    <img src="../pics1/13.png" class="product-img">
                                    <h3 class="product-title">Egg roll</h3>
                                    <h4>Ingredients:</h4>
                                    <h4>egg,maida,oil,onion<br>salt</h4>

                                    <button class="btn btn-primary btn-flip"><i class="fa-solid fa-arrows-rotate"></i></button>
                                </div>
                            </div>
                        </div>
                        <br />



                        <div class="card">
                            <div class="card-inner">
                                <div class="box card-front">
                                    <img src="../pics1/14.png" class="product-img" width="100px" height="50px">
                                    <h3 class="product-title">Malpura</h3>
                                    <div class="price">₹50.00</div>
                                    <a class="btn add-cart">Add to Cart</a>

                                    <button class="btn btn-primary btn-flip"><i class="fa-solid fa-arrows-rotate"></i></button>
                                </div>
                                <div class="box card-back">
                                    <img src="../pics1/14.png" class="product-img">
                                    <h3 class="product-title">Malpura</h3>
                                    <h4>Ingredients:</h4>
                                    <h4>sugar,egg,maida<br>,oil</h4>

                                    <button class="btn btn-primary btn-flip"><i class="fa-solid fa-arrows-rotate"></i></button>
                                </div>
                            </div>
                        </div>
                        <br />




                        <div class="card">
                            <div class="card-inner">
                                <div class="box card-front">
                                    <img src="../pics1/15.1.png" class="product-img">
                                    <h3 class="product-title">Medu vada</h3>
                                    <div class="price">₹40.00</div>
                                    <a class="btn add-cart">Add to Cart</a>

                                    <button class="btn btn-primary btn-flip"><i class="fa-solid fa-arrows-rotate"></i></button>
                                </div>
                                <div class="box card-back">
                                    <img src="../pics1/15.1.png" class="product-img">
                                    <h3 class="product-title">Medu vada</h3>
                                    <h4>Ingredients:</h4>
                                    <h4>urud dal,oil,coconut,ginger<br>corainder leaves,tamarind</h4>

                                    <button class="btn btn-primary btn-flip"><i class="fa-solid fa-arrows-rotate"></i></button>
                                </div>
                            </div>
                        </div>
                        <br />
                    </div>
                    <div class="row">

                        <div class="card">
                            <div class="card-inner">
                                <div class="box card-front">
                                    <img src="../pics1/16.png" class="product-img">
                                    <h3 class="product-title">Anda vada</h3>
                                    <div class="price">₹40.00</div>
                                    <a class="btn add-cart">Add to Cart</a>

                                    <button class="btn btn-primary btn-flip"><i class="fa-solid fa-arrows-rotate"></i></button>
                                </div>
                                <div class="box card-back">
                                    <img src="../pics1/16.png" class="product-img">
                                    <h3 class="product-title">Anda vada</h3>
                                    <h4>Ingredients:</h4>
                                    <h4>egg,gram powder,chilli powder,salt,egg</h4>

                                    <button class="btn btn-primary btn-flip"><i class="fa-solid fa-arrows-rotate"></i></button>
                                </div>
                            </div>
                        </div>
                        <br />



                        <div class="card">
                            <div class="card-inner">
                                <div class="box card-front">
                                    <img src="../pics1/17.png" class="product-img">
                                    <h3 class="product-title">Pakora</h3>
                                    <div class="price">₹30.00</div>
                                    <a class="btn add-cart">Add to Cart</a>

                                    <button class="btn btn-primary btn-flip"><i class="fa-solid fa-arrows-rotate"></i></button>
                                </div>
                                <div class="box card-back">
                                    <img src="../pics1/17.png" class="product-img">
                                    <h3 class="product-title">Pakora</h3>
                                    <h4>Ingredients:</h4>
                                    <h4>onion,gram flour,chilli powder,salt<br>,jeera</h4>

                                    <button class="btn btn-primary btn-flip"><i class="fa-solid fa-arrows-rotate"></i></button>
                                </div>
                            </div>
                        </div>
                        <br />




                        <div class="card">
                            <div class="card-inner">
                                <div class="box card-front">
                                    <img src="../pics1/18.png" class="product-img">
                                    <h3 class="product-title">Bata vada</h3>
                                    <div class="price">₹40.00</div>
                                    <a class="btn add-cart">Add to Cart</a>

                                    <button class="btn btn-primary btn-flip"><i class="fa-solid fa-arrows-rotate"></i></button>
                                </div>
                                <div class="box card-back">
                                    <img src="../pics1/18.png" class="product-img">
                                    <h3 class="product-title">Bata vada</h3>
                                    <h4>Ingredients:</h4>
                                    <h4>potato,ginger,green chilli<br>,corainder leaves,salt,turmeric</h4>

                                    <button class="btn btn-primary btn-flip"><i class="fa-solid fa-arrows-rotate"></i></button>
                                </div>
                            </div>
                        </div>
                        <br />
                    </div>
                    <div class="row">

                        <div class="card">
                            <div class="card-inner">
                                <div class="box card-front">
                                    <img src="../pics1/19.png" class="product-img">
                                    <h3 class="product-title">Pani puri</h3>
                                    <div class="price">₹20.00</div>
                                    <a class="btn add-cart">Add to Cart</a>

                                    <button class="btn btn-primary btn-flip"><i class="fa-solid fa-arrows-rotate"></i></button>
                                </div>
                                <div class="box card-back">
                                    <img src="../pics1/19.png" class="product-img">
                                    <h3 class="product-title">Pani puri</h3>
                                    <h4>Ingredients:</h4>
                                    <h4>semolina,maida,chana,chillies,tamarind<br>,corainder,mint,onion,tomato</h4>

                                    <button class="btn btn-primary btn-flip"><i class="fa-solid fa-arrows-rotate"></i></button>
                                </div>
                            </div>
                        </div>
                        <br />



                        <div class="card">
                            <div class="card-inner">
                                <div class="box card-front">
                                    <img src="../pics1/20.png" class="product-img" width="100px" height="50px">
                                    <h3 class="product-title">Masala Puri</h3>
                                    <div class="price">₹30.00</div>
                                    <a class="btn add-cart">Add to Cart</a>

                                    <button class="btn btn-primary btn-flip"><i class="fa-solid fa-arrows-rotate"></i></button>
                                </div>
                                <div class="box card-back">
                                    <img src="../pics1/20.png" class="product-img">
                                    <h3 class="product-title">Masala Puri</h3>
                                    <h4>Ingredients:</h4>
                                    <h4>white peas,potato,tamaric,onion,<br>ginger garlic paste,mint,corrainder,maida</h4>

                                    <button class="btn btn-primary btn-flip"><i class="fa-solid fa-arrows-rotate"></i></button>
                                </div>
                            </div>
                        </div>
                        <br />




                        <div class="card">
                            <div class="card-inner">
                                <div class="box card-front">
                                    <img src="../pics1/2 (1).png" class="product-img">
                                    <h3 class="product-title">spcl egg sadwich</h3>
                                    <div class="price">₹40.00</div>
                                    <a class="btn add-cart">Add to Cart</a>

                                    <button class="btn btn-primary btn-flip"><i class="fa-solid fa-arrows-rotate"></i></button>
                                </div>
                                <div class="box card-back">
                                    <img src="../pics1/2 (1).png" class="product-img">
                                    <h3 class="product-title">spcl egg sadwich</h3>
                                    <h4>Ingredients:</h4>
                                    <h4>bread,egg,mayonaise,chilli<br>salr,chilli powder</h4>

                                    <button class="btn btn-primary btn-flip"><i class="fa-solid fa-arrows-rotate"></i></button>
                                </div>
                            </div>
                        </div>
                        <br />
                    </div>
                </div><br />
                <center>
                    <button id="showBtn" class="btn btn-dark">SHOW MORE</button>
                </center>
            </div>
        </div>
    </section>

    <section class="menu" id="menu">
        <h3 class="font">Milkshakes &fresh juices</h3>
        <div class="box-container">
            <div class="container">

                <div class="row">

                    <div class="card">
                        <div class="card-inner">
                            <div class="box card-front">
                                <img src="../pics1/1 lemon sweet drink.png" class="product-img">
                                <h3 class="product-title">lemon sweet drink </h3>
                                <div class="price">₹50.00</div>
                                <a class="btn add-cart">Add to Cart</a>

                                <button class="btn btn-primary btn-flip"><i class="fa-solid fa-arrows-rotate"></i></button>
                            </div>
                            <div class="box card-back">
                                <img src="../pics1/1 lemon sweet drink.png" class="product-img">
                                <h3 class="product-title">lemon sweet drink</h3>
                                <h4>Ingredients:</h4>
                                <h4>lemon,soda,sugar,mint</h4>


                                <button class="btn btn-primary btn-flip"><i class="fa-solid fa-arrows-rotate"></i></button>
                            </div>
                        </div>
                    </div>
                    <br />



                    <div class="card">
                        <div class="card-inner">
                            <div class="box card-front">
                                <img src="../pics1/2 mango milkshake.png" class="product-img">
                                <h3 class="product-title">Mango milkshake </h3>
                                <div class="price">₹60.00</div>
                                <a class="btn add-cart">Add to Cart</a>

                                <button class="btn btn-primary btn-flip"><i class="fa-solid fa-arrows-rotate"></i></button>
                            </div>
                            <div class="box card-back">
                                <img src="../pics1/2 mango milkshake.png" class="product-img">
                                <h3 class="product-title">Mango milkshake </h3>
                                <h4>Ingredients:</h4>
                                <h4>mango,milk,sugar</h4>


                                <button class="btn btn-primary btn-flip"><i class="fa-solid fa-arrows-rotate"></i></button>
                            </div>
                        </div>
                    </div>
                    <br />




                    <div class="card">
                        <div class="card-inner">
                            <div class="box card-front">
                                <img src="../pics1/3 dry fruit milkshake.png" class="product-img">
                                <h3 class="product-title">Dry fruit milkshake</h3>
                                <div class="price">₹60.00</div>
                                <a class="btn add-cart">Add to Cart</a>

                                <button class="btn btn-primary btn-flip"><i class="fa-solid fa-arrows-rotate"></i></button>
                            </div>
                            <div class="box card-back">
                                <img src="../pics1/3 Dry fruit milkshake.png" class="product-img">
                                <h3 class="product-title">Dry fruit milkshake</h3>
                                <h4>Ingredients:</h4>
                                <h4>milk,almond,pista,anjeer,dates<br>,chashews,raisins</h4>

                                <button class="btn btn-primary btn-flip"><i class="fa-solid fa-arrows-rotate"></i></button>
                            </div>
                        </div>
                    </div>
                    <br />
                </div>


                <div class="row">

                    <div class="card">
                        <div class="card-inner">
                            <div class="box card-front">
                                <img src="../pics1/4 chickoo milkshake.png" class="product-img">
                                <h3 class="product-title">Chickoo milkshake</h3>
                                <div class="price">₹50.00</div>
                                <a class="btn add-cart">Add to Cart</a>

                                <button class="btn btn-primary btn-flip"><i class="fa-solid fa-arrows-rotate"></i></button>
                            </div>
                            <div class="box card-back">
                                <img src="../pics1/4 chickoo milkshake.png" class="product-img">
                                <h3 class="product-title">Chickoo milkshake </h3>
                                <h4>Ingredients:</h4>
                                <h4>chickoo,milk,sugar</h4>

                                <button class="btn btn-primary btn-flip"><i class="fa-solid fa-arrows-rotate"></i></button>
                            </div>
                        </div>
                    </div>
                    <br />



                    <div class="card">
                        <div class="card-inner">
                            <div class="box card-front">
                                <img src="../pics1/5 shamam milkshake.png" class="product-img">
                                <h3 class="product-title">Shamam milkshake</h3>
                                <div class="price">₹50.00</div>
                                <a class="btn add-cart">Add to Cart</a>

                                <button class="btn btn-primary btn-flip"><i class="fa-solid fa-arrows-rotate"></i></button>
                            </div>
                            <div class="box card-back">
                                <img src="../pics1/5 shamam milkshake.png" class="product-img">
                                <h3 class="product-title">Shamam milkshake</h3>
                                <h4>Ingredients:</h4>
                                <h4>Shamam,milk,sugar</h4>

                                <button class="btn btn-primary btn-flip"><i class="fa-solid fa-arrows-rotate"></i></button>
                            </div>
                        </div>
                    </div>
                    <br />




                    <div class="card">
                        <div class="card-inner">
                            <div class="box card-front">
                                <img src="../pics1/6 shitafal milkshake (1).png" class="product-img">
                                <h3 class="product-title">Shitafal milkshake</h3>
                                <div class="price">₹50.00</div>
                                <a class="btn add-cart">Add to Cart</a>

                                <button class="btn btn-primary btn-flip"><i class="fa-solid fa-arrows-rotate"></i></button>
                            </div>
                            <div class="box card-back">
                                <img src="../pics1/6 shitafal milkshake (1).png" class="product-img">
                                <h3 class="product-title">Shitafal milkshake</h3>
                                <h4>Ingredients:</h4>
                                <h4>Shitafal,milk,sugar</h4>

                                <button class="btn btn-primary btn-flip"><i class="fa-solid fa-arrows-rotate"></i></button>
                            </div>
                        </div>
                    </div>
                    <br />
                </div>


                <div class="row pi-to-hide" id="hide3">
                    <div class="row">

                        <div class="card">
                            <div class="card-inner">
                                <div class="box card-front">
                                    <img src="../pics1/7 anjeer milkshake (1).png" class="product-img">
                                    <h3 class="product-title">Anjeer milkshake</h3>
                                    <div class="price">₹60.00</div>
                                    <a class="btn add-cart">Add to Cart</a>

                                    <button class="btn btn-primary btn-flip"><i class="fa-solid fa-arrows-rotate"></i></button>
                                </div>
                                <div class="box card-back">
                                    <img src="../pics1/7 anjeer milkshake (1).png" class="product-img">
                                    <h3 class="product-title">Anjeer milkshake</h3>
                                    <h4>Ingredients:</h4>
                                    <h4>milk,sugar,anjeer</h4>

                                    <button class="btn btn-primary btn-flip"><i class="fa-solid fa-arrows-rotate"></i></button>
                                </div>
                            </div>
                        </div>
                        <br />



                        <div class="card">
                            <div class="card-inner">
                                <div class="box card-front">
                                    <img src="../pics1/8 khajoor milkshake.png" class="product-img">
                                    <h3 class="product-title">Khajoor milkshake</h3>
                                    <div class="price">₹60.00</div>
                                    <a class="btn add-cart">Add to Cart</a>

                                    <button class="btn btn-primary btn-flip"><i class="fa-solid fa-arrows-rotate"></i></button>
                                </div>
                                <div class="box card-back">
                                    <img src="../pics1/8 khajoor milkshake.png" class="product-img">
                                    <h3 class="product-title">Khajoor milkshake</h3>
                                    <h4>Ingredients:</h4>
                                    <h4>milk,sugar,dates</h4>

                                    <button class="btn btn-primary btn-flip"><i class="fa-solid fa-arrows-rotate"></i></button>
                                </div>
                            </div>
                        </div>
                        <br />




                        <div class="card">
                            <div class="card-inner">
                                <div class="box card-front">
                                    <img src="../pics1/9 oreo milkshake.png" class="product-img">
                                    <h3 class="product-title">Oreo milkshake</h3>
                                    <div class="price">₹70.00</div>
                                    <a class="btn add-cart">Add to Cart</a>

                                    <button class="btn btn-primary btn-flip"><i class="fa-solid fa-arrows-rotate"></i></button>
                                </div>
                                <div class="box card-back">
                                    <img src="../pics1/9 oreo milkshake.png" class="product-img">
                                    <h3 class="product-title">Oreo milkshake</h3>
                                    <h4>Ingredients:</h4>
                                    <h4>Oreo biscuits,milk,sugar</h4>

                                    <button class="btn btn-primary btn-flip"><i class="fa-solid fa-arrows-rotate"></i></button>
                                </div>
                            </div>
                        </div>
                        <br />
                    </div>
                    <div class="row">

                        <div class="card">
                            <div class="card-inner">
                                <div class="box card-front">
                                    <img src="../pics1/10 coffee milkshake.png" class="product-img">
                                    <h3 class="product-title">Coffee milkshake</h3>
                                    <div class="price">₹60.00</div>
                                    <a class="btn add-cart">Add to Cart</a>

                                    <button class="btn btn-primary btn-flip"><i class="fa-solid fa-arrows-rotate"></i></button>
                                </div>
                                <div class="box card-back">
                                    <img src="../pics1/10 coffee milkshake.png" class="product-img">
                                    <h3 class="product-title">Coffee milkshake</h3>
                                    <h4>Ingredients:</h4>
                                    <h4> coffee powder,sugar,milk</h4>

                                    <button class="btn btn-primary btn-flip"><i class="fa-solid fa-arrows-rotate"></i></button>
                                </div>
                            </div>
                        </div>
                        <br />



                        <div class="card">
                            <div class="card-inner">
                                <div class="box card-front">
                                    <img src="../pics1/11 banana milkshake.png" class="product-img">
                                    <h3 class="product-title">Banana milkshake</h3>
                                    <div class="price">₹50.00</div>
                                    <a class="btn add-cart">Add to Cart</a>

                                    <button class="btn btn-primary btn-flip"><i class="fa-solid fa-arrows-rotate"></i></button>
                                </div>
                                <div class="box card-back">
                                    <img src="../pics1/11 banana milkshake.png" class="product-img">
                                    <h3 class="product-title">Banana milkshake</h3>
                                    <h4>Ingredients:</h4>
                                    <h4>banana,milk,sugar</h4>

                                    <button class="btn btn-primary btn-flip"><i class="fa-solid fa-arrows-rotate"></i></button>
                                </div>
                            </div>
                        </div>
                        <br />




                        <div class="card">
                            <div class="card-inner">
                                <div class="box card-front">
                                    <img src="../pics1/12 apple milkshake.png" class="product-img">
                                    <h3 class="product-title">Apple milkshake</h3>
                                    <div class="price">₹50.00</div>
                                    <a class="btn add-cart">Add to Cart</a>

                                    <button class="btn btn-primary btn-flip"><i class="fa-solid fa-arrows-rotate"></i></button>
                                </div>
                                <div class="box card-back">
                                    <img src="../pics1/12 apple milkshake.png" class="product-img">
                                    <h3 class="product-title">Apple milkshake</h3>
                                    <h4>Ingredients:</h4>
                                    <h4>apple,milk,sugar</h4>

                                    <button class="btn btn-primary btn-flip"><i class="fa-solid fa-arrows-rotate"></i></button>
                                </div>
                            </div>
                        </div>
                        <br />
                    </div>

                    <div class="row">

                        <div class="card">
                            <div class="card-inner">
                                <div class="box card-front">
                                    <img src="../pics1/13 chocolate milkshake.png" class="product-img">
                                    <h3 class="product-title">Chocolate milkshake</h3>
                                    <div class="price">₹60.00</div>
                                    <a class="btn add-cart">Add to Cart</a>

                                    <button class="btn btn-primary btn-flip"><i class="fa-solid fa-arrows-rotate"></i></button>
                                </div>
                                <div class="box card-back">
                                    <img src="../pics1/13 chocolate milkshake.png" class="product-img">
                                    <h3 class="product-title">Chocolate milkshake</h3>
                                    <h4>Ingredients:</h4>
                                    <h4>Hershys,dark chocolate,sugar,milk</h4>

                                    <button class="btn btn-primary btn-flip"><i class="fa-solid fa-arrows-rotate"></i></button>
                                </div>
                            </div>
                        </div>
                        <br />



                        <div class="card">
                            <div class="card-inner">
                                <div class="box card-front">
                                    <img src="../pics1/14 very berry milkshake (1).png" class="product-img">
                                    <h3 class="product-title">Very Berry milkshake</h3>
                                    <div class="price">₹80.00</div>
                                    <a class="btn add-cart">Add to Cart</a>

                                    <button class="btn btn-primary btn-flip"><i class="fa-solid fa-arrows-rotate"></i></button>
                                </div>
                                <div class="box card-back">
                                    <img src="../pics1/14 very berry milkshake (1).png" class="product-img">
                                    <h3 class="product-title"> Very Berry milkshake</h3>
                                    <h4>Ingredients:</h4>
                                    <h4>Strawberries,Raspberries,milk,sugar</h4>

                                    <button class="btn btn-primary btn-flip"><i class="fa-solid fa-arrows-rotate"></i></button>
                                </div>
                            </div>
                        </div>
                        <br />




                        <div class="card">
                            <div class="card-inner">
                                <div class="box card-front">
                                    <img src="../pics1/15 musambi juice.png" class="product-img">
                                    <h3 class="product-title">Musambi juice</h3>
                                    <div class="price">₹40.00</div>
                                    <a class="btn add-cart">Add to Cart</a>

                                    <button class="btn btn-primary btn-flip"><i class="fa-solid fa-arrows-rotate"></i></button>
                                </div>
                                <div class="box card-back">
                                    <img src="../pics1/15 musambi juice.png" class="product-img">
                                    <h3 class="product-title">Musambi juice</h3>
                                    <h4>Ingredients:</h4>
                                    <h4>Musambi,water,sugar</h4>

                                    <button class="btn btn-primary btn-flip"><i class="fa-solid fa-arrows-rotate"></i></button>
                                </div>
                            </div>
                        </div>
                        <br />
                    </div>
                    <div class="row">

                        <div class="card">
                            <div class="card-inner">
                                <div class="box card-front">
                                    <img src="../pics1/16 grape juice.png" class="product-img">
                                    <h3 class="product-title">Grape juice</h3>
                                    <div class="price">₹40.00</div>
                                    <a class="btn add-cart">Add to Cart</a>

                                    <button class="btn btn-primary btn-flip"><i class="fa-solid fa-arrows-rotate"></i></button>
                                </div>
                                <div class="box card-back">
                                    <img src="../pics1/16 grape juice.png" class="product-img">
                                    <h3 class="product-title">Grape juice</h3>
                                    <h4>Ingredients:</h4>
                                    <h4>grape,water,sugar</h4>

                                    <button class="btn btn-primary btn-flip"><i class="fa-solid fa-arrows-rotate"></i></button>
                                </div>
                            </div>
                        </div>
                        <br />



                        <div class="card">
                            <div class="card-inner">
                                <div class="box card-front">
                                    <img src="../pics1/17 pinapple juice.png" class="product-img">
                                    <h3 class="product-title">Pinapple juice</h3>
                                    <div class="price">₹40.00</div>
                                    <a class="btn add-cart">Add to Cart</a>

                                    <button class="btn btn-primary btn-flip"><i class="fa-solid fa-arrows-rotate"></i></button>
                                </div>
                                <div class="box card-back">
                                    <img src="../pics1/17 pinapple juice.png" class="product-img">
                                    <h3 class="product-title">Pinapple juice</h3>
                                    <h4>Ingredients:</h4>
                                    <h4>pinapple,water,sugar</h4>

                                    <button class="btn btn-primary btn-flip"><i class="fa-solid fa-arrows-rotate"></i></button>
                                </div>
                            </div>
                        </div>
                        <br />




                        <div class="card">
                            <div class="card-inner">
                                <div class="box card-front">
                                    <img src="../pics1/18 pappaya juice.png" class="product-img">
                                    <h3 class="product-title">Pappaya juice</h3>
                                    <div class="price">₹40.00</div>
                                    <a class="btn add-cart">Add to Cart</a>

                                    <button class="btn btn-primary btn-flip"><i class="fa-solid fa-arrows-rotate"></i></button>
                                </div>
                                <div class="box card-back">
                                    <img src="../pics1/18 pappaya juice.png" class="product-img">
                                    <h3 class="product-title">Pappaya juice</h3>
                                    <h4>Ingredients:</h4>
                                    <h4>pappaya,water,sugar,</h4>

                                    <button class="btn btn-primary btn-flip"><i class="fa-solid fa-arrows-rotate"></i></button>
                                </div>
                            </div>
                        </div>
                        <br />
                    </div>

                </div><br />
                <center>
                    <button id="showBt" class="btn btn-dark">SHOW MORE</button>
                </center>
            </div>
        </div>
    </section>

    <section class="menu" id="menu">
        <h3 class="font">Soft drinks &Mojitos</h3>
        <div class="box-container">
            <div class="container">

                <div class="row">

                    <div class="card">
                        <div class="card-inner">
                            <div class="box card-front">
                                <img src="../pics1/1 red chilli mojito (1).png" class="product-img">
                                <h3 class="product-title">Red chilli mojito</h3>
                                <div class="price">₹60.00</div>
                                <a class="btn add-cart">Add to Cart</a>

                                <button class="btn btn-primary btn-flip"><i class="fa-solid fa-arrows-rotate"></i></button>
                            </div>
                            <div class="box card-back">
                                <img src="../pics1/1 red chilli mojito (1).png" class="product-img">
                                <h3 class="product-title">Red chilli mojito</h3>
                                <h4>Ingredients:</h4>
                                <h4>Red chili,Mint leaves,Lime,Sugar,Soda water</h4>


                                <button class="btn btn-primary btn-flip"><i class="fa-solid fa-arrows-rotate"></i></button>
                            </div>
                        </div>
                    </div>
                    <br />



                    <div class="card">
                        <div class="card-inner">
                            <div class="box card-front">
                                <img src="../pics1/2 watermelon mojito (1).png" class="product-img">
                                <h3 class="product-title">Watermelon mojito </h3>
                                <div class="price">₹50.00</div>
                                <a class="btn add-cart">Add to Cart</a>

                                <button class="btn btn-primary btn-flip"><i class="fa-solid fa-arrows-rotate"></i></button>
                            </div>
                            <div class="box card-back">
                                <img src="../pics1/2 watermelon mojito (1).png" class="product-img">
                                <h3 class="product-title">Watermelon mojito</h3>
                                <h4>Ingredients:</h4>
                                <h4>Watermelon, mint leaves, lime,<br> sugar,soda water</h4>


                                <button class="btn btn-primary btn-flip"><i class="fa-solid fa-arrows-rotate"></i></button>
                            </div>
                        </div>
                    </div>
                    <br />




                    <div class="card">
                        <div class="card-inner">
                            <div class="box card-front">
                                <img src="../pics1/3 blue coracaine mojito (1).png" class="product-img">
                                <h3 class="product-title">Blue coracaine mojito </h3>
                                <div class="price">₹60.00</div>
                                <a class="btn add-cart">Add to Cart</a>

                                <button class="btn btn-primary btn-flip"><i class="fa-solid fa-arrows-rotate"></i></button>
                            </div>
                            <div class="box card-back">
                                <img src="../pics1/3 blue coracaine mojito (1).png" class="product-img">
                                <h3 class="product-title">Blue coracaine mojito </h3>
                                <h4>Ingredients:</h4>
                                <h4>Blue curaçao syrup, mint leaves, lime, sugar,soda water</h4>

                                <button class="btn btn-primary btn-flip"><i class="fa-solid fa-arrows-rotate"></i></button>
                            </div>
                        </div>
                    </div>
                    <br />
                </div>


                <div class="row">

                    <div class="card">
                        <div class="card-inner">
                            <div class="box card-front">
                                <img src="../pics1/4 lemon mint mojito.png" class="product-img">
                                <h3 class="product-title">Lemon mint mojito</h3>
                                <div class="price">₹50.00</div>
                                <a class="btn add-cart">Add to Cart</a>

                                <button class="btn btn-primary btn-flip"><i class="fa-solid fa-arrows-rotate"></i></button>
                            </div>
                            <div class="box card-back">
                                <img src="../pics1/4 lemon mint mojito.png" class="product-img">
                                <h3 class="product-title">Lemon mint mojito</h3>
                                <h4>Ingredients:</h4>
                                <h4>Lemon, mint leaves, sugar,soda water</h4>

                                <button class="btn btn-primary btn-flip"><i class="fa-solid fa-arrows-rotate"></i></button>
                            </div>
                        </div>
                    </div>
                    <br />



                    <div class="card">
                        <div class="card-inner">
                            <div class="box card-front">
                                <img src="../pics1/5 thumps up.png" class="product-img">
                                <h3 class="product-title">Thumps up</h3>
                                <div class="price">₹30.00</div>
                                <a class="btn add-cart">Add to Cart</a>

                                <button class="btn btn-primary btn-flip"><i class="fa-solid fa-arrows-rotate"></i></button>
                            </div>
                            <div class="box card-back">
                                <img src="../pics1/5 thumps up.png" class="product-img">
                                <h3 class="product-title">Thumps up</h3>
                                <h4>Ingredients:</h4>
                                <h4>Carbonated water, sugar, caramel color,<br> phosphoric acid</h4>

                                <button class="btn btn-primary btn-flip"><i class="fa-solid fa-arrows-rotate"></i></button>
                            </div>
                        </div>
                    </div>
                    <br />




                    <div class="card">
                        <div class="card-inner">
                            <div class="box card-front">
                                <img src="../pics1/6 mountain dew.png" class="product-img">
                                <h3 class="product-title">Mountain dew</h3>
                                <div class="price">₹30.00</div>
                                <a class="btn add-cart">Add to Cart</a>

                                <button class="btn btn-primary btn-flip"><i class="fa-solid fa-arrows-rotate"></i></button>
                            </div>
                            <div class="box card-back">
                                <img src="../pics1/6 mountain dew.png" class="product-img">
                                <h3 class="product-title">Mountain dew</h3>
                                <h4>Ingredients:</h4>
                                <h4>Carbonated water, corn syrup, orange juice, citric acid, </h4>

                                <button class="btn btn-primary btn-flip"><i class="fa-solid fa-arrows-rotate"></i></button>
                            </div>
                        </div>
                    </div>
                    <br />
                </div>



               
                <div class="row p-to-hide" id="hide4">
                    <div class="row">

                        <div class="card">
                            <div class="card-inner">
                                <div class="box card-front">
                                    <img src="../pics1/7 sprite.png" class="product-img">
                                    <h3 class="product-title">Sprite</h3>
                                    <div class="price">₹30.00</div>
                                    <a class="btn add-cart">Add to Cart</a>

                                    <button class="btn btn-primary btn-flip"><i class="fa-solid fa-arrows-rotate"></i></button>
                                </div>
                                <div class="box card-back">
                                    <img src="../pics1/7 sprite.png" class="product-img">
                                    <h3 class="product-title">Sprite</h3>
                                    <h4>Ingredients:</h4>
                                    <h4>Carbonated water,corn syrup, citric acid,sodium citrate, sodium benzoate</h4>

                                    <button class="btn btn-primary btn-flip"><i class="fa-solid fa-arrows-rotate"></i></button>
                                </div>
                            </div>
                        </div>
                        <br />



                        <div class="card">
                            <div class="card-inner">
                                <div class="box card-front">
                                    <img src="../pics1/8 coca cola.png" class="product-img">
                                    <h3 class="product-title">Coca cola</h3>
                                    <div class="price">₹30.00</div>
                                    <a class="btn add-cart">Add to Cart</a>

                                    <button class="btn btn-primary btn-flip"><i class="fa-solid fa-arrows-rotate"></i></button>
                                </div>
                                <div class="box card-back">
                                    <img src="../pics1/8 coca cola.png" class="product-img">
                                    <h3 class="product-title">Coca cola</h3>
                                    <h4>Ingredients:</h4>
                                    <h4>Carbonated water,corn syrup,<br> caramel color,phosphoric acid,caffeine</h4>

                                    <button class="btn btn-primary btn-flip"><i class="fa-solid fa-arrows-rotate"></i></button>
                                </div>
                            </div>
                        </div>
                        <br />




                        <div class="card">
                            <div class="card-inner">
                                <div class="box card-front">
                                    <img src="../pics1/9 fanta.png" class="product-img">
                                    <h3 class="product-title">Fanta</h3>
                                    <div class="price">₹30.00</div>
                                    <a class="btn add-cart">Add to Cart</a>

                                    <button class="btn btn-primary btn-flip"><i class="fa-solid fa-arrows-rotate"></i></button>
                                </div>
                                <div class="box card-back">
                                    <img src="../pics1/9 fanta.png" class="product-img">
                                    <h3 class="product-title">Fanta</h3>
                                    <h4>Ingredients:</h4>
                                    <h4>Carbonated water,corn syrup, citric acid,<br>sodium benzoate,acacia gum, ester gum</h4>

                                    <button class="btn btn-primary btn-flip"><i class="fa-solid fa-arrows-rotate"></i></button>
                                </div>
                            </div>
                        </div>
                        <br />
                    </div>

                </div><br />
                <center>
                    <button id="showB" class="btn btn-dark">SHOW MORE</button>
                </center>
            </div>
        </div>
    </section>


    <!-- FOOTER SECTION -->

    <div class="footer-container">
        <div class="newsletters">
            <div class="input-wrapper">
                <i id="paper-plane-icon"></i>
            </div>
        </div>
    </div>



    <!-- JS File Link -->
    <script src="../assets/js/googleSignIn.js"></script>
    <script src="../assets/js/script6.js"></script>
    <script src="../assets/js/responses.js"></script>
    <script src="../assets/js/convo.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <script>
        // CODE FOR THE FORMSPREE
        window.onbeforeunload = () => {
            for (const form of document.getElementsByTagName('form')) {
                form.reset();
            }
        }


        // CODE FOR THE SHOW MORE & SHOW LESS BUTTON IN MENU
        $(document).ready(function() {
            $(".row-to-hide").hide();
            $(".showHideBtn").text("SHOW MORE");
            $(".showHideBtn").click(function() {
                $(".row-to-hide").toggle();
                if ($(".row-to-hide").is(":visible")) {
                    $(this).text("SHOW LESS");
                } else {
                    $(this).text("SHOW MORE");
                }
            });
        });

        $(document).ready(function() {
            $(".pic-to-hide").hide();
            $("#showBtn").text("SHOW MORE");
            $("#showBtn").click(function() {
                $(".pic-to-hide").toggle();
                if ($(".pic-to-hide").is(":visible")) {
                    $(this).text("SHOW LESS");
                } else {
                    $(this).text("SHOW MORE");
                }
            });
        });

        $(document).ready(function() {
            $(".pi-to-hide").hide();
            $("#showBt").text("SHOW MORE");
            $("#showBt").click(function() {
                $(".pi-to-hide").toggle();
                if ($(".pi-to-hide").is(":visible")) {
                    $(this).text("SHOW LESS");
                } else {
                    $(this).text("SHOW MORE");
                }
            });
        });
        $(document).ready(function() {
            $(".p-to-hide").hide();
            $("#showB").text("SHOW MORE");
            $("#showB").click(function() {
                $(".p-to-hide").toggle();
                if ($(".p-to-hide").is(":visible")) {
                    $(this).text("SHOW LESS");
                } else {
                    $(this).text("SHOW MORE");
                }
            });
        });


        $(document).ready(function() {
            $('.btn-flip').on('click', function() {
                var card = $(this).closest('.card');
                card.toggleClass('flipped');
            });
        });
    </script>
</body>

</html>