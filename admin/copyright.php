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
        <link rel="stylesheet" type="text/css" href="shared.css" media="screen">
        <script src="https://kit.fontawesome.com/5143a5dc4e.js" crossorigin="anonymous"></script>
        <link href="libs/toastr/build/toastr.min.css" rel="stylesheet">
    </head>

    <body>
        <div class="container">
            <header>
                <nav class="vert-nav">
                    <ul>
                        <li><a href="../admin"><i class="fas fa-tachometer-alt"></i> Dashboard</a></li>
                        <li><a href="tos.php"><i class="fas fa-file-alt"></i> Terms of Service</a></li>
                        <li><a href="pp.php"><i class="fas fa-lock"></i> Privacy Policy</a></li>
                        <li><a class="active" href="javascript:void(0)"><i class="fas fa-copyright"></i> Copyright</a></li>
                        <li><a href="about-us.php"><i class="fas fa-users"></i> Our Members</a></li>
                        <li><a href="admin-logout.php"><i class="fas fa-sign-out-alt"></i> Logout</a></li>
                    </ul>
                </nav>
            </header>
            <div class="main">
                <div class="heading">
                    <h1>YOU CAN EDIT THE COPYRIGHT STATEMENT OF THE INFINIS MALL HERE!</h1>
                </div>
                <hr style="background-color: black; height: 10px; margin: 0;">
                <div class="viewbox">
                    <?php 
                        function read_text() {
                            $file = "../data/copyright.txt";
                            echo file_get_contents($file);
                        }
                    ?>
                    <form action="copyright-edit.php" method="POST">
                        <h2>Our Copyright Statement</h2>
                        <textarea required name="view"><?php 
                            $file = "../data/copyright.txt";
                            echo file_get_contents($file);
                            ?>
                        </textarea><br>
                        <div class="buttons">
                            <input type="submit" value="save" class="save">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>