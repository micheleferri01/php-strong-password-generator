<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php strong password generator</title>
</head>
<body>
    <h1>Strong password generator</h1>
    <h2>Genera la tua password sicura</h2>

    <div>
        <form action="result.php" mehtod='GET'>
            <div>
                <label for="pass-lenght">Lunghezza password</label>
                <input type="number" id='pass-lenght' name='password_lenght' required>
            </div>

            <button type='submit'>Genera password</button>
        </form>
    </div>
</body>
</html>