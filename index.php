<?php
$x = 10;
$y = 2;
$kiekis = 10;
$i = null;
for ($i = 0; $i < $kiekis; $i++) {
    $text = print nl2br("Dabartinė \$x vertė: $x\n");
    $x += $y;
}
?>
<html>
    <head>
        <title>Antra užduotis</title>
    </head>
    <body>
        <p>
            <?php
            $text;
            ?>
        </p>
    </body>
</html>