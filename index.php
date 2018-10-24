<?php
if ($_POST['skaicius']) {
    $skaicius = $_POST['skaicius'];
    $atsakymas = $skaicius ** 2;
}
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <form action="index.php" method="POST">
            Pakelti kvadratu: <input name="skaicius" type="text"/>
            <?php print$atsakymas ?>
            <input type="submit"/>
        </form>
    </body>
</html>