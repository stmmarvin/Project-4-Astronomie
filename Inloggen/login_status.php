<?php
include ('../config/config.php');

$dsn = "mysql:host=$dbHost;dbname=$dbName;charset=UTF8";
$pdo = new PDO($dsn, $dbUser, $dbPass);

$_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_FULL_SPECIAL_CHARS);

$sql = "SELECT * FROM User WHERE Username = :username AND Password = :password";
$statement = $pdo->prepare($sql);
$statement->bindParam(':username', $_POST['username'], PDO::PARAM_STR);
$statement->bindParam(':password', $_POST['password'], PDO::PARAM_STR);
$statement->execute();

if ($statement->rowCount() > 0) {
  // User exists, login successful
  echo "Login successful";
  // Redirect or start a session here
} else {
  // User does not exist or password is incorrect
  echo "Invalid username or password";
}
