<?php
// echo isset($_POST["word"]) ? $_POST["word"] : "no words";
$word = $_POST["filter"];
$wordLenght = strlen($word);

?>

<h1><?php echo $word ?></h1>
<h1><?php echo strlen($word) ?></h1>
