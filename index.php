<?php
session_start();
include "autoload.php";

//$db = new Classes\Database("AndromedaDb");
//print_r($db->query("SELECT * FROM users"));

//$u = new \Classes\User();
//var_dump($u->signIn("admin", ""));
?>
<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<?php

if (User::isLogin())

?>

</body>
</html>

