<?php
    function passwordGenerator ($pass_lenght) {
        // Stringa dei valori ammessi
        $allowedChars = 'ABCDEFGHIJKYLMNOPQRSTUVWZabcdefghilmnopqrstuvzwyxkj0123456789*/$!?^#@';
        
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