<?php
/**
 * Created by PhpStorm.
 * User: Joey
 * Date: 13-12-2016
 * Time: 16:15
 */
//verwerk de POST variabeles.
$gebruiker = $_POST['naam'];

//start een session voor deze gebruiker.
session_start();

//maak variables voor deze gebruiker.
$_SESSION['klant'] = $gebruiker;
$_SESSION['counter'] = 0;

$myfile = fopen("account.txt", "r");
// Output one line until end-of-file
while(!feof($myfile)) {
    // if()
    // lees de inhoud regel voor regel
        // opsplitsen in array \t
        // vergelijk op array[index] met klantnaam
        echo fgets($myfile) . "<br>";
}
fclose($myfile);

//vraag de welkompagina op.
header('location: welkom.php');