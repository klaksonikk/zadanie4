<?php
session_start();

$login = "";

if (isset($_COOKIE['login'])) {
    $login = $_COOKIE['login'];
}

if (isset($_POST['zaloguj'])) {

    $login = $_POST['login'];
    $haslo = $_POST['haslo'];

    if ($login == "admin" && $haslo == "1234") {

        $_SESSION['uzytkownik'] = $login;

        if (isset($_POST['zapamietaj'])) {
            setcookie("login", $login, time() + 7 * 24 * 60 * 60);
        }

        header("Location: panel.php");
        exit();

    } else {
        echo "Błędny login lub hasło!";
    }
}
?>

<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Logowanie</title>
</head>
<body>

<h2>Logowanie</h2>

<form method="POST" action="">

    Login:
    <input type="text" name="login" value="<?php echo $login; ?>">
    <br><br>

    Hasło:
    <input type="password" name="haslo">
    <br><br>

    <input type="checkbox" name="zapamietaj">
    Zapamiętaj mnie
    <br><br>

    <input type="submit" name="zaloguj" value="Zaloguj">

</form>

</body>
</html>
