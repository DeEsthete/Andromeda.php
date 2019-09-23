<?php
session_start();

$handle = fopen("./" . $_SESSION["filename"] . ".txt", "r");

while($line = fgets($handle, 4096)){
    echo $line . "</br>";
}