<?php

$passwordLength = $_GET['length'];

if(isset($_GET['length'])) {
    function generatePassword($passwordLength) {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ!"#$%&\'()*+,-./:;<=>?@[\]^_`{|}~';
        $characters_length = strlen($characters);
        $password = '';

        for($i = 0; $i < $passwordLength; $i++) {
            $random = rand(0, $characters_length - 1);
            $password .= $characters[$random];
        }
        return $password;


    }
    $generatedPassword = generatePassword($passwordLength);

    
}

?>

<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-strong-password-generator</title>
</head>
<body>
    <h1>
        Password Generator
    </h1>
    <form action="index.php">
        <label for="length">Inserisci quanto vuoi che sia lunga la password</label>
        <input type="number" id="length" name="length" min="6" max="50">
        <button type="submit">Genera Password</button>
    </form>

    <?php

    echo "<p>
    La tua password è: $generatedPassword
    ";

    ?>
</body>
</html>