<?php
$x = 10;
$y = 2;
$kiekis = $x;
$i = null;
for ($i = 0; $x < 40; $i++) {
    $text = print nl2br("Dabartinė \$x vertė: $x\n");
    $x += $y;
}
if ($x>=20) {
    print 'Ciklas nutrauktas';
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