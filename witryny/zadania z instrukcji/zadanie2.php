<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zadanie 2</title>
</head>
<body>
    <?php
    $x = 3;
    $y = 4;
    $z = 5;
    if ($x ** 2 + $y ** 2 == $z ** 2) 
    {
        echo "Trójkąt $x, $y, $z jest pitagorejski.";
    }
    else 
    {
        echo "Trójkąt $x, $y, $z nie jest pitagorejski.";
    }
    ?>
</body>
</html>