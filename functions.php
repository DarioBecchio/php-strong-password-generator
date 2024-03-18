<?php
session_start();
/* Milestone 1
Creare un form che invii in GET la lunghezza della password.*/
$passwordLength = $_GET['passwordLength'];
$checkbox_value = $_GET['checkbox'];
$repeat_checkbox_value = $_GET['repeatCheckbox'];
var_dump($passwordLength , $checkbox_value , $repeat_checkbox_value);
//Una nostra funzione utilizzerà questo dato per generare una password casuale (composta da lettere, lettere maiuscole, numeri e simboli) da restituire all’utente. 



function passwordGenerator($userInput , $userCheckSelection ,$noRepeatSel) {
    $fullComb = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890';
    $lowercaseLetterComb = 'abcdefghijklmnopqrstuvwxyz';
    $uppercaseLetterComb = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $onlyNumberComb = '1234567890';
    $password = "";

    for ($i = 0; $i < $userInput ; $i++){
        if ($userCheckSelection === 'minuscole'){
            $password .=  $lowercaseLetterComb[rand( 0 , strlen($lowercaseLetterComb) - 1)];
        } elseif ($userCheckSelection === 'maiuscole'){
            $password .=  $uppercaseLetterComb[rand( 0 , strlen($uppercaseLetterComb) - 1)];
        } elseif ($userCheckSelection === 'numeri'){
            $password .=  $onlyNumberComb[rand( 0 , strlen($onlyNumberComb) - 1)];
        } else {
            $password .=  $fullComb[rand( 0 , strlen($fullComb) - 1)];
        }

    }
    if ($noRepeatSel === 'checked'){
        $password = implode('', array_unique(str_split($password)));
    } 
    return $password;
}


$YourPassword= passwordGenerator($passwordLength , $checkbox_value , $repeat_checkbox_value);

$_SESSION["YourPW"] = $YourPassword;
header('Location: ./passwordView.php');