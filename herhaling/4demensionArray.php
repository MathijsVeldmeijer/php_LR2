<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php

    // 4.1

    $products = [
        ["appel", 1.29, 44],
        ["peer", 1.59, 32],
        ["banaan", 0.49, 96],
        ["telefoon", 129.99, 11],
    ];
    echo $products[1][0], $products[1][1], "<br>";

    $products[3][2] = 120;

    $products[] = ["tablet", 299.99, 50];
    var_dump($products);


    //4.2

    $books = [
        $book1 = ["titel" => "Harry Potter", "auteur" => "JK Rowling", "paginanummer" => 147],
        $book2 = ["titel" => "House of Leaves", "auteur" => "Jake Jakson", "paginanummer" => 223],
        $book3 = ["titel" => "The greatest spy", "auteur" => "William Spirits", "paginanummer" => 125]
    ];
    echo $book2["auteur"];
    $book1["paginanummer"] = 350;
    echo $book1["paginanummer"];

    $books[] = [ $book4 = ["titel" => "De Ontdekking van de Hemel", "auteur" => "Harry Mulisch", "paginanummer" => 900]];
    var_dump($books);


    //4.3

    



    ?>

</body>
</html>