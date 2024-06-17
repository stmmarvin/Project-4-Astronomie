<?php

include('../config/config.php');

/**
 * Gebruik dubbele quotes om de connectiestring, 
 * gebruik kleine letters voor host en dbname!
 */
$dsn = "mysql:host=$dbHost;
        dbname=$dbName;
        charset=UTF8";

/**
 * Maak een nieuw PDO object waarmee je verbinding maakt met de 
 * MySQL-server en de database
 */
$pdo = new PDO($dsn, $dbUser, $dbPass);

/**
 * We gaan de $_POST-array waarden schoonmaken
 */
$_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_FULL_SPECIAL_CHARS);

 // Prepare the query
$sql = "INSERT INTO user (Username, Emailaddress, Password) 
        VALUES (:Username, :Emailaddress, :Password)";
$statement = $pdo->prepare($sql);

// Bind the parameters
$statement->bindParam(':username', $_POST['username'], PDO::PARAM_STR);
$statement->bindParam(':email', $_POST['email'], PDO::PARAM_STR);
$statement->bindParam(':password', $_POST['password'], PDO::PARAM_STR);

/**
 * Voer de query uit in de database
 */
$statement->execute();

/**
 * Geef feedback aan de gebruiker
 */
echo "De gegevens zijn opgeslagen";

/**
 * Met een header() functie kun je automatisch navigeren
 */
header('Refresh: 2; url=inlog.php');

    


