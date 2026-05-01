<?php
    // funzione per generare la stringa dei valori permessi basandosi sulle preferenze indicate  dall'utente
    function allowed_chars($numbers_allowed,$simbols_allowed,$letters_allowed){
        $letters = 'ABCDEFGHIJLMNOPQRSTUVWXYZabcdefghijlmnopqrstuvwxyz';
        $numbers = '0123456789';
        $simbols = '*@#$&!?/';
        $allowedChars = '';

        if($letters_allowed == 'true'){
            $allowedChars = $allowedChars . $letters;
        }
        if($numbers_allowed == 'true'){
             $allowedChars = $allowedChars . $numbers;
        }
        if($simbols_allowed == 'true'){
            $allowedChars = $allowedChars . $simbols;
        }

        return $allowedChars;
    }


    function passwordGenerator ($pass_lenght,$doubled_chars_allowed, $allowedChars) {
        
        // Array per salvare la password che verrà creata
        $generated_password = [];
        
        if(!empty($pass_lenght) && $pass_lenght > 0){
            if($doubled_chars_allowed == 'Si'){
                while (count($generated_password) < $pass_lenght){
                    $n = rand(0, strlen($allowedChars)-1 );
                    array_push($generated_password, $allowedChars[$n]);
                }
            }else{
                 if($pass_lenght <= strlen($allowedChars)-1){
                    while (count($generated_password) < $pass_lenght){
                        $n = rand(0, strlen($allowedChars)-1 );
                        if(!in_array($allowedChars[$n], $generated_password)){
                            array_push($generated_password, $allowedChars[$n]);
                        }
                    }
                }else{
                    $length_allowedChars = strlen($allowedChars)-1;
                    $error = "Lunghezza troppo grande senza duplicati.";

                    return $error;
                }
            }
           

            return implode($generated_password);
        }
    }
?>