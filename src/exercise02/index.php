<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercise 02</title>
</head>
<body>
    <h1>Exercise 02</h1>
    <!-- 1 -->
    <?php
    $name = 'Eyad';
    $age = 21;
    $color = true;
    $size1 = 5.6;
    $size2 = 4.6;
    // 2
    echo $name ;
    echo $age;
    echo $color;
    echo $size1;
    echo $size2 . "<br>"; 
    echo "------------------------------------------------------------------------------------------" . "<br>";
    // 3
    echo gettype($name) . "////";
    echo gettype($age) . "////";
    echo gettype($color) . "////";
    echo gettype($size1) . "////";
    echo gettype($size2) . "////";
    echo "<br>", "------------------------------------------------------------------------------------------" . "<br>";

    // 4
    define("PI", "3.14159");
    echo PI;
    // or
    const PII = "3.14159";
    echo "<br>", PII;
    echo "<br>", "------------------------------------------------------------------------------------------" . "<br>";
    // 5
    $sum = $size1 * $size2;
    echo "Skärmens yta är: . $size1 * $size2 . = $sum " ;
    echo "<br>", "------------------------------------------------------------------------------------------" . "<br>";
    // 6
    $omk = ($size1 * 2) + ($size2 * 2);
    echo "Omkretsen är: $omk " ;
    echo "<br>", "------------------------------------------------------------------------------------------" . "<br>";
    // 7
    $last_name = 'Hussen';
    $full_name = $name . ' ' . $last_name;
    echo $full_name;
    echo "<br>", "------------------------------------------------------------------------------------------" . "<br>";
    // 8
// Skapa konstant för momssats
define("MOMSSATS", 0.25);  // 25% moms

// Produktpris utan moms
$prisUtanMoms = 823.50;

// Beräkna moms-beloppet
$momsBelopp = $prisUtanMoms * MOMSSATS;

// Beräkna totalpriset
$totalPris = $prisUtanMoms + $momsBelopp;

// Avrunda till två decimaler
$momsBelopp = round($momsBelopp, 2);
$totalPris = round($totalPris, 2);
echo $totalPris;

// Skriv ut resultatet i en tabell
echo "<table border='1' style='border-collapse: collapse;'>";
echo "<tr><th>Produkt</th><th>Pris utan moms</th><th>Moms (25%)</th><th>Totalpris</th></tr>";
echo "<tr><td>Adventsstjärna</td><td>" . number_format($prisUtanMoms, 2, ',', ' ') . " kr</td><td>" . number_format($momsBelopp, 2, ',', ' ') . " kr</td><td>" . number_format($totalPris, 2, ',', ' ') . " kr</td></tr>";
echo "</table>";

echo "<br>", "------------------------------------------------------------------------------------------" . "<br>";
echo "<br>", "------------------------------------------------------------------------------------------" . "<br>";
echo "<br>", "------------------------------------------------------------------------------------------" . "<br>";
echo "<br>", "------------------------------------------------------------------------------------------" . "<br>";
echo "<br>", "------------------------------------------------------------------------------------------" . "<br>";
// del-2
// 1
$lista = [1,2,3,4,5,6,7,8,9,10];
print_r($lista);
echo "<br>", "--------------------------------------------------------------------------------------------------------------------------------------------------------------" . "<br>";

// 2
$change = $lista[3];
$lista[3] = $lista[7];
$lista[7] = $change;
print_r($lista);
echo "<br>", "--------------------------------------------------------------------------------------------------------------------------------------------------------------" . "<br>";

// 3
unset($lista[4], $lista[5]);
print_r($lista);
echo "<br>", "--------------------------------------------------------------------------------------------------------------------------------------------------------------" . "<br>";

// 4
echo('Det är ' . count($lista) . ' värden som finns kvar i listan.');
echo "<br>", "--------------------------------------------------------------------------------------------------------------------------------------------------------------" . "<br>";

// 5
$first = array_shift($lista);
$last = array_pop($lista);

array_unshift($lista, $last); 
array_push($lista, $first);

print_r($lista);

?>

</body>
</html>