<!DOCTYPE html>
<html lang="en-VN">
    <head>
        <title>Login | Infinis Mall | The biggest shopping center in Vietnam</title>
        <meta charset="UTF-8">
        <meta name="authors" content="Group 8">
        <meta name="description" content="shopping mall">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta property="og:title" content="#">
        <meta property="og:type" content="#">
        <meta property="og:url" content="#">
        <meta property="og:image" content="#">
        <meta property="og:description" content="#">
        <link rel="stylesheet" type="text/css" href="Login.css">
        <script src="https://kit.fontawesome.com/5143a5dc4e.js" crossorigin="anonymous"></script>
    </head>

    <body>
        <!--Making the container - Tạo phần bao bọc toàn bộ website-->
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
                            <a href="Categories.php">Categories</a>
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
                            <a class="active" href="Login.php" class="login-account">Login</a>
                            <a href="Registration.php">Join our family</a>
                        </div>
                    </div><!--Account (Dropdown)-->
                </nav>
                <nav class="alt-menu">
                    <div class="side-nav">
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
                                <a href="javascript:void(0)" class="active">Account</a>
                                <div class="items">
                                    <a href="Login.php" class="active" class="login-account">Login</a>
                                    <a href="Registration.php">Join our family</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </nav>
            </header>
            <div class="content">
                <div class="login">
                    <a><img src="images/user-icon.png" alt="User Login" class="avt"></a>
                    <h1>Login</h1>
                    <form method="get" action="Profile.php" onsubmit="return passwordChecking()">
                        <p>Username</p>
                        <input required type="text" id="username" name="username" placeholder="Username">
                        <p id="p2">Password</p>
                        <input required type="password" id="password" name="password" placeholder="Password">
                        <button class="login_button" type="submit" value="Login">Login</button><br>
                        <div class="forgot">
                            <a href="Password.php">Forgot your password?</a><br>
                            <a href="Registration.php">Don't have an account? Join our family!</a>
                        </div><!--Forgot-->
                        <p id="incorrect">Incorrect password!</p>
                    </form>
                </div><!--Login-->
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
        </div><!--Container-->
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
    <script src="cookies.js"></script>
    <script src="passwordchecking.js"></script>
    <script src="status.js"></script>
    <script src="updateinfo.js"></script>
</html>
