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
    

    /**
     * Met een header() functie kun je automatisch naar een andere pagina
     * navigeren
     */
    header('Refresh:2.5; url=../index.php');
    ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Weergave Contactgegevens</title>
    <link rel="stylesheet" href="../css/main.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
<br>
    <h3>We hebben jou vraag ontvangen. <br> We nemen zo snel mogelijk contact met je op!</h3>
</body>
</html>


    


