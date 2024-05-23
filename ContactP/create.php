<?php
/* Error reporting for debugging
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Gebruik realpath voor het absolute pad
$configPath = realpath(__DIR__ . '/../config/config.php');
if ($configPath === false) {
    die('Kon config.php niet vinden.');
}
include($configPath);



// Debugging: print de database instellingen
echo "dbHost: $dbHost<br>";
echo "dbName: $dbName<br>";
echo "dbUser: $dbUser<br>";
echo "dbPass: $dbPass<br>";

try {
    // Create connection
    $dsn = "mysql:host=$dbHost;dbname=$dbName;charset=UTF8";
    $pdo = new PDO($dsn, $dbUser, $dbPass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Sanitize the input
    $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_FULL_SPECIAL_CHARS);

    // Prepare the query
    $sql = "INSERT INTO contact (Firstname, Lastname, Email, Question) 
            VALUES (:firstname, :lastname, :email, :question)";
    $statement = $pdo->prepare($sql);

    // Bind the parameters
    $statement->bindParam(':firstname', $_POST['firstname'], PDO::PARAM_STR);
    $statement->bindParam(':lastname', $_POST['lastname'], PDO::PARAM_STR);
    $statement->bindParam(':email', $_POST['email'], PDO::PARAM_STR);
    $statement->bindParam(':question', $_POST['question'], PDO::PARAM_STR);

    // Execute the query
    $statement->execute();

    // Confirm success
    echo "Het formulier is verzonden.";
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
var_dump($configPath);**/





// Path: ContactP/contact.php
include('../config/config.php');

try {
    // Create connection
    $dsn = "mysql:host=$dbHost;dbname=$dbName;charset=UTF8";
    $pdo = new PDO($dsn, $dbUser, $dbPass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Sanitize the input
    $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_FULL_SPECIAL_CHARS);

    // Prepare the query
    $sql = "INSERT INTO contact (Firstname, Lastname, Email, Question) 
            VALUES (:firstname, :lastname, :email, :question)";
    $statement = $pdo->prepare($sql);

    // Bind the parameters
    $statement->bindParam(':firstname', $_POST['firstname'], PDO::PARAM_STR);
    $statement->bindParam(':lastname', $_POST['lastname'], PDO::PARAM_STR);
    $statement->bindParam(':email', $_POST['email'], PDO::PARAM_STR);
    $statement->bindParam(':question', $_POST['question'], PDO::PARAM_STR);

    // Execute the query
    $statement->execute();

    // Confirm success
    echo "Het formulier is verzonden.";
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
?>

