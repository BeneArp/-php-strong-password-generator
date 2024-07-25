<?php

    function generatePassword($contenuto, $lunghezza){
        // controllo che il numero utente non sia null
        if(isset($lunghezza) && $lunghezza > 7){

            // controllo che il numero inserito dall'utente non sia più grande della lunghezza dell'array da cui prendo i caratteri
            if($lunghezza > count($contenuto)){
                // se il numero inserito è maggiore, il nuovo numero utente diventa l'indice dell'ultimo carattere nell'array
                $lunghezza = count($contenuto);
            }

            for($i = 1; $i <= $lunghezza; $i++){
                $carattere = $contenuto[rand(0, (count($contenuto) - 1))];
                $password[] = $carattere;
            }
            
            $string_password = implode($password);
            return $string_password;
        }
    };


    // var_dump(count($caratteri_password));


    if(count($caratteri_password) < $numero_utente){
        // se il numero inserito è maggiore, il nuovo numero utente diventa l'indice dell'ultimo carattere nell'array
        $numero_utente = count($caratteri_password);
    }

    // $my_password = generatePassword($caratteri_password, $numero_utente);
    // var_dump($my_password);
