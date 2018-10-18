<?php
$grizai_velai =rand(0, 1);
$grizai_isgeres =rand(0, 1);  
$text =null;
if ($grizai_velai && $grizai_isgeres){
    $text = 'Miegosi ant sofos, nes grizai velai ir isgeres';
} elseif ($grizai_isgeres){
$text = 'Nemiegosi ant sofos, nes negrizai isgeres';
} elseif ($grizai_velai){
$text = 'Nemiegosi ant sofos, nes negrizai velai';
} else {
$text = 'Nemiegosi ant sofos, nes negrizai nei velai nei isgeres';
}
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>
        <h1><?php print $text ?></h1>
        
    </body>
</html>