<?php
$classe5L = [
    [
        'Nome' => 'Tomas',
        'Cognome' => 'Anderson',
        'Voti' => [8, 6, 10, 9, 4]
    ],
    [
        'Nome' => 'Tom',
        'Cognome' => 'Riddle',
        'Voti' => [4, 7, 7, 8, 10]
    ],
    [
        'Nome' => 'Philip J.',
        'Cognome' => 'Fry',
        'Voti' => [4, 7, 7, 8, 10]
    ],
    [
        'Nome' => 'Steven',
        'Cognome' => 'Spielberg',
        'Voti' => [10, 10, 9, 5, 10]
    ],
    [
        'Nome' => 'Lisa',
        'Cognome' => 'Simpson',
        'Voti' => [9, 10, 9, 10, 9]
    ],
    [
        'Nome' => 'Chun',
        'Cognome' => 'Li',
        'Voti' => [7, 6, 6, 10, 8]
    ],
    [
        'Nome' => 'Isaac',
        'Cognome' => 'Asimov',
        'Voti' => [10, 10, 7, 7, 10]
    ],
    [
        'Nome' => 'Han',
        'Cognome' => 'Solo',
        'Voti' => [8, 10, 8, 5, 5]
    ],
    [
        'Nome' => 'Laureline',
        'Cognome' => 'Future',
        'Voti' => [9, 8, 9, 8, 9]
    ],
    [
        'Nome' => 'Ender',
        'Cognome' => 'Higgins',
        'Voti' => [6, 5, 3, 6, 5]
    ],
    [
        'Nome' => 'Sarah',
        'Cognome' => 'Connor',
        'Voti' => [7, 7, 8, 9, 7]
    ],
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Snack 7</title>
</head>
<body>
    <main>
        <p>
            <?php
            var_dump($classe5L);
            ?>
        </p>
        <hr>
        <p>
            <?php
                for ($i = 0; $i < count($classe5L); $i++){
            ?>        
            <div style="margin-bottom: 1%; font-size: 1.3rem; text-align: center;">
            <?php echo $classe5L[$i]["Nome"] . " " . $classe5L[$i]["Cognome"] . " | " . (array_sum($classe5L[$i]["Voti"]) / 5 ) ; ?> 
            </div>        
            <?php } ?>
        </p>
    </main>
</body>
</html>