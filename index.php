<?php
$panos = [
    [
        'vardas' => 'Monika',
        'Grazi' => true,
        'protinga' => false
    ],
    [
        'vardas' => 'Greta',
        'Grazi' => true,
        'protinga' => true
    ],
    [
        'vardas' => 'Laura',
        'Grazi' => false,
        'protinga' => true
    ],
    [
        'vardas' => 'Viktorija',
        'Grazi' => true,
        'protinga' => true
    ],
    [
        'vardas' => 'Aldona',
        'Grazi' => true,
        'protinga' => true
    ]
];
$tekstas = $panos[rand (0, count($panos) - 1)]['vardas'];


?>
<html>
    <body>

        <p>
            <?php print $tekstas ?>
        </p>
    </body>
</html>

