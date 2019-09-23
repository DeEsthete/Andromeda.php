<?php

namespace Classes;


class User
{
    static function isLogin()
    {
        return isset($_SESSION["user"]);
    }

    static function signIn($userName, $password)
    {
        $db = new Database("AndromedaDb");
        $user = $db->query("SELECT * FROM users WHERE users.username = '$userName'")[0];
        if ($password === $user["password"]){
            $_SESSION["user"] = $user["id"];
        }
        return $user;
    }

    static function signOut(){
        unset($_SESSION["user"]);
    }

    static function get(){
        $db = new Database("AndromedaDb");
        return $db->query("SELECT * FROM users WHERE users.id = " . $_SESSION['user'])[0];
    }
}