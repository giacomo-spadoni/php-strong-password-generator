<?php
$generated_pssw = '';
$allowed_numbers = '';

if (isset($_GET['lettere'])) {
    $allowed_numbers .= "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ";
}

if (isset($_GET['numeri'])) {
    $allowed_numbers .= "0123456789";
}

if (isset($_GET['simboli'])) {
    $allowed_numbers .= "!@#$%^&*()_+-=[]{}|;:,.<>/?";
}

include 'method.php';

$generated_pssw = createPssw($allowed_numbers);

?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>

<body>
    <main>
        <form action="index.php">
            <input id="text" type="number" name="password_length" placeholder="inserisci la lunghezza della password" min="6" max="12" required>
            <fieldset>
                <legend>Scegli la composizione della password:</legend>

                <div>
                    <input type="checkbox" id="lettere" name="lettere" value="true" checked />
                    <label for="lettere">lettere</label>
                </div>

                <div>
                    <input type="checkbox" id="numeri" name="numeri" value="true" />
                    <label for="numeri">numeri</label>
                </div>

                <div>
                    <input type="checkbox" id="simboli" name="simboli" value="true" />
                    <label for="simboli">simboli</label>
                </div>
            </fieldset>
            <button>crea</button>
        </form>
        <div>la password generata è: <?php echo $generated_pssw ?></div>
    </main>
</body>

</html>