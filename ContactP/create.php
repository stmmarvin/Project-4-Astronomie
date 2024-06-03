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
    $sql = "INSERT INTO contact (Firstname, 
                                Lastname,
                                PhoneNumber, 
                                Email, 
                                Question)           
            VALUEs              (:firstname, 
                                :lastname, 
                                :phonenumber,
                                :email, 
                                :question)";
    $statement = $pdo->prepare($sql);

    // Bind the parameters
    $statement->bindParam(':firstname', $_POST['firstname'], PDO::PARAM_STR);
    $statement->bindParam(':lastname', $_POST['lastname'], PDO::PARAM_STR);
    $statement->bindParam(':phonenumber', $_POST['phonenumber'], PDO::PARAM_STR);
    $statement->bindParam(':email', $_POST['email'], PDO::PARAM_STR);
    $statement->bindParam(':question', $_POST['question'], PDO::PARAM_STR);
    
 /**
     * Voer de query uit in de database
     */
    $statement->execute();

    /**
     * Geef feedback aan de gebruiker
     */
    echo "De gegevens zijn opgeslagen in de database";

    /**
     * Met een header() functie kun je automatisch naar een andere pagina
     * navigeren
     */
    header('Refresh:2.5; url=read.php');

    


