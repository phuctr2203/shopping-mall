<?php 
    header('location: about-us.php');
    if (isset($_POST['save'])) {
        if ($_FILES['khanh']['error'] == UPLOAD_ERR_OK) {
            // store new image as name.jpg (overwrite the current file)
            $location = "../admin/images/khanh.jpg"; 
            move_uploaded_file($_FILES['khanh']['tmp_name'], $location);
            print_r($_FILES['khanh']);
        }

        if ($_FILES['nam']['error'] == UPLOAD_ERR_OK) {
            $location = "../admin/images/nam.jpg";
            move_uploaded_file($_FILES['nam']['tmp_name'], $location);
            print_r($_FILES['nam']);
        }

        if ($_FILES['khiem']['error'] == UPLOAD_ERR_OK) {
            $location = "../admin/images/khiem.jpg";
            move_uploaded_file($_FILES['khiem']['tmp_name'], $location);
            print_r($_FILES['khiem']);
        }
        
        if ($_FILES['phuc']['error'] == UPLOAD_ERR_OK) {
            $location = "../admin/images/phuc.jpg";
            move_uploaded_file($_FILES['phuc']['tmp_name'], $location);
            print_r($_FILES['phuc']);
        }
    }
?>
