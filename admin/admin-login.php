<?php
// Start the session for validation login details
session_start();

if (file_exists('install.php')) {
    die ("Delete the 'install.php' file first to be able to access this page!");
}

if (isset($_POST['login'])) {
    $username = $_POST['username']; // Setting username variable
    $password = $_POST['password']; // Setting password variable

    $admin_file = '../data/admin_data.csv'; // Create a variable that stores the data from the csv file
    $open_file = fopen($admin_file, 'r'); // Open the file and read it
    $head_row = fgetcsv($open_file); // Get header row
    $admin_data = []; // Create a blank array 

    // Avoid getting data from blank rows
    while ($row = fgetcsv($open_file)) { 
        $count = 0;
        $admin_row = [];
        foreach ($head_row as $data_column) { // Get the data in each column of a row
            $admin_row[$data_column] = $row[$count];
            $count++;
        }
        $admin_data[] = $admin_row; // Add sub array into the main array
    }

    //Checking whether the input username and password are the same as the data created in the csv file
    foreach ($admin_data as $admin_row) {

        if ($admin_row['Username'] == $username && password_verify($password, $admin_row['Password'])) {
          // Redirect to the admin dashboard and the username is saved on server
          $_SESSION['username'] = $username;
          header('location: ../admin');
          
        // Otherwise, an error message appears. 
        } else if ($admin_row['Username'] !== $username || !password_verify($password, $admin_row['Password'])) {
          $status = "Incorrect Username/Password!";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="authors" content="Group 8">
        <meta name="description" content="admin login">
        <link rel="stylesheet" href="install.css">
        <script src="https://kit.fontawesome.com/5143a5dc4e.js" crossorigin="anonymous"></script>
        <title>Admin Login | Infinis Mall</title>
    </head>

    <body>
        <div id="container" class="site-container">
            <!--Making the container-->
            <header>
                <h1>The <span>Infinis</span> Mall | LOGIN TO ADMIN ACCOUNT</h1>
            </header>
            <div class="content">
                <div class="login-section">
                    <div class="login-form">
                        <form method="POST" action="admin-login.php">
                            <h2>LOGIN</h2>

                            <div class="form-row">
                                <div class="form-label">
                                    <label for="username">Admin Username</label>
                                </div>
                                <!--Form Label-->
                                <div class="form-field">
                                    <input required id="username" type="text" name="username" placeholder="Username" maxlength="50">
                                </div>
                                <!--Form Field-->
                            </div>
                            <!--Form Row-->

                            <div class="form-row">
                                <div class="form-label">
                                    <label for="password">Password</label>
                                </div>
                                <!--Form Label-->
                                <div class="form-field">
                                    <input required id="password" type="password" name="password" placeholder="Password">
                                </div>
                                <!--Form Field-->
                            </div>
                            <!--Form Row-->
                            <button class="submit-button" type="submit" value="Login" name="login">Login</button>
                        </form>
                    </div>
                    <!--Login Form-->

                    <div class="login-image">
                        <img src="images/workspace.jpg" alt="Workspace" title="Workspace">
                    </div>
                    <!--Login Image-->
                </div>
                <!--Login Section-->
            </div>
            <!--Content-->

            <footer>
                <p>Powered by KING POWER</p>
                <p>© 2021 The Infinis Mall</p>
            </footer>
        </div>
        <!--Container-->
    </body>
</html>