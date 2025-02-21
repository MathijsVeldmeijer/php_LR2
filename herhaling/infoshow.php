<?php
session_start();
unset($_SESSION['language']);
// header('Location: index.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php

$birthDay = [$_POST['birthDay']];
$phoneNumber = $_POST['phoneNumber'];

echo"geboortedatum: $birthDay[0]";
echo"telefoonnummer: $phoneNumber";


$voornaam = $_GET['voornaam'];
$achternaam = $_GET['achternaam'];
echo "Voornaam: " . $voornaam . "<br>";
echo "Achternaam: " . $achternaam . "<br>" . "<br>";

?>


<form method="post" action="">
    <label for="language">Kies je voorkeurstaal:</label>
    <select name="language" id="language">
         <option value="Nederlands">Nederlands</option>
        <option value="Engels">Engels</option>
    </select>
    <button type="submit">Opslaan</button>
</form>



<?php if (isset($_SESSION['language'])){ ?>
        <p>Je voorkeurstaal is: <?php echo "$_SESSION['language']"; ?></p>
        <form method="post" action="">
            <button type="submit" name="unset">Verwijder voorkeurstaal</button>
        </form>
        }
    <?php else{ ?>
        <p>Geen voorkeurstaal ingesteld.</p>
        <a href="index.php">Stel voorkeurstaal in</a>
    <?php }?>


</body>
</html>