<?php
$password_lenght = isset($_GET['password_lenght']) && $_GET['password_lenght']!== ''? (int)$_GET['password_lenght'] : null;

require_once('./functions.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password generata</title>
</head>
<body>
    <h1>Password generata</h1>
    <p>Password generata: <?php echo passwordGenerator($password_lenght); ?></p>
</body>
</html>