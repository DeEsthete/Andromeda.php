<?php

use Classes\Database;

session_start();
include_once "autoload.php";

//if ($data["username"] == null) {
//    echo "No username passed";
//    if ($data["password"] == null){
//        echo "No password passed";
//        exit();
//    }
//    exit();
//}

$data = $_GET;
$db = new Database("andromedadb");
$user = $db->query("SELECT * FROM users WHERE username = '" . $data["username"] . "'");
$user = $user[0];
if ($user != null) {
    if ($user["password" == $data["password"]]){
        $_SESSION["user"] = $user["id"];
        header("Location: /");
    }
    else{
        echo "Data is uncorrected";
        exit();
    }
}
else {
    echo "Data is uncorrected";
    exit();
}