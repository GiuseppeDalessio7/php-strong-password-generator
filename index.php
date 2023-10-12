<?php
/* 
Milestone 1
Creare un form che invii in GET la lunghezza della password.
 Una nostra funzione utilizzerà questo dato per generare una password casuale (composta da lettere, lettere maiuscole, numeri e simboli) da restituire all’utente. 
 Scriviamo tutto (logica e layout) in un unico file index.php

*/

$_GET["password"];
var_dump($_GET["password"]);

function generaPasswordCasuale($lunghezza = 10)
{
    $caratteri = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()_-+=';
    $_GET["password"] = '';

    for ($i = 0; $i < $lunghezza; $i++) {
        $carattereCasuale = $caratteri[rand(0, strlen($caratteri) - 1)];
        $_GET["password"] .= $carattereCasuale;
    }

    return $_GET["password"];
}

// $passwordCasuale = generaPasswordCasuale();
// echo $passwordCasuale;

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password generator</title>
</head>

<body>


    <form action="" method="get">

        <input type="text" name="password" id="password">
        <button type="submit">invia</button>

    </form>

    <?php
    $passwordCasuale = generaPasswordCasuale();
    echo "La Password generata è :" . $passwordCasuale;
    ?>








</body>

</html>