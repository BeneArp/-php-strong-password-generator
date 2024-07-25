<?php 

    // Creare un form che invii in GET la lunghezza della password. Una nostra funzione utilizzerà questo dato per generare una password casuale (composta da lettere, lettere maiuscole, numeri e simboli) da restituire all’utente.
    // Scriviamo tutto (logica e layout) in un unico file index.php

    $numero_utente = $_GET['numero_utente'];
    var_dump($numero_utente);

    // array da cui prenderò i caratteri per generare la password
    $caratteri_password = [];

    // array caratteri speciali
    $caratteri_speciali = ['!','?','&','%','$','<','>','^','+','-','*','/','(',')','[',']','{','}','@','#','_','=',];

    // faccio un ciclo sull'array cratteri speciali per mettere ogni carattere nell'array che userò per generare la password
    foreach($caratteri_speciali as $carattere){
        $caratteri_password[] = $carattere;
    }

    // genero tutte le lettere dell'alfabeto sia MAIUSCOLE che minuscole
    $alphachar = array_merge(range('A', 'Z'), range('a', 'z'));

    // faccio un ciclo sull'array aplphachar per mettere ogni carattere nell'array che userò per generare la password
    foreach($alphachar as $carattere){
        $caratteri_password[] = $carattere;
    }

    // genero tutti i numeri tra 0 e 9
    $numbers = range(0,9);

    // faccio un ciclo sull'array numbers per mettere ogni carattere nell'array che userò per generare la password
    foreach($numbers as $carattere){
        $caratteri_password[] = $carattere;
    }


    var_dump($caratteri_password)

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password Generator</title>
</head>
<body>
    
    <form action="index.php" method="GET">
        <input type="number" name="numero_utente">
    </form>

</body>
</html>