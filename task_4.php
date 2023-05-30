<?php
/*задание находится в разработке*/
$textStorage = [
    0 => [
        'title' => [],
        'text'=>[]
    ],
    1 => ['title' => [],
        'text'=>[]
    ]
];
var_dump($textStorage);
$c = 'Введите название';
echo $c;
for ($i=0; $i < 3; $i++) {
    $line = readline ("Введите название");
    readline_add_history($line);
}

var_dump($line);
