<?php

//$dir = scandir("."); //get name folders and files
//mkdir("./testFolder"); //create new folder
//rmdir("./testFolder"); //remove
//rename("./testFolder", "newFolder");//may move file to other folder
//unlink("./test.txt"); // remove file
//realpath('.');

if ($_GET["path"]) {
    $dir = $_GET["path"];
} else {
    $dir = __DIR__;
}

$dir = realpath($dir);

echo "$dir<hr />";

if (is_dir($dir)) {
    foreach (scandir($dir) as $item) {
        echo "<a href='/?path=" . realpath($dir . DIRECTORY_SEPARATOR . $item) . "'>$item</a>";
        if (is_file(realpath($dir . DIRECTORY_SEPARATOR . $item))){
            echo "<a href='/FileSystem/fileRename.php/?path=" . realpath($dir . DIRECTORY_SEPARATOR . $item) . "'> _ Редактировать</a>";
            echo "<a href='/FileSystem/fileRemove.php/?path=" . realpath($dir . DIRECTORY_SEPARATOR . $item) . "'> _ Удалить</a>";
        }
        echo "<br />";
    }
} else if (is_file($dir)) {
    foreach (file($dir) as $line)
        echo "<p>" . htmlspecialchars($line) . "</p>";
}
else {
    echo "Error";
}