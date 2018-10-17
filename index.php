
<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title></title>
         <?php
$liepa_days = 31;
$rugpjutis_days = 30;
$rugsejis_days = 30;
$dienos_iki_dabar = $liepa_days + $rugpjutis_days + $rugsejis_days + date('d');
?>
    </head>
    <body>
        Nuo Liepos pradzios iki siandien praejo <?php print $dienos_iki_dabar ?> dienu.


    </body>
</html>
