<?php 
    session_start();
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
                        <li><a href="copyright.php"><i class="fas fa-copyright"></i> Copyright</a></li>
                        <li><a class="active" href="javascript:void(0)"><i class="fas fa-users"></i> Our Members</a></li>
                        <li><a href="admin-logout.php"><i class="fas fa-sign-out-alt"></i> Logout</a></li>
                    </ul>
                </nav>
            </header>
            <div class="main">
                <div class="heading">
                    <h1>YOU CAN UPLOAD NEW AVATARS FOR EACH MEMBER OF THE INFINIS MALL HERE!</h1>
                </div>
                <hr style="background-color: black; height: 10px; margin: 0;">
                <div class="team-box">
                    <form method="POST" action="image-edit.php" enctype="multipart/form-data"> 
                        <div class="member">
                            <?php 
                                $khanh_id = rand(0, 999);
                                $_SESSION['khanh_id'] = $khanh_id;
                            ?>
                            <img class="avatar-img" src="images/khanh.jpg?id=<?=$khanh_id?>"><br>
                            <div class="info">
                                <input type="file" name="khanh" accept=".png, .jpg">
                                <p class="member-name">Giang Nhật Khánh</p>
                                <p class="member-sid">s3878182</p>
                            </div>
                        </div>
                        <div class="member">
                            <?php 
                                $nam_id = rand(0, 999);
                                $_SESSION['nam_id'] = $nam_id;
                            ?>
                            <img class="avatar-img" src="images/nam.jpg?id=<?=$nam_id?>"><br>
                            <div class="info">
                                <input type="file" name="nam" accept=".png, .jpg">
                                <p class="member-name">Nguyễn Phan Nam</p>
                                <p class="member-sid">s3873792</p>
                            </div>
                        </div>
                        <div class="member">
                            <?php 
                                $khiem_id = rand(0, 999);
                                $_SESSION['khiem_id'] = $khiem_id;
                            ?>
                            <img class="avatar-img" src="images/khiem.jpg?id=<?=$khiem_id?>"><br>
                            <div class="info">
                                <input type="file" name="khiem" accept=".png, .jpg">
                                <p class="member-name">Mìn Chi Gia Khiêm</p>
                                <p class="member-sid">s3878280</p>
                            </div>
                        </div>
                        <div class="member">
                            <?php 
                                $phuc_id = rand(0, 999);
                                $_SESSION['phuc_id'] = $phuc_id;
                            ?>
                            <img class="avatar-img" src="images/phuc.jpg?id=<?=$phuc_id?>"><br>
                            <div class="info">
                                <input type="file" name="phuc" accept=".png, .jpg">
                                <p class="member-name">Trần Hoàng Phúc</p>
                                <p class="member-sid">s3911244</p>
                            </div>
                        </div>
                        <div class="buttons">
                            <input type="submit" value="save" class="save" name="save">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>