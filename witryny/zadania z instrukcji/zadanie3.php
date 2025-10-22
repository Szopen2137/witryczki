
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zadanie 3</title>
</head>
<body>
    <?php
    $liczby = [];
    $suma = 0;

    for ($i = 0; $i < 10; $i++) {
        $wylosowana = rand(1, 20);
        $liczby[] = $wylosowana;
        $suma += $wylosowana;
    }

    $srednia = $suma / 10;

    echo "Wylosowane liczby: " . implode(", ", $liczby) . "<br>";
    echo "Średnia arytmetyczna: " . round($srednia, 2);
    ?>
</body>
</html>