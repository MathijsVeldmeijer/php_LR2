<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
  <?php

    // 3.1

    $cities = ["Amsterdam", "Rotterdam", "Utrecht", "Den Haag"];
    echo $cities[0];
    echo $cities[3];
    $cities[] = "Spijkernisse";
    echo $cities[4]. "<br>";


    // 3.2

    $numbers = [5, 10, 15, 20];
    $numbers[1] = 12;
    var_dump($numbers);
    echo"<br>";

    // 3.3

    $student = [
        "name" => "Jan",
        "age" => "20",
        "grade" => "A"
    ];

    echo $student["name"];
    echo $student["grade"];
    echo "<br>";


    //3.4

    $product = ["name" => "Laptop", "price" => 899.99, "inStock" => true ];
    $product["Brand"] = "HP";
    $product["price"] = 799.99;
    var_dump($product);


    //3.5

    


  ?>

</body>
</html>