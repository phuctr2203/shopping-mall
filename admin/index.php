<?php
    session_start();

    // If file 'install.php' still exists, the current PHP script in this file will be terminated
    if (file_exists('install.php')) {
        die("You have to delete <code>'install.php'</code> file manually to activate the system");
    } 

    // Check if admin has logged in or not
    if (!isset($_SESSION['username'])) {
        header('location: admin/admin-login.php');
    }
?>

<!DOCTYPE html>
<html lang="en-VN">
    <head>
        <title>Admin | Infinis Mall | The biggest shopping center in Vietnam</title>
        <meta charset="UTF-8">
        <meta name="authors" content="Group 8">
        <meta name="description" content="shopping mall">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta property="og:title" content="#">
        <meta property="og:type" content="#">
        <meta property="og:url" content="#">
        <meta property="og:image" content="#">
        <meta property="og:description" content="#">
        <link rel="stylesheet" type="text/css" href="admin/shared.css" media="screen">
        <script src="https://kit.fontawesome.com/5143a5dc4e.js" crossorigin="anonymous"></script>
        <link href="libs/toastr/build/toastr.min.css" rel="stylesheet">
    </head>

    <body>
        <div class="container">
            <header>
                <nav class="vert-nav">
                    <ul>
                        <li><a class="active" href="javascript:void(0)"><i class="fas fa-tachometer-alt"></i> Dashboard</a></li>
                        <li><a href="admin/tos.php"><i class="fas fa-file-alt"></i> Terms of Service</a></li>
                        <li><a href="admin/pp.php"><i class="fas fa-lock"></i> Privacy Policy</a></li>
                        <li><a href="admin/copyright.php"><i class="fas fa-copyright"></i> Copyright</a></li>
                        <li><a href="admin/about-us.php"><i class="fas fa-users"></i> Our Members</a></li>
                        <li><a href="admin/admin-logout.php"><i class="fas fa-sign-out-alt"></i> Logout</a></li>
                    </ul>
                </nav>
            </header>
            <div class="main">
                <div class="heading">
                    <h1>WELCOME BACK, ADMINISTRATOR!</h1>
                    <p>This is your <strong>CMS Dashboard</strong> , where you can make modifications to the website's
                    content and change avatars of members. Take a look at the features below!</p>
                </div>
                <hr style="background-color: black; height: 10px; margin: 0;">
                <div class="features">
                    <div class="box">
                        <img class="image" src="admin/images/tos.png">
                        <div class="overlay">
                            <a href="admin/tos.php">Terms of Service</a>
                        </div>
                    </div>
                    <div class="box">
                        <img class="image" src="admin/images/pp.png">
                        <div class="overlay">
                            <a href="admin/pp.php">Privacy Policy</a>
                        </div>
                    </div>
                    <div class="box">
                        <img class="image" src="admin/images/copyright.jpg">
                        <div class="overlay">
                            <a href="admin/copyright.php">Copyright</a>
                        </div>
                    </div>
                    <div class="box">
                        <img class="image" src="admin/images/about-us.jpg">
                        <div class="overlay">
                            <a href="admin/about-us.php">Group Members</a>
                        </div>
                    </div>
                </div>
                <div class="link">
                    <a href="../">REDIRECT TO THE MALL HOME PAGE!</a>
                </div>
            </div>
        </div>
    </body>
</html>