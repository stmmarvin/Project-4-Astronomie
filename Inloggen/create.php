<?php
include ('../config/config.php');
$dsn = "mysql:host=$dbHost;dbname=$dbName;charset=UTF8";
$pdo = new PDO($dsn, $dbUser, $dbPass);
$_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_FULL_SPECIAL_CHARS);
var_dump($_POST);
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if ($_POST['form_type'] == 'register') {
        if (
            !isset($_POST['username']) || empty($_POST['username']) ||
            !isset($_POST['email']) || empty($_POST['email']) ||
            !isset($_POST['password']) || empty($_POST['password'])
        ) {
            echo "All fields are required.";
            exit;
        }

        $sql = "SELECT * FROM User WHERE Username = :username OR Emailadress = :email";
        $statement = $pdo->prepare($sql);
        $statement->bindParam(':username', $_POST['username'], PDO::PARAM_STR);
        $statement->bindParam(':email', $_POST['email'], PDO::PARAM_STR);
        $statement->execute();

        if ($statement->rowCount() > 0) {
            echo "De gebruikersnaam of het e-mailadres bestaat al";
        } else {
            $hashedPassword = password_hash($_POST['password'], PASSWORD_BCRYPT);
            $sql = "INSERT INTO User (Username, Emailadress, Password) 
                    VALUES (:username, :email, :password)";
            $statement = $pdo->prepare($sql);
            $statement->bindParam(':username', $_POST['username'], PDO::PARAM_STR);
            $statement->bindParam(':email', $_POST['email'], PDO::PARAM_STR);
            $statement->bindParam(':password', $hashedPassword, PDO::PARAM_STR);
            $statement->execute();
            echo "De gegevens zijn opgeslagen";
            header('Refresh: 2; url=inschrijf_overzicht.php');
        }
    } elseif ($_POST['form_type'] == 'login') {
        if (
            !isset($_POST['username']) || empty($_POST['username']) ||
            !isset($_POST['password']) || empty($_POST['password'])
        ) {
            echo "All fields are required.";
            exit;
        }

        $sql = "SELECT * FROM User WHERE Username = :username";
        $statement = $pdo->prepare($sql);
        $statement->bindParam(':username', $_POST['username'], PDO::PARAM_STR);
        $statement->execute();

        if ($statement->rowCount() > 0) {
            $user = $statement->fetch(PDO::FETCH_ASSOC);
            if (password_verify($_POST['password'], $user['Password'])) {
                echo "Inloggen succesvol";
                header('Refresh: 2; url=inschrijf_overzicht.php');
            } else {
                echo "Onjuist wachtwoord";
                header('Refresh: 2; url=inlog.php');
            }
        } else {
            echo "Gebruikersnaam bestaat niet";
        }
    }
}