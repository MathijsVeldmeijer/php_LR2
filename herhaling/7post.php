<?php
session_start();
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $_SESSION['language'] = $_POST['language'];
    header('Location: showinfo.php');
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

<form method="POST" action="infoshow.php">
    Geboortedatum: <input type="date" name="birthDay"><br>
    telefoonnummer: <input type="tel" name="phoneNumber"><br>
    <input type="submit" value="Verstuur">
</form>

<a href="infoshow.php?voornaam=Jan&achternaam=Jansen">Klik hier om je naam door te geven</a>



</body>
</html>