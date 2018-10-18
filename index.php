<?php
$kiek_isgerei = rand(0, 10);
$barnio_riba = rand(1, 4);
$blogai = $kiek_isgerei - $barnio_riba;
$gerai = $barnio_riba - $kiek_isgerei;
$text = null;
if ($kiek_isgerei > $barnio_riba) {
    $text = "Zmona barsis, nes isgerei $blogai bokalais per daug";
} elseif ($barnio_riba >= $kiek_isgerei) {
    $text = "Zmona nesibars nes galejai isgerti dar $gerai bokalais daugiau";
}
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>
        <h1><?php print $text; ?></h1>

    </body>
</html>