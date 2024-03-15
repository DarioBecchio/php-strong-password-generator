<?php
/*
Descrizione
Dobbiamo creare una pagina che permetta ai nostri utenti di utilizzare il nostro generatore di password (abbastanza) sicure. 
L’esercizio è suddiviso in varie milestone ed è molto importante svilupparle in modo ordinato.
Milestone 1
Creare un form che invii in GET la lunghezza della password. 
Una nostra funzione utilizzerà questo dato per generare una password casuale (composta da lettere, lettere maiuscole, numeri e simboli) da restituire all’utente. 
Scriviamo tutto (logica e layout) in un unico file index.php
Milestone 2
Verificato il corretto funzionamento del nostro codice, spostiamo la logica in un file functions.php che includeremo poi nella pagina principale
*/




/*Milestone 2
Verificato il corretto funzionamento del nostro codice, 
spostiamo la logica in un file functions.php 
che includeremo poi nella pagina principale*/

/*
Milestone 3 (BONUS)
Invece di visualizzare la password nella index, 
effettuare un redirect ad una pagina dedicata che 
tramite $_SESSION recupererà la password da mostrare 
all’utente.
Milestone 4 (BONUS)
Gestire ulteriori parametri per la password: quali caratteri usare fra numeri, lettere e simboli. 
Possono essere scelti singolarmente (es. solo numeri) oppure possono essere combinati fra loro 
(es. numeri e simboli, oppure tutti e tre insieme). 
Dare all’utente anche la possibilità di permettere o meno la ripetizione di caratteri uguali.*/
 
//include './functions.php';
//header('Location: ./passwordView');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <form action="functions.php" method="get">
        <input type="text" name="passwordLength">
        <div class="form-check">
            <input class="form-check-input" type="radio" name="minuscole" id="flexRadioDefault1" value="minuscole">
            <label class="form-check-label" for="flexRadioDefault1" >
                Solo lettere maiuscole
            </label>            
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="maiuscole" id="flexRadioDefault1" value="maiuscole">
            <label class="form-check-label" for="flexRadioDefault1">
                Solo lettere minuscole
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="numeri" id="flexRadioDefault1" value="numeri">
            <label class="form-check-label" for="flexRadioDefault1">
                Solo numeri
            </label>
        </div>
        <button type="submit">Invia</button>
    </form>

  
    
</body>
</html>