<?php
$fp = file("data/products.csv");
$countCSV =  count($fp);
$fileProducts = fopen("data/products.csv", "r");
$fileStores = fopen("data/stores.csv", "r");
?>
<!DOCTYPE html>
<html lang="en-VN">

<head>
    <title>Home | Infinis Mall | The biggest shopping center in Vietnam</title>
    <meta charset="UTF-8">
    <meta name="authors" content="Group 8">
    <meta name="description" content="shopping mall">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta property="og:title" content="#">
    <meta property="og:type" content="#">
    <meta property="og:url" content="#">
    <meta property="og:image" content="#">
    <meta property="og:description" content="#">
    <link rel="stylesheet" type="text/css" href="index.css" media="screen">
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
                </div>
                <!--Search-->
            </div>
            <!--Top Header-->
            <nav class="main-menu">
                <a href="index.php" class="active">
                    <i class="fas fa-home"></i>
                </a>
                <div class="dropdown">
                    <button class="dropbtn">Browse by</button>
                    <div class="dropdown-content" id="special">
                        <a href="Brands.php">Brands</a>
                        <a href="Categories.php">Categories</a>
                        <a href="CreatedTime.php">Created time</a>
                    </div>
                    <!--Shops By (Dropdown)-->
                </div>
                <a href="Fees.php">Fees</a>
                <a href="FAQs.php">FAQs</a>
                <div class="dropdown">
                    <button class="dropbtn">About Us</button>
                    <div class="dropdown-content">
                        <a href="About.php">The Mall</a>
                        <a href="Members.php">Our Members</a>
                    </div>
                </div>
                <!--About Us (Dropdown)-->
                <a href="Contact.php">Contact Us</a>
                <div class="dropdown">
                    <button class="dropbtn">Account
                        <i class="fas fa-user"></i>
                    </button>
                    <div class="dropdown-content">
                        <a href="Login.php" class="login-account">Login</a>
                        <a href="Registration.php">Join our family</a>
                    </div>
                </div>
                <!--Account (Dropdown)-->
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
                        <a class="active" href="index.php">Home</a>
                        <div class="drop">
                            <a href="javascript:void(0)">Browse By</a>
                            <div class="items">
                                <a href="Brands.php">Brands</a>
                                <a href="Categories.php">Categories</a>
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
            <div class="featured">
                <h1>featured stores</h1>
            </div>
            <div class="featured-stores">
                <?php while (list($id, $name) = fgetcsv($fileStores, 1024, ',')) {
                    if ($id < 6 && $id > 0) {
                ?>
                        <div class="store">
                            <img class="brand" src="images/apple.png">
                            <div class="overlay">
                                <a href="Apple.php?storename=<?php echo $name ?>&id=<?php echo $id ?>"><?php echo $name ?></a>
                            </div>
                        </div>
                <?php
                    }
                }
                ?>
            </div>
            <div class="featured">
                <h1>featured products</h1>
            </div>
            <div class="featured-products">
                <?php while (list($id, $name) = fgetcsv($fileProducts, 1024, ',')) {
                    if ($id < 6 && $id > 0) {
                ?>
                        <div class="store">
                            <img class="brand" src="images/ip-12-pro-max.jpg">
                            <div class="overlay">
                                <a><?php echo $name; ?></a>
                            </div>
                        </div>
                <?php
                    }
                }
                ?>
            </div>
            <div class="new">
                <h1>new stores</h1>
            </div>
            <div class="slide-container">
                <div class="new-stores" id="slider1">
                    <?php if (($handle = fopen("data/stores.csv", "r")) !== FALSE) {
                        while ((list($id, $name) = fgetcsv($handle, 1024, ',')) !== FALSE) {
                            if ($id < 15 && $id > 0) {
                    ?>
                                <div class="slide-store1">
                                    <img class="brand" src="images/microsoft.jpg">
                                    <div class="overlay">
                                        <a href="Apple.php"><?php echo $name ?></a>
                                    </div>
                                </div>
                    <?php
                            }
                        }
                        fclose($handle);
                    }
                    ?>
                    <div class="placeholder">Text</div>
                </div>
            </div>
            <div class="new">
                <h1>new products</h1>
            </div>
            <div class="slide-container">
                <div class="new-products">
                    <?php if (($handle = fopen("data/products.csv", "r")) !== FALSE) {
                        while ((list($id, $name) = fgetcsv($handle, 1000, ",")) !== FALSE) {
                            if ($id > ($countCSV - 6)) {
                    ?>
                                <div class="slide-store2">
                                    <img class="brand" src="images/xbox.jpg">
                                    <div class="overlay">
                                        <a><?php echo $name ?></a>
                                    </div>
                                </div>
                    <?php
                            }
                        }
                        fclose($handle);
                    }
                    ?>
                    <div class="placeholder">Text</div>
                </div>
            </div>
        </div>
        <footer>
            <div class="grid-contain">
                <div class="grid-item-1">
                    <div class="item-1-content">
                        <p><a href="Terms.php">Terms of Service</a></p>
                        <p><a href="Privacy.php">Privacy Policy</a></p>
                    </div>
                </div>
                <!--GItem 1-->
                <div class="grid-item-2">
                    <img src="images/TheInifis.png" alt="The Infinis Logo" class="grid-img">
                </div>
                <!--GItem 2-->
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
                </div>
                <!--GItem 3-->
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
    <!--Container-->
    <div id="cookies-bg" class="cookies-wrap">
        <div id="cookies-box" class="cookies-pop-up">
            <div class="cookies-content">
                <h2>We are using cookies for our website</h2>
                <p>Cookies are used to improve your browsing experience. By using the site you agree to the <a href="Terms.php">Terms and Conditions</a>.</p>
                <div class="buttons">
                    <button class="item" id="accept">I Accept</button>
                    <button class="item" id="decline">No, thanks!</button>
                </div>
            </div>
            <!--Content-->
        </div>
        <!--Cookies-box-->
    </div>
    <!--Cookies-wrap-->
</body>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="libs/toastr/build/toastr.min.js"></script>
<script src="index.js"></script>
<script src="cookies.js"></script>
<script src="status.js"></script>
<script src="cart.js"></script>

</html>
