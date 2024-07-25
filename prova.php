<?php 

    $numero_utente = $_GET['numero_utente'];
    $lettere = $_GET['lettere'];
    $numeri = $_GET['numeri'];
    $simboli = $_GET['simboli'];

    var_dump($lettere);
    
    // se di defaulto non viene inviata la chiave 'ripetizioni' $ripetizioni sarà = false
    $vote = isset($_GET['ripetizioni']) ? $_GET['ripetizioni'] : false;

    var_dump($numeri)
?>


<div class="ms-box">
            <div class="container-fluid">
                <div class="row">

                    <div class="col-6">
                        <span>Lunghezza password:</span>
                        <span>Consenti ripetizione di uno o più caratteri:</span>

                        
                    </div>
                    <div class="col-6">

                        <form action="prova.php" method="GET">

                            <!-- input -->
                            <input class="form-control" type="number" name="numero_utente" id="numero_utente" placeholder="Inserisci numero">

                            <div class="form-check mt-4">
                                <input class="form-check-input" type="radio" name="ripetizioni" id="ripetizioni_si" value="si">
                                <label class="form-check-label me-3" for="ripetizioni_si"> Si </label>

                                <input class="form-check-input" type="radio" name="ripetizioni" id="ripetizioni_no" value="no">
                                <label class="form-check-label me-3" for="ripetizioni_no"> No </label>
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