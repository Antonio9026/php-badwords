<?php
// echo isset($_POST["word"]) ? $_POST["word"] : "no words";
$paragrafo = $_POST["paragrafo"];
$paragrafoLenght = strlen($paragrafo);

$censoredWord = $_POST["censura"];
$censoredLenght = strlen($censoredWord);
$newCens = str_replace($censoredWord, "***", $paragrafo);


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <title>Document</title>
</head>

<body>
    <div class="container">
        <div class="parag-filter">
            <h1><?php echo $paragrafo . " " . $paragrafoLenght  ?></h1>
        </div>
        <div class="censored-filter">
            <h1><?php echo $newCens . " " . $censoredLenght ?></h1>
        </div>
    </div>
</body>

</html>