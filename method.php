<?php

function createPssw($allowed_numbers)
{
    $temporary_pssw = '';
    if (isset($_GET["password_length"])) {
        $password_length = $_GET["password_length"];

        for ($i = 0; $i < $password_length; $i++) {
            $random_index = random_int(0, strlen($allowed_numbers) - 1);
            $temporary_pssw[$i] = $allowed_numbers[$random_index];
        }
    }

    return $temporary_pssw;
}
