<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php strong password generator</title>

    <!-- bootstrap -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

     <!-- stylesheet -->
      <link rel="stylesheet" href="style.css">
</head>
<body class='container bg-info'>
    <h1 class='text-secondary text-center mt-5'>Strong password generator</h1>
    <h2 class='text-center'>Genera la tua password sicura</h2>

    <div class='d-flex justify-content-center mt-4'>
        <form action="result.php" method='GET' class='card p-3'>
                <div class='d-flex justify-content-between mb-3'>
                    <label for="pass-lenght">Lunghezza password:</label>
                    <input type="number" id='pass-lenght' name='password_lenght' required>
                </div>
                <div class='d-flex justify-content-between mb-3'>
                    <p>Consenti ripetizione di uno o più caratteri:</p>
                    <div class='d-flex flex-column'>
                        <div>
                            <input type="radio" name="doubled_chars_allowed" id="doubled-chars-allowed-yes" value='Si' required>
                            <label for="doubled-chars-allowed-yes">Si</label>
                        </div>
                        <div>
                            <input type="radio" name="doubled_chars_allowed" id="doubled-chars-allowed-no" value='No' required>
                            <label for="doubled-chars-allowed-no">No</label>
                        </div>
                        
                    </div>
                </div>
                <div class='d-flex justify-content-between mb-3'>
                    <p>Seleziona almeno un'opzione</p>
                    <div>
                        <div>
                            <input type="checkbox" name="letters" id="letters">
                            <label for="letters">Lettere</label>
                        </div>
                        <div>
                            <input type="checkbox" name="numbers" id="numbers">
                            <label for="numbers">Numeri</label>
                        </div>
                        <div>
                            <input type="checkbox" name="simbols" id="simbols">
                            <label for="simbols">Simboli</label>
                        </div>
                    </div>
                    
                </div>

                <button type='submit' class='btn btn-primary align-self-start'>Genera password</button>
        </form>
    </div>

    <!-- script bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>