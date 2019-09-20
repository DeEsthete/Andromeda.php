<?php

namespace Classes;


class Database
{
    private $pdo;

    public function __construct($table_name)
    {
        $connect = "mysql:host=localhost;dbname=$table_name";
        $username = "root";
        $password = "";
        $this->pdo = new \PDO($connect, $username, $password);
        if ($this->pdo->errorCode() !== null) {
            print_r($this->pdo->errorInfo());
            exit();
        }
    }

    public function  query($var){
        $users = $this->pdo->query($var);
        if ($users instanceof \PDOStatement){
            $rows = [];
            foreach ($users as $user){
                $rows[] = $user;
            }
            return $rows;
        }
        else{
            print_r($this->pdo->errorInfo());
            exit();
        }
    }
}