<?php 

    // Creare un form che invii in GET la lunghezza della password. Una nostra funzione utilizzerà questo dato per generare una password casuale (composta da lettere, lettere maiuscole, numeri e simboli) da restituire all’utente.
    // Scriviamo tutto (logica e layout) in un unico file index.php

    $numero_utente = $_GET['numero_utente'];
    // var_dump($numero_utente);

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

    // var_dump($caratteri_password);

    include __DIR__ . '/functions.php';

    $user_password = generatePassword($caratteri_password, $numero_utente);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password Generator</title>

    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <!-- css -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <div class="container text-center pt-5">

        <h1>Strong Password Generator</h1>
        <h2>Genera una password sicura</h2>

        <div class="container-md">
            <div class="ms-box light-blue">
                <?php if($user_password) : ?>
                    <h3><?php echo $user_password ?></h3>
                
                <?php else : ?>
                    <span>Genera una password compresa fra 8 e 32</span>
                <?php endif ; ?>
            </div>
        </div>

        <div class="ms-box">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-6">
                        <span>Lunghezza password:</span>
                    </div>
                    <div class="col-6">
                        <form action="index.php" method="GET">
                            <input class="form-control" type="number" name="numero_utente" placeholder="Inserisci numero">
                        </form>
                    </div>
                </div>
            </div>
        </div>    
    
    </div>

</body>
</html>

<style>
    body{
        background-color: rgb(0 22 50);
    }

    .ms-box{
        border-radius: 10px;
        margin: 2em 0;
        padding: 1.5em 1em;
        background-color: rgb(248 249 250);
    }

    h1,h2{
        color: rgb(128 139 152);
    }

    .light-blue{
        background-color:rgb(207 244 252) ;
        color: rgb(13 81 96);
    }
</style>