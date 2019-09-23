<?php
session_start();

$data = $_GET;
$handle = fopen("./" . $data["filename"] . ".txt", $data["fileChoice"]);
if ($data["fileChoice"] == "w" || $data["fileChoice"] == "a")
{
    fwrite($handle, $data["textarea"]);
}
$_SESSION["filename"] = $data["filename"];
header("Location: /fileRead.php");
fclose($handle);