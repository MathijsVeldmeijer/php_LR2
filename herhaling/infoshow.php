<?php
if (isset($_POST['unset'])) {
unset($_SESSION['language']);
header('Location: index.php');
exit();
}
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
    <button type="submit">submit</button>
</form>





    <?php if (isset($_SESSION['language'])){ ?>
        <p>Je voorkeurstaal is: <?php echo htmlspecialchars($_SESSION['language']) ?></p>
        <?php }else{ ?>
        <p>Geen voorkeurstaal ingesteld.</p>
        <a href="7post.php">andere pagina</a>
    <?php} endif{ ?>
        <form method="post" action="./7post.php">
            <button type="submit" name="unset">Verwijder voorkeurstaal</button>
        </form>
    <?php } ?>


</body>
</html>