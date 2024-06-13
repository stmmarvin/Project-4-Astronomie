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
    $sql = "INSERT INTO User (Username, 
                                Emailadress,
                                Password,)           
            VALUEs              (:Username, 
                                :Emailadress, 
                                :Password,)";
    $statement = $pdo->prepare($sql);

    // Bind the parameters
    $statement->bindParam(':Username', $_POST['Username'], PDO::PARAM_STR);
    $statement->bindParam(':Emailadress', $_POST['Emailadress'], PDO::PARAM_STR);
    $statement->bindParam(':Password', $_POST['Password'], PDO::PARAM_STR);
    
 /**
     * Voer de query uit in de database
     */
    $statement->execute();

    /**
     * Geef feedback aan de gebruiker
     */
    echo "De gegevens zijn opgeslagen";

    /**
     * Met een header() functie kun je automatisch naar een andere pagina
     * navigeren
     */
    header('Refresh:1.5; url=read.php');

    


