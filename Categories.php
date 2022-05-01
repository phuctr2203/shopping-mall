<!DOCTYPE html>
<html lang="en-VN">
    <head>
        <title>Browse by Categories | Infinis Mall | The biggest shopping center in Vietnam</title>
        <meta charset="UTF-8">
        <meta name="authors" content="Group 8">
        <meta name="description" content="shopping mall">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta property="og:title" content="#">
        <meta property="og:type" content="#">
        <meta property="og:url" content="#">
        <meta property="og:image" content="#">
        <meta property="og:title" content="#">
        <meta property="og:description" content="#">
        <link rel="stylesheet" type="text/css" href="Categories.css" media="screen">
        <script src="https://kit.fontawesome.com/5143a5dc4e.js" crossorigin="anonymous"></script>
        <link href="libs/toastr/build/toastr.min.css" rel="stylesheet" />
    </head>

    <body>
        <!--Making the container-->
        <div id="container" class="site-container">
            <header>
                <div class="topheader">
                    <div class="logo-img"><img src="images/TheInifis.png"></div>
                    <div id="search">
                        <form>
                            <input type="text" placeholder="Search">
                            <button type="submit"><i class="fa fa-search"></i></button>
                        </form>
                    </div><!--Search-->
                </div><!--Top Header-->
                <nav class="main-menu">
                    <a href="../">
                        <i class="fas fa-home"></i>
                    </a>
                    <div class="dropdown">
                        <button class="dropbtn">Browse by</button>
                        <div class="dropdown-content" id="special">
                            <a href="Brands.php">Brands</a>
                            <a class="active" href="Categories.php">Categories</a>
                            <a href="CreatedTime.php">Created Time</a>
                        </div><!--Shops By (Dropdown)-->
                    </div>
                    <a href="Fees.php">Fees</a> 
                    <a href="FAQs.php">FAQs</a>  
                    <div class="dropdown">
                        <button class="dropbtn">About Us</button>
                        <div class="dropdown-content">
                            <a href="About.php">The Mall</a>
                            <a href="Members.php">Our Members</a>
                        </div>
                    </div><!--About Us (Dropdown)-->
                    <a href="Contact.php">Contact Us</a>
                    <div class="dropdown">
                        <button class="dropbtn">Account
                            <i class="fas fa-user"></i>
                        </button>
                        <div class="dropdown-content">
                            <a href="Login.php" class="login-account">Login</a>
                            <a href="Registration.php">Join our family</a>
                        </div>
                    </div><!--Account (Dropdown)-->
                    <div style="display: block; float: right; margin-right: 10px;">
                        <a href="Checkout.php">
                            <span id="cart-quantity">0</span>
                            <i class="fas fa-shopping-cart"></i>
                        </a>
                    </div>
                </nav>
                <nav class="alt-menu">
                    <div class="side-nav">
                        <div style="display: block; float: left; margin-left: 15px; margin-top: 25px;">
                            <a href="Checkout.php" style="text-decoration: none;">
                                <i class="fas fa-shopping-cart" style="color: white;"></i>
                                <span id="cart-quantity" style="color: white;">0</span>
                            </a>
                        </div>
                        <input type="checkbox" id="check">
                        <label for="check" class="menu-icon">
                            <i class="fa fa-bars"></i>
                        </label>
                        <div class="sub-menu">
                            <a class="empty">Empty</a>
                            <a href="../">Home</a>
                            <div class="drop">
                                <a href="javascript:void(0)" class="active">Browse By</a>
                                <div class="items">
                                    <a href="Brands.php">Brands</a>
                                    <a href="Categories.php" class="active">Categories</a>
                                    <a href="CreatedTime.php">Created Time</a>
                                </div>
                            </div>
                            <a href="Fees.php">Fees</a>
                            <a href="FAQs.php">FAQs</a>
                            <div class="drop">
                                <a href="javascript:void(0)">About Us</a>
                                <div class="items">
                                    <a href="About.php">The Mall</a>
                                    <a href="Members.php">Our Members</a>
                                </div>
                            </div>
                            <a href="Contact.php">Contact Us</a>
                            <div class="drop">
                                <a href="javascript:void(0)">Account</a>
                                <div class="items">
                                    <a href="Login.php" class="login-account">Login</a>
                                    <a href="Registration.php">Join our family</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </nav>
            </header>
            <div class="main">
                <div class="head-categories">
                    <div class="cate-title">
                        <h2><strong>Appliances</strong></h2>
                    </div>
                </div>
                <div class="appliances cate">
                    <div class="store">
                        <div class="store-img">
                            <a href="Apple.php"><img src="images/Lock&Lock Store.jpg"></a>
                        </div>
                        <div class="store-description">
                            <p class="type-of-store">Appliances</p>
                            <a href="Apple.php"><p class="store-name">Lock&Lock</p></a>
                        </div>
                    </div>
                </div><!--Appliances-->
                <div class="head-categories">
                    <div class="cate-title">
                        <h2><strong>Cafes</strong></h2>
                    </div>
                </div>
                <div class="cafes cate">
                    <div class="store">
                        <div class="store-img">
                            <a href="Apple.php"><img src="images/Starbucks Coffee Shop.jpg"></a>
                        </div>
                        <div class="store-description">
                            <p class="type-of-store">Cafes</p>
                            <a href="Apple.php"><p class="store-name">Starbucks</p></a>
                        </div>
                    </div>
                    <div class="store">
                        <div class="store-img">
                            <a href="Apple.php"><img src="images/Trung Nguyen Legend Coffee shop.jpg"></a>
                        </div>
                        <div class="store-description">
                            <p class="type-of-store">Cafes</p>
                            <a href="Apple.php"><p class="store-name">Trung Nguyen Legend</p></a>
                        </div>
                    </div>
                </div><!--Café-->
                <div class="head-categories">
                    <div class="cate-title">
                        <h2><strong>Electronics</strong></h2>
                    </div>
                </div>
                <div class="electronics cate">
                    <div class="store">
                        <div class="store-img">
                            <a href="Apple.php"><img src="images/Apple Store.jpg"></a>
                        </div>
                        <div class="store-description">
                            <p class="type-of-store">Electronics</p>
                            <a href="Apple.php"><p class="store-name">Apple</p></a>
                        </div>
                    </div>
                    <div class="store">
                        <div class="store-img">
                            <a href="Apple.php"><img src="images/Microsoft Store.png"></a>
                        </div>
                        <div class="store-description">
                            <p class="type-of-store">Electronics</p>
                            <a href="Apple.php"><p class="store-name">Microsoft Store</p></a>
                        </div>
                    </div>
                </div><!--Electronics-->
                <div class="head-categories">
                    <div class="cate-title">
                        <h2><strong>Fashion</strong></h2>
                    </div>
                </div>
                <div class="fashion cate">
                    <div class="store">
                        <div class="store-img">
                            <a href="Apple.php"><img src="images/Balenciaga Store.jpg"></a>
                        </div>
                        <div class="store-description">
                            <p class="type-of-store">Fashion</p>
                            <a href="Apple.php"><p class="store-name">Balenciaga</p></a>
                        </div>
                    </div>
                    <div class="store">
                        <div class="store-img">
                            <a href="Apple.php"><img src="images/LV Store.jpg"></a>
                        </div>
                        <div class="store-description">
                            <p class="type-of-store">Fashion</p>
                            <a href="Apple.php"><p class="store-name">Louis Vuitton</p></a>
                        </div>
                    </div>
                </div><!--Fashion-->
                <div class="head-categories">
                    <div class="cate-title">
                        <h2><strong>Restaurants</strong></h2>
                    </div>
                </div>
                <div class="restaurants cate">
                    <div class="store">
                        <div class="store-img">
                            <a href="Apple.php"><img src="images/Din Tai Fung Restaurant.jpg"></a>
                        </div>
                        <div class="store-description">
                            <p class="type-of-store">Restaurants</p>
                            <a href="Apple.php"><p class="store-name">Din Tai Fung</p></a>
                        </div>
                    </div>
                    <div class="store">
                        <div class="store-img">
                            <a href="Apple.php"><img src="images/Shake Shack Restaurant.jpg"></a>
                        </div>
                        <div class="store-description">
                            <p class="type-of-store">Restaurants</p>
                            <a href="Apple.php"><p class="store-name">Shake Shack</p></a>
                        </div>
                    </div>
                </div><!--Restaurant-->
                <div class="head-categories">
                    <div class="cate-title">
                        <h2><strong>Sports</strong></h2>
                    </div>
                </div>
                <div class="sports cate">
                    <div class="store">
                        <div class="store-img">
                            <a href="Apple.php"><img src="images/Adidas Store.jpg"></a>
                        </div>
                        <div class="store-description">
                            <p class="type-of-store">Sports</p>
                            <a href="Apple.php"><p class="store-name">Adidas</p></a>
                        </div>
                    </div>
                    <div class="store">
                        <div class="store-img">
                            <a href="Apple.php"><img src="images/Leicester-City-FC-Fan-Store-1024x682.jpg"></a>
                        </div>
                        <div class="store-description">
                            <p class="type-of-store">Sports</p>
                            <a href="Apple.php"><p class="store-name">Leicester City Store</p></a>
                        </div>
                    </div>
                    <div class="store">
                        <div class="store-img">
                            <a href="Apple.php"><img src="images/NBA-Store-NYC-16-600x399.jpg"></a>
                        </div>
                        <div class="store-description">
                            <p class="type-of-store">Sports</p>
                            <a href="Apple.php"><p class="store-name">NBA Store</p></a>
                        </div>
                    </div>
                    <div class="store">
                        <div class="store-img">
                            <a href="Apple.php"><img src="images/Nike Store.jpg"></a>
                        </div>
                        <div class="store-description">
                            <p class="type-of-store">Sports</p>
                            <a href="Apple.php"><p class="store-name">Nike</p></a>
                        </div>
                    </div>
                </div><!--Sports-->
                <div class="head-categories">
                    <div class="cate-title">
                        <h2><strong>Toys</strong></h2>
                    </div>
                </div>
                <div class="toys cate">
                    <div class="store">
                        <div class="store-img">
                            <a href="Apple.php"><img src="images/Lego Store.jpg"></a>
                        </div>
                        <div class="store-description">
                            <p class="type-of-store">Toys</p>
                            <a href="Apple.php"><p class="store-name">Lego</p></a>
                        </div>
                    </div>
                </div><!--Toys-->
                <div class="head-categories">
                    <div class="cate-title">
                        <h2><strong>Watches</strong></h2>
                    </div>
                </div>
                <div class="watches cate">
                    <div class="store">
                        <div class="store-img">
                            <a href="Apple.php"><img src="images/Hublot Store.jpg"></a>
                        </div>
                        <div class="store-description">
                            <p class="type-of-store">Watches</p>
                            <a href="Apple.php"><p class="store-name">Hublot</p></a>
                        </div>
                    </div>
                    <div class="store">
                        <div class="store-img">
                            <a href="Apple.php"><img src="images/Rolex Store.jpg"></a>
                        </div>
                        <div class="store-description">
                            <p class="type-of-store">Watches</p>
                            <a href="Apple.php"><p class="store-name">Rolex</p></a>
                        </div>
                    </div>
                </div><!--Watches-->
            </div>
            <footer>
                <div class="grid-contain">
                    <div class="grid-item-1">
                        <div class="item-1-content">
                            <p><a href="Terms.php">Terms of Service</a></p>
                            <p><a href="Privacy.php">Privacy Policy</a></p>
                        </div>
                    </div><!--GItem 1-->
                    <div class="grid-item-2">
                        <img src="images/TheInifis.png" alt="The Infinis Logo" class="grid-img">
                    </div><!--GItem 2-->
                    <div class="grid-item-3">
                        <h3 class="address">The Infinis Mall</h3>
                        <div class="item-3-content">
                            <p class="address"><i class="fas fa-map-marker-alt"></i> Him Lam City, Do Xuan Hop Street,</p>
                            <p class="address" id="detail-1">An Phu Ward, District 2, HCMC, Vietnam</p>
                            <p class="address" id="detail-2"><i class="fas fa-phone-alt"></i>(028)-2288-9999</p>
                        </div>
                        <ul class="icon-container">
                            <li><a href="https://facebook.com" target="_blank"><i class="fab fa-facebook-f" aria-hidden="true"></i></a></li>
                            <li><a href="https://twitter.com" target="_blank"><i class="fab fa-twitter" aria-hidden="true"></i></a></li>
                            <li><a href="https://instagram.com" target="_blank"><i class="fab fa-instagram" aria-hidden="true"></i></a></li>
                            <li><a href="https://linkedin.com" target="_blank"><i class="fab fa-linkedin-in" aria-hidden="true"></i></a></li>
                        </ul>
                    </div><!--GItem 3-->
                </div>
                <div class="copyright">
                <?php 
                    $terms_file = fopen("data/copyright.txt", "r");
                    while ($line = fgets($terms_file))
                        echo $line;
                    fclose($terms_file);
                ?>
                </div>
            </footer>
        </div>
        <div id="cookies-bg" class="cookies-wrap">
            <div id="cookies-box" class="cookies-pop-up">
                <div class="cookies-content">
                    <h2>We are using cookies for our website</h2>
                    <p>Cookies are used to improve your browsing experience. By using the site you agree to the <a href="Terms.php">Terms and Conditions</a>.</p>
                    <div class="buttons">
                        <button class="item" id="accept">I Accept</button>
                        <button class="item" id="decline">No, thanks!</button>
                    </div>
                </div><!--Content-->
            </div><!--Cookies-box-->
        </div><!--Cookies-wrap-->
    </body>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="libs/toastr/build/toastr.min.js"></script>
    <script src="cookies.js"></script>
    <script src="status.js"></script>
    <script src="cart.js"></script>
</html>
