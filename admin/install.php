<?php
if (isset($_POST['create'])) {
    $password = $_POST['password']; // Setting password variable
    $retypepassword = $_POST['re-password']; // Setting retype password variable
    
    // Check if password and re-type password are the same or not
    if ($password == $retypepassword) { // If password and re-type password are the same
        $status = "Successful! Please delete this file"; // Call the variable for success
        $psw_hash = password_hash($password, PASSWORD_DEFAULT); // Call the variable for hashing password
        $username_data = $_POST['username']; 
        $admin_file = '../data/admin_data.csv';
        $open = fopen($admin_file, "a"); // Open the file outside the root document
        $admin_data = array( // Create the array
            'username' => $username_data,
            'password' => $psw_hash,
        );
        fputcsv($open, $admin_data);// Input the data
        $_POST['username'] = ''; // Avoid warning
        $psw_hash = ''; // Avoid warning
        fclose($open);
    } else { // If password and re-type password are not the same
        $error = "Please enter again"; // Call the variable for error
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
        <title>Creating admin account | Infinis Mall</title>
    </head>

    <body>
        <div id="container" class="site-container">
            <!--Making the container-->
            <header>
                <h1>The <span>Infinis</span> Mall | ADMINISTRATOR ACCOUNT</h1>
            </header>
            <div class="content">
                <div class="login-section">
                    <div class="login-form">
                        <form method="POST">
                            <h2>WELCOME</h2>

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

                            <div class="form-row">
                                <div class="form-label">
                                    <label for="re-password">Re-type Password</label>
                                </div>
                                <!--Form Label-->
                                <div class="form-field">
                                    <input required id="re-password" type="password" name="re-password" placeholder="Re-type Password">
                                </div>
                                <!--Form Field-->
                            </div>
                            <!--Form Row-->
                            <p id="error" style="padding: 2px 16px 0 16px;font-size: 12px; color: red">
                                <?php
                                if (isset($error)) { // Print the error variable to the screen
                                    echo $error;
                                }
                                ?>
                            </p>
                            <p id="successful" style="padding: 2px 16px 0 16px; font-size: 12px; color: green">
                                <?php
                                if (isset($status)) { // Print the success variable to the screen
                                    echo $status;
                                }
                                ?>
                            </p>
                            <button class="submit-button" type="submit" value="Create" name="create">Create</button>
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