<?php
$fridge = ['Jogurtas', 'Kebabas', 'Alus', 'Sugede vaisiai', 'Supuves avokadas'];
$text =null;
foreach ($fridge as $produktas){
  $text .= $produktas. ' '; 
}

?>
<html>
    <head>
        <title>Foreach</title>
    </head>
   <body>
       <div> <?php print $text?> </div>
   </body>
</html>