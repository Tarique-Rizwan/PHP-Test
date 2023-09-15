<?php 
    ob_start();

    define('DB_HOST', 'localhost');
    define('DB_USER', 'root');
    define('DB_PASS', '');
    define('DB_NAME', 'luxury-cars');

    $conn = mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME);

    if($conn === false){
            die("ERROR: Could not connect. ". mysqli_connect_error());
        }

?>