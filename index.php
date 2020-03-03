<?php
$title = 'Bokalai';

$money =rand(1, 15);
$bokal_cost = 3;

?>

<html>
<head>
    <title><?php print $title ?></title>
</head>
<style>
    .bg-img {
        width: 150px;
        height: 150px;
        background-size: cover;
    }
</style>
<body>
    <div class="bg-img">
        <?php for (; $money > $bokal_cost; $money -= $bokal_cost):?>
        <img src="https://dovanusalis.lt/image/cache/catalog/products/110/alaus-bokalas-stipruoliui-1-800x800.jpg" width="132px" alt="alus"/>
        <?php endfor ;?>
    </div>
</body>
</html>
