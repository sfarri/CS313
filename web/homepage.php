<?php

function randomPhrase() {
    $number = random_int(0, 4);
    $phrases = ["Remember that overconfidence is a slow and insidious killer.", "True desperation is known, only when escape is impossible.", "Curious is the trap-maker's art, his efficacy unwitnessed by his own eyes.", "Triumphant pride precipitates a dizzy fall.", "Victory. A hollow and ridiculous notion. We are born of this thing, made from it, and we will be returned to it in time."];
    $phrase = $phrases[$number];
    return $phrase;
}
    return $ran = randomPhrase();
?>

<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
    <h1>Wisdom: <?php echo randomPhrase(); ?></h1>
</body>
</html>