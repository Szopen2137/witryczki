<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zadanie 2</title>
</head>
<body>
    <?php
        $a = 15;
        $b = 4;

        if ($b != 0) {
            $wynik = $a / $b;
            echo "Wynik dzielenia $a przez $b to: $wynik";
        } else {
            echo "Nie można dzielić przez zero.";
        }
</body>
</html>