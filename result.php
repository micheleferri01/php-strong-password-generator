<?php
require_once('./functions.php');

$error = null;

$password_lenght = isset($_GET['password_lenght']) && $_GET['password_lenght']!== ''? (int)$_GET['password_lenght'] : null;

$doubled_chars_allowed = $_GET['doubled_chars_allowed']?? null;

$letters_allowed = !empty($_GET['letters']);
$numbers_allowed = !empty($_GET['numbers']);
$simbols_allowed = !empty($_GET['simbols']);

// stringa dei valori permessi
$allowedChars = null;

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password generata</title>

    <!-- bootstrap -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
<body>
    <h1>Password generata</h1>
    <?php
        if (!$letters_allowed && !$numbers_allowed && !$simbols_allowed) {
            $error = 'Devi selezionare almeno un tipo di carattere';
           echo "<p>$error</p>";
        } elseif (empty($password_lenght) || $password_lenght <= 0) {
            $error = 'Lunghezza password non valida';
            echo "<p>$error</p>";
        } else {
            $allowedChars = allowed_chars($numbers_allowed, $simbols_allowed, $letters_allowed);
            $generatedPassword = passwordGenerator($password_lenght, $doubled_chars_allowed, $allowedChars);
            echo "<p>$generatedPassword</p>";
        }
    ?>

    <!-- script bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>