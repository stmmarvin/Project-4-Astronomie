<?php

include('../config/config.php');

$dsn = "mysql:host=$dbHost;
        dbname=$dbName;
        charset=UTF8";

/**
 * Maak een nieuw PDO object zodat we een verbinding hebben met de database
 */
$pdo = new PDO($dsn, $dbUser, $dbPass);

$sql = "SELECT id
                ,Firstname
                ,Lastname
                ,PhoneNumber
                ,Email 
                ,Question 
         FROM contact
         ORDER BY id asc";


/**
 * Met de method (functie in de klasse PDO) prepare maak je de 
 * query klaar om uitgevoerd te worden
 */
$statement = $pdo->prepare($sql);

/**
 * Voer nu de geprepareerde sql-query uit op de database
 */
$statement->execute();

/**
 * Haal de geselecteerde records binnen als objecten in een array
 * en stop deze in een variabele $result
 */
$result = $statement->fetchAll(PDO::FETCH_OBJ);

// var_dump($result);
/**
 * Maak een variabele aan waarin de rijen komen voor de tabel beneden
 */
$tableRows = "";

/**
 * We doorlopen het $result array met een foreach-loop
 */

 foreach ($result as $row) {
     $tableRows .= "<tr>
                        <td>$row->Firstname</td>
                        <td>$row->Lastname</td>
                        <td>$row->PhoneNumber</td>
                        <td>$row->Email</td>
                        <td>$row->Question</td>
                    </tr>";
 }



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
    <a href="../index.php">Home pagina</a>
</body>
</html>
