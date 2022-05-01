<?php 
    session_start();
?>

<!DOCTYPE html>
<html lang="en-VN">
    <head>
        <title>Our Members | Infinis Mall | The biggest shopping center in Vietnam</title>
        <meta charset="UTF-8">
        <meta name="authors" content="Group 8">
        <meta name="description" content="shopping mall">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta property="og:title" content="#">
        <meta property="og:type" content="#">
        <meta property="og:url" content="#">
        <meta property="og:image" content="#">
        <meta property="og:description" content="#">
        <link rel="stylesheet" type="text/css" href="Members.css" media="screen">
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
                            <a href="Members.php" class="active">Our Members</a>
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
                                <a href="javascript:void(0)" class="active">About Us</a>
                                <div class="items">
                                    <a href="About.php">The Mall</a>
                                    <a href="Members.php" class="active">Our Members</a>
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
                <div class="group">
                    <div class="header">
                        <h1>Our Amazing Team</h1>
                    </div>
                </div>
                <div class="sub-container">
                    <div class="teams" data-modal ="modal1">
                        <?php 
                            if (isset($_SESSION['khanh_id'])) {
                                $khanh_id = $_SESSION['khanh_id'];
                            }
                        ?>
                        <img src="./admin/images/khanh.jpg?id=<?=$khanh_id?>">
                        <div class="name">Giang Nhật Khánh</div>
                        <div class="id">s3878182</div>
                        <div class="about">s3878182@rmit.edu.vn</div>
                    </div>
                    <div class="teams" data-modal ="modal2">
                        <?php 
                            if (isset($_SESSION['khiem_id'])) {
                                $khiem_id = $_SESSION['khiem_id'];
                            }
                        ?>
                        <img src="./admin/images/khiem.jpg?id=<?=$khiem_id?>">
                        <div class="name">Mìn Chi Gia Khiêm</div>
                        <div class="id">s3878280</div>
                        <div class="about">s3878280@rmit.edu.vn</div>
                    </div>
                    <div class="teams" data-modal ="modal3">
                        <?php 
                            if (isset($_SESSION['nam_id'])) {
                                $nam_id = $_SESSION['nam_id'];
                            }
                        ?>
                        <img src="./admin/images/nam.jpg?id=<?=$nam_id?>">
                        <div class="name">Nguyễn Phan Nam</div>
                        <div class="id">s3873792</div>
                        <div class="about">s3873792@rmit.edu.vn</div>
                    </div>
                    <div class="teams" data-modal ="modal4">
                        <?php 
                            if (isset($_SESSION['phuc_id'])) {
                                $phuc_id = $_SESSION['phuc_id'];
                            }
                        ?>
                        <img src="./admin/images/phuc.jpg?id=<?=$phuc_id?>">
                        <div class="name">Trần Hoàng Phúc</div>
                        <div class="id">s3911244</div>
                        <div class="about">s3911244@rmit.edu.vn</div>
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
        <div class="modal-wrap" id="modal1">
            <div class="modal-content">
                <div class="close-button">
                    <span class="close-icon">&times;</span>
                </div><!--Close-button-->
                <div class="info">
                    <div class="basic-info">
                        <div class="image">
                            <img src="./admin/images/khanh.jpg?id=<?=$khanh_id?>">
                        </div>
                        <h3>Giang Nhật Khánh</h3>
                        <p><strong>Student Number: </strong>S3878182</p>
                        <p><strong>E-mail: </strong>s3878182@rmit.edu.vn</p>
                        <p><strong>Date of Birth: </strong>25/12/2002</p>
                    </div>
                    <div class="detail-info">
                        <p><strong>Address: </strong>452/2 Huỳnh Văn Bánh Street, Phú Nhuận District, HCMC</p>
                        <p><strong>Personality: </strong>Outgoing, sociable, patient, intuitive</p>
                        <p><strong>Hobbies: </strong>Ping-pong, basketball, soccer, Web Dev, music</p>
                        <h4>About</h4>
                        <p>I am an extrovert person who thrive in socializing with my teammates and with others. I am passionate about web development and aspires to become a professional full-stack web developer for a major Tech company. My biggest strengths include leadership skills, effective communication, discipline when working on projects as well as time and self management abilities.</p>
                    </div>
                </div><!--Info-->
            </div><!--Modal-content-->
        </div><!--Modal-wrap-1-->

        <div class="modal-wrap" id="modal2">
            <div class="modal-content">
                <div class="close-button">
                    <span class="close-icon">&times;</span>
                </div><!--Close-button-->
                <div class="info">
                    <div class="basic-info">
                        <div class="image">
                            <img src="./admin/images/khiem.jpg?id=<?=$khiem_id?>">
                        </div>
                        <h3>Mìn Chi Gia Khiêm</h3>
                        <p><strong>Student Number: </strong>S3878280</p>
                        <p><strong>E-mail: </strong>s3878280@rmit.edu.vn</p>
                        <p id="special"><strong>Date of Birth: </strong>07/09/2002</p>
                    </div>
                    <div class="detail-info">
                        <p><strong>Address: </strong>184 Lê Đại Hành Street, District 11, HCMC</p>
                        <p><strong>Personality: </strong>Friendly, funny, hard-working, dynamic</p>
                        <p><strong>Hobbies: </strong>Football, AI, gaming</p>
                        <h4>About</h4>
                        <p>The way I came to IT was slightly interesting, at first, I only watched phone review videos on YouTube. Progressively, I’ve figured out more tech videos as well as participated in “Tinh Tế” community. The thing that makes me impressed the most in IT is artificial intelligence (AI), because of that, I decide to pursuit IT as my major. Although my coding skill isn’t good enough, I will always cultivate and practice to improve it better. In the future, I believe that I would have an opportunity to work in a big tech company to research and developing complete AI software that serves our humanity.</p>
                    </div>
                </div><!--Info-->
            </div><!--Modal-content-->
        </div><!--Modal-wrap-2-->

        <div class="modal-wrap" id="modal3">
            <div class="modal-content">
                <div class="close-button">
                    <span class="close-icon">&times;</span>
                </div><!--Close-button-->
                <div class="info">
                    <div class="basic-info">
                        <div class="image">
                            <img src="./admin/images/nam.jpg?id=<?=$nam_id?>">
                        </div>
                        <h3>Nguyễn Phan Nam</h3>
                        <p><strong>Student Number: </strong>S3873792</p>
                        <p><strong>E-mail: </strong>s3873792@rmit.edu.vn</p>
                        <p><strong>Date of Birth: </strong>27/05/2002</p>
                    </div>
                    <div class="detail-info">
                        <p><strong>Address: </strong>Happy Valley, District 7, HCMC</p>
                        <p><strong>Personality: </strong>Friendly, talkative, willing to help</p>
                        <p><strong>Hobbies: </strong>Playing video games, reading books, coding, playing the piano</p>
                        <h4>About</h4>
                        <p>Being a student studing at RMIT, I am very proud being an information technology at this royal university. I am curious about the inside of coding world and never stop learning as well as getting more experience from every senior students. Moreover, I love to co-operate with friends to get more knowledge about IT. My dream is to become a game developer in the future.</p>
                    </div>
                </div><!--Info-->
            </div><!--Modal-content-->
        </div><!--Modal-wrap-3-->

        <div class="modal-wrap" id="modal4">
            <div class="modal-content">
                <div class="close-button">
                    <span class="close-icon">&times;</span>
                </div><!--Close-button-->
                <div class="info">
                    <div class="basic-info">
                        <div class="image">
                            <img src="./admin/images/phuc.jpg?id=<?=$phuc_id?>">
                        </div>
                        <h3>Trần Hoàng Phúc</h3>
                        <p><strong>Student Number: </strong>S3911244</p>
                        <p><strong>E-mail: </strong>s3911244@rmit.edu.vn</p>
                        <p><strong>Date of Birth: </strong>22/03/2001</p>
                    </div>
                    <div class="detail-info">
                        <p><strong>Address: </strong>Sunrise Riverside, Nguyen Huu Tho Street, Nha Be District, HCMC</p>
                        <p><strong>Personality: </strong>Adventurous, determined, creative</p>
                        <p><strong>Hobbies: </strong>Basketball, music</p>
                        <h4>About</h4>
                        <p>I am an adventurous and determined student who is pursuing a Bachelor’s degree in Information Technology at RMIT University. I have undertaken several volunteers works and small IT courses to develop my soft skills and foundation technical knowledge.</p>
                    </div>
                </div><!--Info-->
            </div><!--Modal-content-->
        </div><!--Modal-wrap-4-->
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
	<script src="Members.js"></script>
</html>	
