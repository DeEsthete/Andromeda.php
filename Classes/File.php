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
}