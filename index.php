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

//var_dump($game);

$title = 'GTA';

if ($active_id == 0) {
    $weapon_img = 'https://vignette.wikia.nocookie.net/gta/images/8/80/Dildo_%28SA_-_2_-_HUD%29.png/revision/latest/top-crop/width/220/height/220?cb=20100504064155&path-prefix=pl';
}
elseif ($active_id == 1) {
    $weapon_img ='https://vignette.wikia.nocookie.net/gtawiki/images/c/c4/Micro-Uzi-GTASA-icon.png/revision/latest/top-crop/width/220/height/220?cb=20150609172042';
}
else {
    $weapon_img ='https://vignette.wikia.nocookie.net/gtawiki/images/9/97/SprayCan-GTASA-icon.png/revision/latest/top-crop/width/300/height/300?cb=20100625060747';
}

?>
<html>
<head>
<title>
    <?php print $title ?>;
</title>
<style>
    @font-face {
        font-family: myFirstFont;
        src: url('pricedown.ttf') format("truetype");
    }
    * {
        margin:0;
        padding: 0;
        box-sizing: border-box;
        font-size: 0;
    }
    .hud {
        font-family: myFirstFont;
        width: 400px;
        padding: 20px;
    }
    .ginklai {
        display: grid;
        grid: auto / 220px 1fr;
        img {
            height: 120px;
            width: 120px;
        }
        p {
            font-size: 65px;
            text-align: center;
        }
    }
    .armor {
        height: 20px;
        width: 100%;
        border:1px solid black;
        position: relative;
        background: lightgray;
        &::before {
        content: '';
        display: block;
        height: 100%;
        position: absolute;
        bottom: 0;
        left: 0;
        background: gray;
        }
    }
    .personal_info,
    .health {
        height: 18px;
        width: 100%;
        border: 1px solid black;
        position: relative;
        background: darkred;
        &::before { content: '';
             display: block;
             height: 100%;
             position: absolute;
             bottom: 0;
             left: 0;
             background: red;
         }
        p {
            font-size: 16px;
            color: darkgreen;
            &::before{
            content: '$';
            }

        }

        .stars{
            display: flex;
        img {
            height: 4em;
        }
    }
</style>
</head>
<body>
    <div class="hud">
        <div class="ginklai">
        <img src="<?php print $weapon_img ;?>">
        <div>
            <p><?php print $game['time'];?></p>
            <div class="armor"></div>
        </div>
        </div>
    <div class="personal_info">
        <div class="health"></div>
        <p><?php print $game['player']['cash'];?></p>
    </div>
    <div class="stars">
        <img src="https://i7.pngguru.com/preview/278/652/867/emoji-star-scalable-vector-graphics-clip-art-star-cliparts-thumbnail.jpg">
    </div>
    </div>
</body>
</html>