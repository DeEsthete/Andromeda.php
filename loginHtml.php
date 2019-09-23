<?php
session_start();
include_once "autoload.php";

use classes\User;

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>MyPage</title>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
            integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
            crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
            integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
            crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
            integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
            crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://bootswatch.com/4/cosmo/bootstrap.css">
    <link rel="stylesheet" href="/master.css">
</head>
<body>
<?php
if(User::isLogin()) :
    ?>
    Вы вошли как <?= User::get()["username"] ?></br>
    <a href="/logout.php">Выйти</a>
<?php else:  ?>
<div class="authorization">
    <form action="login.php" method="get">
        <div class="">
            <input class="inp form-control" type="text" placeholder="username" name="username" required>
        </div>
        <div class="">
            <input class="inp form-control" type="password" placeholder="password" name="password" required>
        </div>
        <button class="btn btn-dark" type="submit">Enter</button>
    </form>
    <?php endif; ?>
</div>
</body>
</html>