<?php 

include ('../config/config.php');

$dsn = "mysql:host=$dbHost;
        dbname=$dbName;
        charset=UTF8";


$pdo = new PDO($dsn, $dbUser, $dbPass);



$_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_FULL_SPECIAL_CHARS);


$sql = "INSERT INTO User (Username, 
                            Emailadress, 
                            Password)
        VALUES              (:username, 
                            :Emailadress, 
                            :password)";