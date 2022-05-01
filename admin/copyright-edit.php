<?php 
    $file = "../data/copyright.txt";
    $open_file = fopen($file, "w");
    $edited_file = $_POST['view'];
    file_put_contents($file, $edited_file);
    fclose($open_file);
    header('location: copyright.php');
?>