<?php
$bool = true;
$str = "1";
$flt = 1.23;
$int = 1;
$text = null;
$text2 =null;
$text3 =null;
if ($bool === $int) {
    $text = "Lyginame bool ir int: Identiski";
} elseif ($bool == $int) {
    $text = "Lyginame bool ir int: Vienoda verte, taciau ne identiski";
}
if ($str === $bool) {
    $text2 = "Lyginame str ir bool: Identiski";
} elseif ($str == $bool) {
    $text2 = "Lyginame str ir bool: Vienoda verte, taciau ne identiski";
}
if ($flt === $str) {
    $text3 = "Lyginame flt ir str: Identiski";
} elseif ($flt == $str) {
    $text3 = "Lyginame flt ir str: Vienoda verte, taciau ne identiski";
}
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>
        <h1><?php print $text?></h1>
        <h1><?php print $text2?></h1>
        <h1><?php print $text3?></h1>

    </body>
</html>