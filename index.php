<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <title>BadWords</title>
</head>

<body>
    <div class="form-container">
        <form action="filter.php" method="POST">
            <div class="paragrafo_container">
                <label for="paragrafo"><strong>Paragrafo</strong></label>
                <input type="text" name="paragrafo">
            </div>
            <div class="censura-container">
                <label for="censura"><strong>Parola da censurare</strong></label>
                <input type="text" name="censura">
            </div>
            <div class="button-container">
                <button type="submit">Invia</button>
            </div>
        </form>
    </div>
</body>

</html>