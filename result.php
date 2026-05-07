<?php

    session_start();

    $password = $_SESSION['generatedPassword'] ?? null;
    $error = $_SESSION['error'] ?? null;

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
<body class='container bg-info'>
    <h1 class='mt-5 mb-3 text-center'>Password generata</h1>
    <div class='card fs-3 text-center'>
        <?php
            if($error) {
                echo "<p class='m-0 fs-3'>$error</p>";
            }elseif ($password) {
                 echo "<p class='m-0 fs-3'>$password</p>";
            }else {
                echo "<p class='m-0 fs-3'>Nessuna password generata.</p>";
            }

            unset($_SESSION['generatedPassword']);
            unset($_SESSION['error']);
        ?>
    </div>

    <a href="./index.php" class='btn btn-primary mt-3'>Torna indietro</a>
    
    <!-- script bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>