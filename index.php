<!--
Project Name: E-Shop
Start Date:10-11-2016 
-->
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->


        <title>E Shop</title>

        <!-- Bootstrap -->
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="resours/css/font-awesome.min.css">

        <!-- google font-->
        <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500i,700,900" rel="stylesheet">
        
        
        <!--    theme styling-->
        <link href="style.css" rel="stylesheet">
        <link href="responsive.css" rel="stylesheet">

    </head>
    <body>
        <!--Start Top Bar content-->
        <div class="top_bar">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-5">
                        <div class="contact-info">
                            <a><i class="fa fa-phone-square"></i> Call Us: +008 01710 000 111</a>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-7">
                        <div class="login_signup">
                            <ul class="nav navbar-nav navbar-right">
                                <li>
                                    <a href="login.php" ><i class="fa fa-user"></i> Login</a>
                                </li>
                                <li>
                                    <a href="registration.php"><i class="fa fa-lock"></i> Create an Account</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--End Top Bar -->

        <!--start header content -->
        <nav class="header navbar navbar-default">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <div class="logo navbar-brand">
                        <a href="index.php">
                            <span>E</span>-Shop
                        </a>
                    </div>
                </div>
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="#">Home</a></li>
                        <li>
                            <a href="#">Men <i class="fa fa-caret-down" aria-hidden="true"></i></a>
                        </li>
                        <li>
                            <a href="#">Women <i class="fa fa-caret-down" aria-hidden="true"></i></a>
                        </li>
                        <li>
                            <a href="#">Kids <i class="fa fa-caret-down" aria-hidden="true"></i></a>
                        </li>
                        <li><a href="#">Typo</a></li>
                        <li><a href="#">Contact</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!--end header content -->
        
        <!--start slider content -->
        <div class="slider">
            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="3"></li>
                </ol>
                <div class="carousel-inner" role="listbox">
                    <div class="item active">
                        <img src="images/slider/5.png" alt="...">
                        <div class="carousel-caption">
                            <h1>Smart But Casual</h1>
                            <h5>Start your shopping here</h5>
                            <a href="javascript:void(0)" class="btn">SHOP COLLECTION NOW</a>
                        </div>
                    </div>
                    <div class="item">
                        <img src="images/slider/6.png" alt="...">
                        <div class="carousel-caption">
                            <h1>Shop Online</h1>
                            <h5>Start your shopping here</h5>
                            <a href="javascript:void(0)" class="btn">SHOP COLLECTION NOW</a>
                        </div>
                    </div>
                    <div class="item">
                        <img src="images/slider/8.png" alt="...">
                        <div class="carousel-caption">
                            <h1>Pack your Bag</h1>
                            <h5>Start your shopping here</h5>
                            <a href="javascript:void(0)" class="btn">SHOP COLLECTION NOW</a>
                        </div>
                    </div>
                    <div class="item">
                        <img src="images/slider/3.png" alt="...">
                        <div class="carousel-caption">
                            <h1>Pack your Bag</h1>
                            <h5>Start your shopping here</h5>
                            <a href="javascript:void(0)" class="btn">SHOP COLLECTION NOW</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--end slider content -->


        <!--start online content-->
        <div class="online_strip">
            <div class="container online">
                <div class="row">
                    <div class="col-sm-4 col-md-4 col-lg-4">
                        <div class="follow">
                            <h3>follow us:
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-facebook"></i></a>
                            </h3>
                        </div>
                    </div>
                    <div class="col-sm-4 col-md-4 col-lg-4">
                        <div class="shipping">
                            <h3>Free Shipping</h3>
                            <h5>on order over $199</h5>
                        </div>
                    </div>
                    <div class="col-sm-4 col-md-4 col-lg-4">
                        <div class="online_order">
                            <h3>Order Online</h3>
                            <h5>Tel:999 4567 8902</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--end online content-->

        <!--start online selling content-->
        <div class="online_product">
            <div class="container">
                <h2>Latest Products</h2>
                <div class="row">
                    <div class="col-sm-6 col-md-4 col-lg-4">
                        <div class="item">
                            <a href="#" class="thumbnail">
                                <img src="images/1.png" alt="...">
                            </a>
                            <div class="view">
                                <a href="#">Quick View</a>
                            </div>
                            <div class="product">
                                <a class="product-name" href="">fdfsdf</a>
                                <p>
                                    <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                    <span class="product-price">$520.00</span>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-4">
                        <div class="item">
                            <a href="#" class="thumbnail">
                                <img src="images/2.png" alt="...">
                            </a>
                            <div class="view">
                                <a href="#">Quick View</a>
                            </div>
                            <div class="product">
                                <a class="product-name" href="">fdfsdf</a>
                                <p>
                                    <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                    <span class="product-price">$520.00</span>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-4">
                        <div class="item">
                            <a href="#" class="thumbnail">
                                <img src="images/3.png" alt="...">
                            </a>
                            <div class="view">
                                <a href="#">Quick View</a>
                            </div>
                            <div class="product">
                                <a class="product-name" href="">fdfsdf</a>
                                <p>
                                    <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                    <span class="product-price">$520.00</span>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-4">
                        <div class="item">
                            <a href="#" class="thumbnail">
                                <img src="images/5.png" alt="...">
                            </a>
                            <div class="view">
                                <a href="#">Quick View</a>
                            </div>
                            <div class="product">
                                <a class="product-name" href="">fdfsdf</a>
                                <p>
                                    <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                    <span class="product-price">$520.00</span>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-4">
                        <div class="item">
                            <a href="#" class="thumbnail">
                                <img src="images/6.png" alt="...">
                            </a>
                            <div class="view">
                                <a href="#">Quick View</a>
                            </div>
                            <div class="product">
                                <a class="product-name" href="">fdfsdf</a>
                                <p>
                                    <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                    <span class="product-price">$520.00</span>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-4">
                        <div class="item">
                            <a href="#" class="thumbnail">
                                <img src="images/7.png" alt="...">
                            </a>
                            <div class="view">
                                <a href="#">Quick View</a>
                            </div>
                            <div class="product">
                                <a class="product-name" href="">fdfsdf</a>
                                <p>
                                    <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                    <span class="product-price">$520.00</span>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-4">
                        <div class="item">
                            <a href="#" class="thumbnail">
                                <img src="images/1.png" alt="...">
                            </a>
                            <div class="view">
                                <a href="#">Quick View</a>
                            </div>
                            <div class="product">
                                <a class="product-name" href="">fdfsdf</a>
                                <p>
                                    <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                    <span class="product-price">$520.00</span>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-4">
                        <div class="item">
                            <a href="#" class="thumbnail">
                                <img src="images/8.png" alt="...">
                            </a>
                            <div class="view">
                                <a href="#">Quick View</a>
                            </div>
                            <div class="product">
                                <a class="product-name" href="">fdfsdf</a>
                                <p>
                                    <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                    <span class="product-price">$520.00</span>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-offset-3 col-md-offset-0 col-sm-6 col-md-4 col-lg-4">
                        <div class="item">
                            <a href="#" class="thumbnail">
                                <img src="images/9.png" alt="...">
                            </a>
                            <div class="view">
                                <a href="#">Quick View</a>
                            </div>
                            <div class="product">
                                <a class="product-name" href="">fdfsdf</a>
                                <p>
                                    <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                    <span class="product-price"> $520.00</span>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--end online selling content-->

        <!--start collection content-->
        <div class="collection">
            <div class="container">
                <h2>Featured Collection</h2>
                <div class="row">
                    <div class="col-xs-6 col-lg-3">
                        <a href="#" class="thumbnail">
                            <img src="images/featured/1.png" alt="....">
                        </a>
                    </div>
                    <div class="col-xs-6 col-lg-3">
                        <a href="#" class="thumbnail">
                            <img src="images/featured/2.png" alt="....">
                        </a>
                    </div>
                    <div class="col-xs-6 col-lg-3">
                        <a href="#" class="thumbnail">
                            <img src="images/featured/3.png" alt="....">
                        </a>
                    </div>
                    <div class="col-xs-6 col-lg-3">
                        <a href="#" class="thumbnail">
                            <img src="images/featured/4.png" alt="....">
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!--end collection content-->

        <!--start subcribe content-->
        <div class="subcribe">
            <div class="container">
                <div class="join">
                    <div class="col-lg-4">
                        <h4>JOIN OUR MAILING LIST</h4>
                    </div>
                    <div class="col-lg-8">
                        <div class="input-group">
                            <input type="text" class="input input-lg form-control" placeholder="Enter your email here">
                            <span class="input-group-btn">
                                <button class="btn btn-lg btn-default" type="button">SUBSCRIBE</button>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--end subcribe content-->

        <!--start footer content-->
        <footer class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-xs-6 ful_480 col-sm-3 col-md-3 col-lg-3">
                        <div class="item other_info">
                            <h4>Shop</h4>
                            <ul>
                                <li><a href="#">New Arrivals</a></li>
                                <li><a href="#">Men</a></li>
                                <li><a href="#">Women</a></li>
                                <li><a href="#">Accessories</a></li>
                                <li><a href="#">Kids</a></li>
                                <li><a href="#">Brands</a></li>
                                <li><a href="#">Trends</a></li>
                                <li><a href="#">Sale</a></li>
                                <li><a href="#">Style Videos</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xs-6 ful_480 col-sm-3 col-md-3 col-lg-3">
                        <div class="item other_info">
                            <h4>Help</h4>
                            <ul>
                                <li><a href="#">Frequently Asked Questions</a></li>
                                <li><a href="#">Men</a></li>
                                <li><a href="#">Women</a></li>
                                <li><a href="#">Accessories</a></li>
                                <li><a href="#">Brands</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xs-6 ful_480 col-sm-3 col-md-3 col-lg-3">
                        <div class="item other_info">
                            <h4>Account</h4>
                            <ul>
                                <li><a href="#">Login</a></li>
                                <li><a href="#">Create An Account</a></li>
                                <li><a href="#">Create Wishlist</a></li>
                                <li><a href="#">My Shopping Bag</a></li>
                                <li><a href="#">Brands</a></li>
                                <li><a href="#">Create Wishlist</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xs-6 ful_480 col-sm-3 col-md-3 col-lg-3">
                        <div class="item other_info">
                            <h4>Popular</h4>
                            <ul>
                                <li><a href="#">New Arrivals</a></li>
                                <li><a href="#">Men</a></li>
                                <li><a href="#">Women</a></li>
                                <li><a href="#">Accessories</a></li>
                                <li><a href="#">Kids</a></li>
                                <li><a href="#">Brands</a></li>
                                <li><a href="#">Trends</a></li>
                                <li><a href="#">Sale</a></li>
                                <li><a href="#">Style Videos</a></li>
                                <li><a href="#">Login</a></li>
                                <li><a href="#">Brands</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <div class="footer_2">
            <div class="container">
                <div class="row">
                    <div class="content">
                        <p>2016 Eshop. All Rights Reserved | Design by Mr.Raihan</p>
                    </div>
                </div>
            </div>
        </div>
        <!--end footer content-->

        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="js/jquery.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="js/bootstrap.min.js"></script>
    </body>
</html>