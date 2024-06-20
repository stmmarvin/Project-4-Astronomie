<?php
include ('../config/config.php');

$dsn = "mysql:host=$dbHost;dbname=$dbName;charset=UTF8";
$pdo = new PDO($dsn, $dbUser, $dbPass);

$_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_FULL_SPECIAL_CHARS);

// Debugging: Print the received POST data
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    var_dump($_POST);
}

// Check if the required fields are set and not empty
if (!isset($_POST['username']) || empty($_POST['username']) || 
    !isset($_POST['email']) || empty($_POST['email']) || 
    !isset($_POST['password']) || empty($_POST['password'])) {
    echo "All fields are required.";
    exit;
}

// Check if the username or email already exists
$sql = "SELECT * FROM User WHERE Username = :username OR Emailadress = :email";
$statement = $pdo->prepare($sql);
$statement->bindParam(':username', $_POST['username'], PDO::PARAM_STR);
$statement->bindParam(':email', $_POST['email'], PDO::PARAM_STR);
$statement->execute();

if ($statement->rowCount() > 0) {
    // Username or email already exists
    echo "De gebruikersnaam of het e-mailadres bestaat al";
} else {
    // Hash the password before storing it
    $hashedPassword = password_hash($_POST['password'], PASSWORD_BCRYPT);

    // Username and email are unique, proceed with the insertion
    $sql = "INSERT INTO User (Username, Emailadress, Password) 
            VALUES (:username, :email, :password)";
    $statement = $pdo->prepare($sql);
    $statement->bindParam(':username', $_POST['username'], PDO::PARAM_STR);
    $statement->bindParam(':email', $_POST['email'], PDO::PARAM_STR);
    $statement->bindParam(':password', $hashedPassword, PDO::PARAM_STR);

    $statement->execute();

    echo "De gegevens zijn opgeslagen";
    header('Refresh: 2; url=overzicht.php');
}
