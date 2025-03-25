<?php 

//Starting the Session
ob_start();

session_start();

//Creating constant to store non repeating values
define('SITEURL', '');

define('LOCALHOST', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'new-food-order');
$mysqli = new mysqli("localhost","my_user","my_password","my_db");


    // $conn = mysqli_connect(LOCALHOST, DB_USERNAME, DB_PASSWORD) or die();
    
    // $db_select = mysqli_select_db($conn, DB_NAME) or die(); //Selecting Database

?>