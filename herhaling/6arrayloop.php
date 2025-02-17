<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php

//6.1

$numbers = [5, 10, 15, 20, 25];

for ($i = 0; $i < count($numbers) ; $i++)
{
    $print = $numbers[$i] * 2;
    echo" $print <br> ";
};


//6.2

$price = [100, 200, 300, 400, 500];
$num = 0;
do{
    $priceIndex = $price[$num];
    $newPrice = $priceIndex + 50;
    echo"Old price: $priceIndex. New price: $newPrice. <br>";
    $num++;
} while ($priceIndex < 500 && $newPrice < 500 );


//6.3

$book = ["titel" => "1984", "auteur" => "George Orwell", "year" => "1949"];
foreach ($book as $key => $infoline) {
    echo "De $key is $infoline <br>";
};
echo"<br>";


//6.4

$grades = [8.5, 7.0, 6.5, 9.0, 4.5];

foreach ($grades as $grade) {
    echo "Het cijfer is $grade <br>";
    if ($grade >= 5.5){
    echo "voldoende <br>";
    } else { echo "onvoldoende <br>"; }
};
echo"<br>";


//6.5

$matrix = [
    [1, 2, 3],
    [4, 5, 6],
    [7, 8, 9]
];
$countLine = 0;

for ($i = 0; $i < count($matrix); $i++){
  $countInnerLine = 0;
    for ($a = 1; $a <= count($matrix[$countLine]); $a++){
        echo $matrix[$countLine][$countInnerLine]. " ";
        $countInnerLine++;
    }
    $countLine++;
    echo"<br>";
}
echo"<br>";

?>

</body>
</html>