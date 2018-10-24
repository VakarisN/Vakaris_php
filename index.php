<?php
$answer = "Ivesk skaiciu madafaker";
if (isset($_POST['skaicius'])) {
    $skaicius = $_POST ['skaicius'];
    $answer = 'Answer: ' . kvadratas($skaicius);
}

function kvadratas($skaicius) {
    return $skaicius ** 2;
}
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <form action="index.php" method="POST">
            Pakelti kvadratu madafaker: <input name="skaicius" type="text"/>
            <?php print $answer; ?>
            <input type="submit"/>
        </form>
    </body>
</html>