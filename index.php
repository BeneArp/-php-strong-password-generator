<?php 

    // var_dump($caratteri_password);

    // includo le funzioni
    include __DIR__ . '/functions.php';


     // controllo che il numero utente non sia null
     if(isset($numero_utente) && $numero_utente > 7 && $numero_utente <= 32){

        if($lettere === '' && $numeri === '' && $simboli === ''){
            $caratteri_password = createArray($alphachar, $numbers, $caratteri_speciali);

        }else{
            $caratteri_password = createArrayWithCategory($lettere, $numeri, $simboli, $alphachar, $numbers, $caratteri_speciali);

        }

        
        if($ripetizioni === 'no'){
            $user_password = generatePasswordUnique($caratteri_password, $numero_utente);

        }else{
            $user_password = generatePassword($caratteri_password, $numero_utente);
        }

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

    <div class="container pt-5">

        <div class="container-md text-center">
            <h1>Strong Password Generator</h1>
            <h2>Genera una password sicura</h2>
        </div>

        <div class="container-md text-center">
            <div class="ms-box light-blue">
                    <span>Genera una password compresa fra 8 e 32</span>
            </div>
        </div>

        <div class="ms-box">
            <div class="container-fluid">
                <div class="row">

                    <div class="col-6">
                        <span>Lunghezza password:</span>
                        <span>Consenti ripetizione di uno o più caratteri:</span>
                    </div>
                    <div class="col-6">

                        <form action="index.php" method="GET">

                            <!-- input -->
                            <input class="form-control" type="number" name="numero_utente" placeholder="Inserisci numero">

                            <div class="form-check mt-4">
                                <input class="form-check-input" type="radio" name="ripetizioni" id="ripetizioni_si" value="si">
                                <label class="form-check-label" for="ripetizioni_si">
                                    Si
                                </label>
                                </div>
                                <div class="form-check">
                                <input class="form-check-input" type="radio" name="ripetizioni" id="ripetizioni_no" value="no">
                                <label class="form-check-label" for="ripetizioni_no">
                                    No
                                </label>
                            </div>

                            <!-- checkbox -->
                            <div class="form-check mt-4">
                                <input class="form-check-input" type="checkbox" name="lettere" id="lettere">
                                <label class="form-check-label" for="lettere">
                                    Lettere
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="numeri" id="numeri">
                                <label class="form-check-label" for="numeri">
                                    Numeri
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="simboli" id="simboli">
                                <label class="form-check-label" for="simboli">
                                    Caratteri Speciali
                                </label>
                            </div>

                            
                        <div class="buttons">
                            <button class="btn btn-primary" type="submit">Invia</button>
                            <button class="btn btn-danger">Annulla</button>
                        </div>
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
        border-radius: 8px;
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

    span{
        display: inline-block;
        margin: 1em 0;
    }

    .buttons{
        margin-top: 3em;
    }
</style>