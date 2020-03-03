<?php
$x =15;
$y =0;
$summary = $x + $y;
$difference = $x - $y;
$multiple = $x * $y;

if ($y != 0) {
    $portion = $x / $y;
} 
else {
    $portion = "nelze dělit nulou";}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <p>a= <?=$x ?></p>
   <p>b = <?=$y ?></p>
   <p>součet : <?=$x?> + <?=$y?> = <?=$summary?></p>
   <p>rozdíl : <?=$x?> - <?=$y?> = <?=$difference?></p>
   <p>součin : <?=$x?> X <?=$y?> = <?=$multiple?></p>
   <p>podíl : <?=$x?> : <?=$y?> = <?=$portion?></p>
</body>
</html>