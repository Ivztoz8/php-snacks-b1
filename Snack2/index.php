<?php

$name = (!empty ($_GET['name']) ? $_GET['name'] : '');
$email = (!empty ($_GET['email']) ? $_GET['email'] : '');
$age = (!empty ($_GET['age']) ? (int)$_GET['age'] : '');

$soldierName = false;
$soldierMail = false;
$soldierAge = false;


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>PHP Snack 7</title>
</head>
<body>
    <main>
        <form method="GET" class="contaienr">
            <h3>Validator</h3>
            <img class="img_size mr_btt" src="./img/detective-conan.jpg" alt="logo">
            <div class="disp-fl ">
                <label for="">Name</label>
                <input type="text" name="name" class="mr_lft">
            </div>
            <?php
                if ( strlen($name) < 3 ){
                    echo "<div class='mr_btt' style='color: gray; font-style: italic; font-size: 0.9rem;'> Il nome deve contenere almeno 3 caratteri</div>"; 
                }
                else{
                    $soldierName = true;
                }?>
            <div class="disp-fl">
                <label for="">Email</label>
                <input type="text" name="email" class="mr_lft">
            </div>
            <?php
            if( strpos($email, "@") == 0 || strpos($email, ".") == 0 ){
                echo "<div class='mr_btt' style='color: gray; font-style: italic; font-size: 0.9rem;'> L'email deve contenere sia '@' che '.' </div>";
            }
            else{
                $soldierMail = true;
            }?>
            <div class="disp-fl">
                <label for="">Age</label>
                <input type="text" name="age" class="mr_lft">
            </div>
            <?php
            if ( !is_numeric($age) || $age <= 0 ){
                echo "<div class='mr_btt' style='color: gray; font-style: italic; font-size: 0.9rem;'> Il valore dell'età deve essere un numero maggiore di 0</div>";
            }
            else{
                $soldierAge = true;
            }?>
            <div class="disp-fl mr_top">
                <button type="submit" class="mr_btt" style="background-color: gold;">Invia</button>
            </div>
            <?php
                if ( ($soldierName && $soldierMail && $soldierAge) ){
                    echo "<div style='color: blue; font-weight: bold; font-size: 0.9rem;'> Accesso Riuscito</div>";
                }
                else{
                    echo "<div style='color: red; font-weight: bold; font-size: 0.9rem;'> Accesso Negato</div>";
                }
                ?>
        </form>
    </main>
</body>
</html>