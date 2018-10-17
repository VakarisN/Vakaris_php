
<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title></title>
         <?php
$mano_pinigai = 1000;
$spent_per_month = 600;
$earned_per_month = 800;
$unknown_per_month = rand(20, 199);
$months = rand (2, 24);
$wallet_forecast = $mano_pinigai + ($earned_per_month - $spent_per_month - $unknown_per_month) * $months;
?>
    </head>
    <body>
        Po <?php print $months ?> menesiu, tiketina turesiu <?php print $wallet_forecast?> pinigu.


    </body>
</html>
