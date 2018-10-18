<?php
$distance = rand(100, 10000);
$fuel_100km = 7.5;
$fuel_price = 1.32;
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

    </body>
</html>