<?php 

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

    // includo le funzioni
    include __DIR__ . '/functions.php';

     // controllo che il numero utente non sia null
     if(isset($numero_utente) && $numero_utente > 7){

        $user_password = generatePassword($caratteri_password, $numero_utente);

        session_start();
        $_SESSION['password'] = $user_password;

        // reindirizzo alla pagina success.php
        header('Location: ./success.php');
     };


?>


    <?php 
        // includo l'head
        include __DIR__ . '/head.php'; 
    ?>
<body>

    <div class="container text-center pt-5">

        <h1>Strong Password Generator</h1>
        <h2>Genera una password sicura</h2>

        <div class="container-md">
            <div class="ms-box light-blue">
                    <span>Genera una password compresa fra 8 e 32</span>
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