<?php
$numRand = 0;
$array15Rand = [];

        for ($i = 0; $i < 14; $i++){
            $numRand = rand(1, 20);
            if (in_array($numRand, $array15Rand) == false){
                $array15Rand[$i] = $numRand;
            }
            else{
                $i--;
            }
        };
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Snack 4</title>
</head>
<body>
    <main>
    <h1> 15 Random nums 4 Array</h1>
        <p><?php var_dump($array15Rand);?></p>
    
    </main>
</body>
</html>