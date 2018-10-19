<?php
$fridge = ['Jogurtas', 'Kebabas', 'Alus', 'Sugede vaisiai', 'Supuves avokadas'];
$text = null;
foreach ($fridge as $produktas) {
    $text .= $produktas . ' ';
}
?>
<html>
    <head>
        <title>Foreach</title>
    </head>
    <body>
        <div> <?php print $fridge[rand(0, 4)]; ?> </div>
    </body>
</html>