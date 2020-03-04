<?php


$game = [
    'time' => '12:08',
    'player' => [
        'armor' => 90,
        'health' => 100,
        'wanted_level' => 2,
        'cash' => 3718892,
        'position' => [
            'x' => 100.123123,
            'y' => 57.312313,
            'z' => 5.212134
        ],
        'weapons' => [
            'active_id' => 0,
            'available' => [
                [
                    'name' => 'Dildo',
                    'damage' => 30,
                    'icon' => '....',
                    'type' => 'meelee',
                ],
                [
                    'name' => 'Uzi',
                    'damage' => 70,
                    'icon' => '....',
                    'type' => 'firearm',
                    'ammo' => [
                        'magazine_size' => 150,
                        'in_magazine' => 40,
                        'total' => 900,
                    ]
                ]
            ]
        ],
        'clothes' => [
            'top' => [
                'active_id' => null,
                'available' => [
                    [
                        'name' => 'T-shirt',
                        'model' => '....',
                    ]
                ]
            ],
            'bottom' => [
                'active_id' => null,
                'available' => [
                    [
                        'name' => 'Jeans',
                        'model' => '....',
                    ]
                ]
            ]
        ]
    ]
];
unset($game['player']['weapons']['available'][0]);
$active_id = $game['player']['weapons']['active_id'];
unset($game['player']['weapons']['available']['active_id']);

$new_active_id = array_key_first($game['player']['weapons']['available']);
$game['player']['weapons']['active_id'] = $new_active_id;

$game['player']['weapons']['available'][] = [
    'name' => 'Spray Can',
    'damage' => '20',
    'icon' => '.....',
    'type' => 'poison',
    'ammo' => [
        'magazine_size' => 50,
        'in_magazine' => 40,
        'total' => 900,
    ]
];

var_dump($game);
?>
