<?php
session_start();
/* Milestone 1
Creare un form che invii in GET la lunghezza della password.*/
$passwordLength = $_GET['passwordLength'];
var_dump($passwordLength);
//Una nostra funzione utilizzerà questo dato per generare una password casuale (composta da lettere, lettere maiuscole, numeri e simboli) da restituire all’utente. 


passwordGenerator($passwordLength);

function passwordGenerator($userInput) {
$comb = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890';
$password = "";

for ($i = 0; $i < $userInput ; $i++){
$password .=  $comb[rand( 0 , strlen($comb) - 1)];
}
return $password;
}

echo passwordGenerator($passwordLength);
$YourPassword= passwordGenerator($passwordLength);
$_SESSION["YourPW"] = $YourPassword;
header('Location: ./passwordView.php');