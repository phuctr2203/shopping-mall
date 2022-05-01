<!DOCTYPE html>
<html lang="en-VN">

<head>
    <title>Checkout | Infinis Mall | The biggest shopping center in Vietnam</title>
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
    <link rel="stylesheet" type="text/css" href="Checkout.css" media="screen">
    <script src="https://kit.fontawesome.com/5143a5dc4e.js" crossorigin="anonymous"></script>
    <link href="libs/toastr/build/toastr.min.css" rel="stylesheet" />
</head>

<body>
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
                <a href="../">
                    <i class="fas fa-home"></i>
                </a>
                <div class="dropdown">
                    <button class="dropbtn">Browse by</button>
                    <div class="dropdown-content" id="special">
                        <a href="Brands.php">Brands</a>
                        <a href="Categories.php">Categories</a>
                        <a href="CreatedTime.php">Created Time</a>
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
                        <a href="../">Home</a>
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
        <div class="row">
            <div class="col-25">
                <div class="container">
                    <h4>Cart
                        <span class="price" style="color:black">
                            <i class="fa fa-shopping-cart"></i>
                            <b id="cart-quantity-b"></b>
                        </span>
                    </h4>
                    <div id="cart-body">
                    </div>
                    <br><br>
                    <hr>
                    <div class="coupon-box">
                        <input type="text" id="promo" maxlength="50" placeholder="Enter promo code">
                        <button class="coupon-btn" onclick="discountCode()">Use</button>
                    </div>
                    <p id="cart-total-b"><span class="price" style="color:black"></span></p>
                    <div style="display: flex; justify-content: flex-end; width: 100%; align-items:center;">
                        <button onclick="clearCart()" style="color: white; background-color: red; width: 30px; height: 30px; border: none; border-radius: 4px;"><i class="fas fa-times"></i></button>
                    </div>
                </div>
            </div>
            <div class="col-75">
                <div class="container">
                    <form>
                        <div class="row">
                            <div class="col-50">
                                <h3>Billing Address</h3>
                                <label for="fname"><i class="fa fa-user"></i> Full Name</label>
                                <input required type="text" id="fname" name="firstname" placeholder="Johnny Sins">
                                <label for="email"><i class="fa fa-envelope"></i> Email</label>
                                <input required type="text" id="email" name="email"
                                    placeholder="johnnysins@example.com">
                                <label for="adr"><i class="fa fa-address-card-o"></i> Address</label>
                                <input required type="text" id="adr" name="address" placeholder="123 Fake street">
                                <label for="city"><i class="fa fa-institution"></i> City</label>
                                <input required type="text" id="city" name="city" placeholder="New York">
                                <div class="row">
                                    <div class="col-50">
                                        <label for="state">State</label>
                                        <input required type="text" id="state" name="state" placeholder="NY">
                                    </div>
                                    <div class="col-50">
                                        <label for="zip">Zip</label>
                                        <input required type="text" id="zip" name="zip" placeholder="10000">
                                    </div>
                                </div>
                            </div>
                            <div class="col-50">
                                <h3>Payment</h3>
                                <label for="fname">Accepted Cards</label>
                                <div class="icon-container">
                                    <i class="fa fa-cc-visa" style="color:navy;"></i>
                                    <i class="fa fa-cc-amex" style="color:blue;"></i>
                                    <i class="fa fa-cc-mastercard" style="color:red;"></i>
                                    <i class="fa fa-cc-discover" style="color:orange;"></i>
                                </div>
                                <label for="cname">Name on Card</label>
                                <input required type="text" id="cname" name="cardname" placeholder="Johnny Sins">
                                <label for="ccnum">Credit card number</label>
                                <input required type="text" id="ccnum" name="cardnumber"
                                    placeholder="xxxx-xxxx-xxxx-xxxx">
                                <label for="expmonth">Exp Month</label>
                                <input required type="text" id="expmonth" name="expmonth" placeholder="September">
                                <div class="row">
                                    <div class="col-50">
                                        <label for="expyear">Exp Year</label>
                                        <input required type="text" id="expyear" name="expyear" placeholder="2025">
                                    </div>
                                    <div class="col-50">
                                        <label for="cvv">CVV</label>
                                        <input required type="text" id="cvv" name="cvv" placeholder="123">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <label>
                            <input required type="checkbox" checked="checked" name="sameadr"> Shipping address same as
                            billing
                        </label>
                        <input type="submit" value="Place Order" class="btn">
                    </form>
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
</body>
    <script src="libs/toastr/build/toastr.min.js"></script>
    <script src="cart.js"></script>
    <script src="coupon.js"></script>
    <script src="check-to-buy.js"></script>
</html>
