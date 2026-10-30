<?php
session_start();

if (!isset($_SESSION['uzytkownik'])) {
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Panel użytkownika</title>
</head>
<body>

<h2>Witaj, admin!</h2>

<a href="logout.php">Wyloguj</a>

</body>
</html>