<?php
$panos = [
    ['vardas' => 'Monika',
        'grazi' => true,
        'protinga' => false,
    ],
    ['vardas' => 'Greta',
        'grazi' => true,
        'protinga' => true,
    ],
    ['vardas' => 'Kamile',
        'grazi' => false,
        'protinga' => true,
    ],
    ['vardas' => 'Ilona',
        'grazi' => true,
        'protinga' => true,
    ],
    ['vardas' => 'Toma',
        'grazi' => true,
        'protinga' => false,
    ]
];

$grazios_panos = [];
foreach ($panos as $pana) {
    if ($pana['grazi'] && $pana['protinga']) {
        $grazios_panos[] = $pana['vardas'];
    }
}
?>
<html>
    <body>
        <?php foreach ($grazios_panos as $vardas): ?>
            <h1>
                Grazi ir protinga: <?php print $vardas; ?>
            </h1>
        <?php endforeach; ?>
    </body>
</html>