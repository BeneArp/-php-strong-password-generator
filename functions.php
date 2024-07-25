<?php

    // var_dump($numero_utente);

    // ARRAY
    
    // array caratteri speciali
    $caratteri_speciali = ['!','?','&','%','$','<','>','^','+','-','*','/','(',')','[',']','{','}','@','#','_','=',];

    // genero tutte le lettere dell'alfabeto sia MAIUSCOLE che minuscole
    $alphachar = array_merge(range('A', 'Z'), range('a', 'z'));

    // genero tutti i numeri tra 0 e 9
    $numbers = range(0,9);




    // // faccio un ciclo sull'array cratteri speciali per mettere ogni carattere nell'array che userò per generare la password
    // foreach($caratteri_speciali as $carattere){
    //     $caratteri_password[] = $carattere;
    // }


    // // faccio un ciclo sull'array aplphachar per mettere ogni carattere nell'array che userò per generare la password
    // foreach($alphachar as $carattere){
    //     $caratteri_password[] = $carattere;
    // }


    // // faccio un ciclo sull'array numbers per mettere ogni carattere nell'array che userò per generare la password
    // foreach($numbers as $carattere){
    //     $caratteri_password[] = $carattere;
    // }



    // FUNZIONI
    // genera array ciclando sugli array che corrispondono alle categorie scelte dall'utente
    function createArray($parametro1, $parametro2, $parametro3, $array1, $array2, $array3){
        if($parametro1 === 'on'){
            foreach($array1 as $carattere){
                $array_password[] = $carattere;
            }
        }

        if($parametro2 === 'on'){
            foreach($array2 as $carattere){
                $array_password[] = $carattere;
            }
        }
        if($parametro3 === 'on'){
            foreach($array3 as $carattere){
                $array_password[] = $carattere;
            }
        }

        var_dump($array_password);
        return $array_password;
    }





    // genera un stringa della lunghezza richiesta, formata da caratteri presi randomicamente dall'array che gli viene passato
    function generatePassword($contenuto, $lunghezza){
    
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
    };



    // genera un stringa della lunghezza richiesta, formata da caratteri presi randomicamente dall'array che gli viene passato senza mai ripetere un carattere
    function generatePasswordUnique($contenuto, $lunghezza){
        $password = [];

        // controllo che il numero inserito dall'utente non sia più grande della lunghezza dell'array da cui prendo i caratteri
        if($lunghezza > count($contenuto)){
            // se il numero inserito è maggiore, il nuovo numero utente diventa l'indice dell'ultimo carattere nell'array
            $lunghezza = count($contenuto);
        }

        for($i = 1; $i <= $lunghezza; $i++){
            $carattere = $contenuto[rand(0, (count($contenuto) - 1))];

            if(!in_array($carattere, $password)){
                $password[] = $carattere;
            }
        }
        
        $string_password = implode($password);
        return $string_password;
    };    


    // var_dump(count($caratteri_password));


    // $my_password = generatePassword($caratteri_password, $numero_utente);
    // var_dump($my_password);
