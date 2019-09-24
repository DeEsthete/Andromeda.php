<?php
$path = $_GET["path"];
$name = $_GET["name"];
if ($name === null){
    echo "<form method='get' action='fileRename.php'>
        <input name='path' hidden value='$path'>
        <input name='name'>
        <button type='submit'>Send</button>
    </form>";
}
else{
    $exp = explode("\\", $path);
    //var_dump($exp);
    $newPath = "";
    for ($i = 0; $i < count($exp)-2; $i++){
        $newPath .= $exp[$i];
        $newPath .= "\\";
    }
    $newPath .= $name;
    $newPath = str_replace($exp[count($exp)-1], $name, $path);
    rename($path, $newPath);
    header("Location: /FileSystem/fileSystem.php/?path=../$path");
}