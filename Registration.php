<!DOCTYPE html>
<html lang="en-VN">
	<head>
		<meta charset="utf-8">
    <meta name="authors" content="Group 8">
    <meta name="description" content="shopping mall">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta property="og:title" content="#">
    <meta property="og:type" content="#">
    <meta property="og:url" content="#">
    <meta property="og:image" content="#">
    <meta property="og:description" content="#">
    <link rel="stylesheet" type="text/css" href="Registration.css">
    <script src="https://kit.fontawesome.com/5143a5dc4e.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,400;1,300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100&display=swap" rel="stylesheet">
		<title>Infinis Mall | The biggest shopping center in Vietnam</title>
	</head>
	
	<body>
    <!--Making the container-->
    <div id="container" class="site-container">
      <header>
          <div class="topheader">
              <div id="logo-img"><img src="images/TheInifis.png"></div>
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
                    <a href="Login.php" class="login-account">Login</a>
                    <a href="Registration.php" class="active">Join our family</a>
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
                        <a href="javascript:void(0)">Account</a>
                        <div class="items">
                            <a href="Login.php" class="login-account">Login</a>
                            <a href="Registration.php" class="active">Join our family</a>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
      </header>

    <div class="main">
      <div class="content">
        <div class="h-contain">
          <h1>Register Account</h1>
        </div>
      </div>

      <div class="form">
        <form method="get" action="index.php" onsubmit="return validation()">
        <div class="form-title">
            <h2>Registration Form</h2>
        </div>

          <div class="user-details">
            <div class="input-box">
              <label for="detail">Email Address</label>
              <input type="text" name="email" id="email" placeholder="Enter your email" maxlength="50" required>
            </div>
            <div class="input-box">
              <label for="detail">Phone Number</label>
              <input type="tel" name="phone" id="phone" maxlength="50" placeholder="1234-567-890" required>
            </div>
            <div class="input-box">
              <label for="detail">Password</label>
              <input type="password" name="password" id="password" placeholder="Enter your password" maxlength="50" required>
            </div>
            <div class="input-box">
              <label for="detail">Retype Password</label>
              <input type="password" name="password" id="retype_password" placeholder="Retype your password" maxlength="50" required>
            </div>
            <div class="input-box">
              <label for="detail">First Name</label>
              <input type="text" name="first-name" id="firstname" placeholder="Enter your first name" maxlength="50" required>
            </div>
            <div class="input-box">
              <label for="detail">Last Name</label>
              <input type="text" name="last-name" id="lastname" placeholder="Enter your last name" maxlength="50" required>
            </div>
            <div class="input-box">
              <label for="detail">Address</label>
              <input type="text" name="address" id="address" placeholder="Enter your address" maxlength="50" required>
            </div>
            <div class="input-box">
              <label for="detail">City</label>
              <input type="text" name="city" id="city" placeholder="Enter your city" maxlength="50" required>
            </div>
            <div class="input-box">
              <label for="detail">Zip Code</label>
              <input type="text" name="zip" id="zip" placeholder="Enter your Zip code" maxlength="50" required>
            </div>
            <div class="input-box">
              <label for="detail">Country</label>
                <select id="country" name="country">
                  <option>Select Country</option>
                  <option value="AF">Afghanistan</option>
                  <option value="AX">Aland Islands</option>
                  <option value="AL">Albania</option>
                  <option value="DZ">Algeria</option>
                  <option value="AS">American Samoa</option>
                  <option value="AD">Andorra</option>
                  <option value="AO">Angola</option>
                  <option value="AI">Anguilla</option>
                  <option value="AQ">Antarctica</option>
                  <option value="AG">Antigua and Barbuda</option>
                  <option value="AR">Argentina</option>
                  <option value="AM">Armenia</option>
                  <option value="AW">Aruba</option>
                  <option value="AU">Australia</option>
                  <option value="AT">Austria</option>
                  <option value="AZ">Azerbaijan</option>
                  <option value="BS">Bahamas</option>
                  <option value="BH">Bahrain</option>
                  <option value="BD">Bangladesh</option>
                  <option value="BB">Barbados</option>
                  <option value="BY">Belarus</option>
                  <option value="BE">Belgium</option>
                  <option value="BZ">Belize</option>
                  <option value="BJ">Benin</option>
                  <option value="BM">Bermuda</option>
                  <option value="BT">Bhutan</option>
                  <option value="BO">Bolivia</option>
                  <option value="BQ">Bonaire, Sint Eustatius and Saba</option>
                  <option value="BA">Bosnia and Herzegovina</option>
                  <option value="BW">Botswana</option>
                  <option value="BV">Bouvet Island</option>
                  <option value="BR">Brazil</option>
                  <option value="IO">British Indian Ocean Territory</option>
                  <option value="BN">Brunei Darussalam</option>
                  <option value="BG">Bulgaria</option>
                  <option value="BF">Burkina Faso</option>
                  <option value="BI">Burundi</option>
                  <option value="KH">Cambodia</option>
                  <option value="CM">Cameroon</option>
                  <option value="CA">Canada</option>
                  <option value="CV">Cape Verde</option>
                  <option value="KY">Cayman Islands</option>
                  <option value="CF">Central African Republic</option>
                  <option value="TD">Chad</option>
                  <option value="CL">Chile</option>
                  <option value="CN">China</option>
                  <option value="CX">Christmas Island</option>
                  <option value="CC">Cocos (Keeling) Islands</option>
                  <option value="CO">Colombia</option>
                  <option value="KM">Comoros</option>
                  <option value="CG">Congo</option>
                  <option value="CD">Congo, Democratic Republic of the Congo</option>
                  <option value="CK">Cook Islands</option>
                  <option value="CR">Costa Rica</option>
                  <option value="CI">Cote D'Ivoire</option>
                  <option value="HR">Croatia</option>
                  <option value="CU">Cuba</option>
                  <option value="CW">Curacao</option>
                  <option value="CY">Cyprus</option>
                  <option value="CZ">Czech Republic</option>
                  <option value="DK">Denmark</option>
                  <option value="DJ">Djibouti</option>
                  <option value="DM">Dominica</option>
                  <option value="DO">Dominican Republic</option>
                  <option value="EC">Ecuador</option>
                  <option value="EG">Egypt</option>
                  <option value="SV">El Salvador</option>
                  <option value="GQ">Equatorial Guinea</option>
                  <option value="ER">Eritrea</option>
                  <option value="EE">Estonia</option>
                  <option value="ET">Ethiopia</option>
                  <option value="FK">Falkland Islands (Malvinas)</option>
                  <option value="FO">Faroe Islands</option>
                  <option value="FJ">Fiji</option>
                  <option value="FI">Finland</option>
                  <option value="FR">France</option>
                  <option value="GF">French Guiana</option>
                  <option value="PF">French Polynesia</option>
                  <option value="TF">French Southern Territories</option>
                  <option value="GA">Gabon</option>
                  <option value="GM">Gambia</option>
                  <option value="GE">Georgia</option>
                  <option value="DE">Germany</option>
                  <option value="GH">Ghana</option>
                  <option value="GI">Gibraltar</option>
                  <option value="GR">Greece</option>
                  <option value="GL">Greenland</option>
                  <option value="GD">Grenada</option>
                  <option value="GP">Guadeloupe</option>
                  <option value="GU">Guam</option>
                  <option value="GT">Guatemala</option>
                  <option value="GG">Guernsey</option>
                  <option value="GN">Guinea</option>
                  <option value="GW">Guinea-Bissau</option>
                  <option value="GY">Guyana</option>
                  <option value="HT">Haiti</option>
                  <option value="HM">Heard Island and Mcdonald Islands</option>
                  <option value="VA">Holy See (Vatican City State)</option>
                  <option value="HN">Honduras</option>
                  <option value="HK">Hong Kong</option>
                  <option value="HU">Hungary</option>
                  <option value="IS">Iceland</option>
                  <option value="IN">India</option>
                  <option value="ID">Indonesia</option>
                  <option value="IR">Iran, Islamic Republic of</option>
                  <option value="IQ">Iraq</option>
                  <option value="IE">Ireland</option>
                  <option value="IM">Isle of Man</option>
                  <option value="IL">Israel</option>
                  <option value="IT">Italy</option>
                  <option value="JM">Jamaica</option>
                  <option value="JP">Japan</option>
                  <option value="JE">Jersey</option>
                  <option value="JO">Jordan</option>
                  <option value="KZ">Kazakhstan</option>
                  <option value="KE">Kenya</option>
                  <option value="KI">Kiribati</option>
                  <option value="KP">Korea, Democratic People's Republic of</option>
                  <option value="KR">Korea, Republic of</option>
                  <option value="XK">Kosovo</option>
                  <option value="KW">Kuwait</option>
                  <option value="KG">Kyrgyzstan</option>
                  <option value="LA">Lao People's Democratic Republic</option>
                  <option value="LV">Latvia</option>
                  <option value="LB">Lebanon</option>
                  <option value="LS">Lesotho</option>
                  <option value="LR">Liberia</option>
                  <option value="LY">Libyan Arab Jamahiriya</option>
                  <option value="LI">Liechtenstein</option>
                  <option value="LT">Lithuania</option>
                  <option value="LU">Luxembourg</option>
                  <option value="MO">Macao</option>
                  <option value="MK">Macedonia, the Former Yugoslav Republic of</option>
                  <option value="MG">Madagascar</option>
                  <option value="MW">Malawi</option>
                  <option value="MY">Malaysia</option>
                  <option value="MV">Maldives</option>
                  <option value="ML">Mali</option>
                  <option value="MT">Malta</option>
                  <option value="MH">Marshall Islands</option>
                  <option value="MQ">Martinique</option>
                  <option value="MR">Mauritania</option>
                  <option value="MU">Mauritius</option>
                  <option value="YT">Mayotte</option>
                  <option value="MX">Mexico</option>
                  <option value="FM">Micronesia, Federated States of</option>
                  <option value="MD">Moldova, Republic of</option>
                  <option value="MC">Monaco</option>
                  <option value="MN">Mongolia</option>
                  <option value="ME">Montenegro</option>
                  <option value="MS">Montserrat</option>
                  <option value="MA">Morocco</option>
                  <option value="MZ">Mozambique</option>
                  <option value="MM">Myanmar</option>
                  <option value="NA">Namibia</option>
                  <option value="NR">Nauru</option>
                  <option value="NP">Nepal</option>
                  <option value="NL">Netherlands</option>
                  <option value="AN">Netherlands Antilles</option>
                  <option value="NC">New Caledonia</option>
                  <option value="NZ">New Zealand</option>
                  <option value="NI">Nicaragua</option>
                  <option value="NE">Niger</option>
                  <option value="NG">Nigeria</option>
                  <option value="NU">Niue</option>
                  <option value="NF">Norfolk Island</option>
                  <option value="MP">Northern Mariana Islands</option>
                  <option value="NO">Norway</option>
                  <option value="OM">Oman</option>
                  <option value="PK">Pakistan</option>
                  <option value="PW">Palau</option>
                  <option value="PS">Palestinian Territory, Occupied</option>
                  <option value="PA">Panama</option>
                  <option value="PG">Papua New Guinea</option>
                  <option value="PY">Paraguay</option>
                  <option value="PE">Peru</option>
                  <option value="PH">Philippines</option>
                  <option value="PN">Pitcairn</option>
                  <option value="PL">Poland</option>
                  <option value="PT">Portugal</option>
                  <option value="PR">Puerto Rico</option>
                  <option value="QA">Qatar</option>
                  <option value="RE">Reunion</option>
                  <option value="RO">Romania</option>
                  <option value="RU">Russian Federation</option>
                  <option value="RW">Rwanda</option>
                  <option value="BL">Saint Barthelemy</option>
                  <option value="SH">Saint Helena</option>
                  <option value="KN">Saint Kitts and Nevis</option>
                  <option value="LC">Saint Lucia</option>
                  <option value="MF">Saint Martin</option>
                  <option value="PM">Saint Pierre and Miquelon</option>
                  <option value="VC">Saint Vincent and the Grenadines</option>
                  <option value="WS">Samoa</option>
                  <option value="SM">San Marino</option>
                  <option value="ST">Sao Tome and Principe</option>
                  <option value="SA">Saudi Arabia</option>
                  <option value="SN">Senegal</option>
                  <option value="RS">Serbia</option>
                  <option value="CS">Serbia and Montenegro</option>
                  <option value="SC">Seychelles</option>
                  <option value="SL">Sierra Leone</option>
                  <option value="SG">Singapore</option>
                  <option value="SX">Sint Maarten</option>
                  <option value="SK">Slovakia</option>
                  <option value="SI">Slovenia</option>
                  <option value="SB">Solomon Islands</option>
                  <option value="SO">Somalia</option>
                  <option value="ZA">South Africa</option>
                  <option value="GS">South Georgia and the South Sandwich Islands</option>
                  <option value="SS">South Sudan</option>
                  <option value="ES">Spain</option>
                  <option value="LK">Sri Lanka</option>
                  <option value="SD">Sudan</option>
                  <option value="SR">Suriname</option>
                  <option value="SJ">Svalbard and Jan Mayen</option>
                  <option value="SZ">Swaziland</option>
                  <option value="SE">Sweden</option>
                  <option value="CH">Switzerland</option>
                  <option value="SY">Syrian Arab Republic</option>
                  <option value="TW">Taiwan, Province of China</option>
                  <option value="TJ">Tajikistan</option>
                  <option value="TZ">Tanzania, United Republic of</option>
                  <option value="TH">Thailand</option>
                  <option value="TL">Timor-Leste</option>
                  <option value="TG">Togo</option>
                  <option value="TK">Tokelau</option>
                  <option value="TO">Tonga</option>
                  <option value="TT">Trinidad and Tobago</option>
                  <option value="TN">Tunisia</option>
                  <option value="TR">Turkey</option>
                  <option value="TM">Turkmenistan</option>
                  <option value="TC">Turks and Caicos Islands</option>
                  <option value="TV">Tuvalu</option>
                  <option value="UG">Uganda</option>
                  <option value="UA">Ukraine</option>
                  <option value="AE">United Arab Emirates</option>
                  <option value="GB">United Kingdom</option>
                  <option value="US">United States</option>
                  <option value="UM">United States Minor Outlying Islands</option>
                  <option value="UY">Uruguay</option>
                  <option value="UZ">Uzbekistan</option>
                  <option value="VU">Vanuatu</option>
                  <option value="VE">Venezuela</option>
                  <option value="VN">Viet Nam</option>
                  <option value="VG">Virgin Islands, British</option>
                  <option value="VI">Virgin Islands, U.s.</option>
                  <option value="WF">Wallis and Futuna</option>
                  <option value="EH">Western Sahara</option>
                  <option value="YE">Yemen</option>
                  <option value="ZM">Zambia</option>
                  <option value="ZW">Zimbabwe</option>
              </select>
            </div>  
            <div class="input-box">
              <label for="account type">Account Type</label>
              <input type="radio" id="owner" name="account type" value="owner" onclick="showForm(0);">
              <label for="owner" >Store Owner</label>
              <input type="radio" id="shopper" name="account type" value="shopper" onclick="showForm(1)">
              <label for="shopper">Shopper</label>
            </div>

            <div form id="store-owner" style="display: none;">
              <div class="user-details">
                <div class="input-box">
                  <label for="detail">Business Name</label>
                  <input type="text" name="business" id="business" placeholder="Enter business name" maxlength="50" >
                </div>
            
                <div class="input-box">
                  <label for="detail">Store Name</label>
                  <input type="text" name="store" id="store" placeholder="Enter store name" maxlength="50" >
                </div>
                <div class="input-box">
                  <label for="detail">Store Category</label>
                  <select id="category" name="category">
                    <option>Select Category</option>
                    <option value="department">Department Store</option>
                    <option value="grocery">Grocery Store</option>
                    <option value="restaurants">Restaurant</option>
                    <option value="clothing">Clothing Store</option>
                    <option value="accessory">Accessory Store</option>
                    <option value="pharmacy">Pharmacy</option>
                    <option value="technology">Technology Store</option>
                    <option value="pet">Pet Store</option>
                    <option value="toy">Toy Store</option>
                    <option value="specialty">Specialty Store</option>
                    <option value="thrift">Thrift Store</option>
                    <option value="service">Service</option>
                    <option value="kiosk">Kiosk</option>
                  </select>
                </div>
              </div>
            </div>
            
            <div id="error_message"></div>
            <div class="input-box">
              <input type="reset" value="Clear" class="box">
              <input type="submit" value="Send" class="box">          
            </div>
          </div>
        </form>
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
    </div>
<div id="cookies-bg" class="cookies-wrap">
        <div id="cookies-box" class="cookies-pop-up">
            <div class="cookies-content">
                <h2>We are using cookies for our website</h2>
                <p>Cookies are used to improve your browsing experience. By using the site you agree to the <a
                        href="Terms.php">Terms and Conditions</a>.</p>
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
    <script src="Registration.js"></script> 
    <script src="cookies.js"></script>
</html>   
