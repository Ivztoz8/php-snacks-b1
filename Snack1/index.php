<?php 

$matches = [
    [
        'team1' => 'Acqua S.Bernardo Cantù',
        'team2' => 'Oriora Pistoia',
        'point_team_1' => 70,
        'point_team_2' => 45
    ],
    [
        'team1' => 'Fortitudo Pompea Bologna',
        'team2' => 'Dolomiti Energia Trentino',
        'point_team_1' => 82,
        'point_team_2' => 83
    ],
    [
        'team1' => 'Pallacanestro Trieste',
        'team2' => 'Virtus Roma',
        'point_team_1' => 72,
        'point_team_2' => 33
    ],
    [
        'team1' => 'Openjobmetis Varese',
        'team2' => 'Germani Basket Brescia',
        'point_team_1' => 101,
        'point_team_2' => 99
    ],

];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Snacks 1</title>
</head>
<body>
    <main>
        <p> 
            <div><strong>Old Type:</strong></div>
            <?php for($i = 0; $i < count($matches); $i++){
                echo $matches[$i]['team1'] . " - ". $matches[$i]['team2'] . " | " . $matches[$i]['point_team_1'] . " - ". $matches[$i]['point_team_2'] . "<br>";
            } ?>
        
            <hr>
            <div><strong>New Type:</strong></div> 
            <?php for($i = 0; $i < count($matches); $i++){ ?>
                <span style="color: blue;"> <?php echo $matches[$i]['team1'] . ": ". $matches[$i]['point_team_1']; ?></span>
                <span> vs </span>
                <span style="color: red;"> <?php echo $matches[$i]['team2'] . ": ". $matches[$i]['point_team_2'] . "<br>";?></span>
                <?php } ?>
        </p>
    </main>
</body>
</html>