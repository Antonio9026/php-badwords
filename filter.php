<?php
// echo isset($_POST["word"]) ? $_POST["word"] : "no words";
$paragrafo= $_POST["paragrafo"];
$paragrafoLenght = strlen($paragrafo);

$censoredWord = $_POST["censura"];
$censoredLenght = strlen($censoredWord);
$newCens = str_replace($censoredWord,"***", $paragrafo);


?>

<h1><?php echo $paragrafo . " " . $paragrafoLenght  ?></h1>

<h1><?php echo $newCens . " " . $censoredLenght ?></h1>