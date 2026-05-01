<?php
    // funzione per generare la stringa dei valori permessi basandosi sulle preferenze indicate  dall'utente
    function allowed_chars($numbers_allowed,$simbols_allowed,$letters_allowed){
        $letters = 'ABCDEFGHIJLMNOPQRSTUVWXYZabcdefghijlmnopqrstuvwxyz';
        $numbers = '0123456789';
        $simbols = '*@#$&!?/';
        $allowedChars = '';

        if($letters_allowed == 'on'){
            $allowedChars = $allowedChars . $letters;
        }
        if($numbers_allowed == 'on'){
             $allowedChars = $allowedChars . $numbers;
        }
        if($simbols_allowed == 'on'){
            $allowedChars = $allowedChars . $simbols;
        }

        return $allowedChars;
    }

    
    function passwordGenerator ($pass_lenght,$doubled_chars_allowed) {
        // Stringa dei valori ammessi
        $allowedChars = '';
        
        // Array per salvare la password che verrà creata
        $generated_password = [];
        
        if($pass_lenght && $pass_lenght !== null){
            while (count($generated_password) < $pass_lenght){
                $n = rand(0, strlen($allowedChars)-1 );
                array_push($generated_password, $allowedChars[$n]);
            }

            return implode($generated_password);
        }
    }
?>