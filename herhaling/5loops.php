<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php

//5.1

for ($i = 0; $i <= 20; $i = $i + 2){
    echo"$i <br>";
}
echo"<br>";


//5.2

for ($i = 10; $i >= 0; $i--){
    echo"$i <br>";
}
echo"<br>";
echo"<br>";
echo"<br>";


//5.3

$num = rand(0,10);

do {
    echo"$num <br>";
    $num = rand(0,10);
}   while ( $num !== 5 );
echo"$num <br>";
echo"<br>";


//5.4

$countries = [
    "country1" => ["name" => "Nederland", "city" => "Amsterdam"], 
    "country2" => ["name" => "België", "city" => "Brussel"], 
    "country3" => ["name" => "Duitsland", "city" => "Berlijn"]
];

foreach ($countries as $country) {
    echo "De hoofdstad van $country[name] is $country[city] <br>";
};



?>

</body>
</html>