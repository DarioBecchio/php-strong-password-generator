<?php
session_start();
/* Milestone 1
Creare un form che invii in GET la lunghezza della password.*/
$passwordLength = $_GET['passwordLength'];
$checkedSelection = $_GET[''];
var_dump($passwordLength , $checkedSelection);
//Una nostra funzione utilizzerà questo dato per generare una password casuale (composta da lettere, lettere maiuscole, numeri e simboli) da restituire all’utente. 




function passwordGenerator($userInput) {
    $fullComb = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890';
    $lowercaseLetterComb = 'abcdefghijklmnopqrstuvwxyz';
    $uppercaseLetterComb = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $onlyNumberComb = '1234567890';

    $password = "";

    for ($i = 0; $i < $userInput ; $i++){
        $password .=  $fullComb[rand( 0 , strlen($fullComb) - 1)];
    }
    return $password;
}


$YourPassword= passwordGenerator($passwordLength);

//$_SESSION["YourPW"] = $YourPassword;
//header('Location: ./passwordView.php');