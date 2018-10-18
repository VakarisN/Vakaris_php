<?php
$distance = rand(100, 10000);
$fuel_100km = 7.5;
$fuel_price = 1.32;
$mano_pinigai = 200;
$kuro_kaina = ($distance / 100) * $fuel_100km * $fuel_price;
$kuro_sanaudos = ($distance / 100) * $fuel_100km;
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>
        <h1>Nuvaziavus <?php print $distance ?> km, automobilis sunaudos <?php print $kuro_sanaudos ?> L kuro <br>
            Kaina: <?php print $kuro_kaina ?></h1>
        <?php if ($kuro_kaina > $mano_pinigai): ?>
            <h1>Jeigu reiketu vaziuoti <?php print $distance ?> <br>
                Isvada: As sau  negaliu to  leisti.</h1>
        <?php else: ?>
            <h1>Jeigu reiketu vaziuoti <?php print $distance ?> <br>
                Isvada: As sau  galiu tai  leisti.</h1>
        <?php endif; ?>
    </body>
</html>