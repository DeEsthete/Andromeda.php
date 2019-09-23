<?php
session_start();
include_once "autoload.php";

use Classes\User;
User::signOut();
header("Location: /");