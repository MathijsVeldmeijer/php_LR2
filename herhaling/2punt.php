<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
  <?php

    // 2.1

    $age = 18;

    if ($age >= 18 )
    {
      echo"Je bent volwassen <br>";
    } 
    else {
      echo"Je bent niet volwassen <br>";
    }

    //2.2

    $score = rand(0, 100);
    
    if ($score >= 90) {
      echo "Je hebt een A";
    } elseif ($score >= 80) {
      echo "Je hebt een B";
    } elseif ($score >= 70) { 
      echo "Je hebt een C";
    } else {
      echo "Je moet beter je best doen";
    }
    echo"<br>";

    //2.3

  
    $day =   date('l');
    switch ($day) {
      case "maandag":
        echo "Vandaag is het maandag";
       break;
      case "dinsdag":
        echo "Vandaag is het dinsdag";
       break;
      case "woensdag":
        echo "Vandaag is het woensdag";
        break;
      default:
        echo "Vandaag is het niet maandag, dinsdag of woensdag";
    }
    echo"<br>";

    //2.4

    echo ($age >= 18 ) ? "Volwassen <br>" : "Niet volwassen <br>";

    //2.5

    $name = NULL;
    echo $name ?? "Geen naam opgegeven";
    echo"<br>";

    //2.6

    $score2 = rand(0,100);

    if ($score2 >= 90)
    {
      echo"Geweldig";
    } elseif ($score2 >= 75)
    {
      echo"Goed";
    } elseif ($score2 >= 55)
    {
      echo"Voldoende";
    } elseif ($score2 < 55)
    {
      echo"Onvoldoende";
    }
    echo"<br>";

    echo ($score2 >= 55 ) ? "Geslaagd <br>" : "Gezakt<br>";


  ?>

</body>
</html>