<?php

namespace Classes;


class File
{
    private $filename;

    public function __construct($filename = null)
    {
        $this->filename = $filename;
    }

    public function getFilename()
    {
        return $this->filename;
    }

    public function setFilename($filename)
    {
        $this->filename = $filename;
    }

    public function readFile()
    {
        file_get_contents($this->filename);
    }

    public function rewriteFile($str)
    {
        file_put_contents($this->filename, $str, 0);
    }

    public function appendFile($str)
    {
        file_put_contents($this->filename, $str, FILE_APPEND);
    }

//    public function search($line, $symbol){
//        $handle = fopen($this->filename, "r");
//        for ($i = 0; $i < $line; $i++){
//            $line = fgets($handle, 4096);
//        }
//        $line = (array)$line;
//        return array_search($symbol, $line);
//    }
}