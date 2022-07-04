<?php

class File
{
    protected $filename;
    protected $handle;

    public function __construct($filename)
    {
        $this->filename = $filename;
    }

    public function openFile()
    {
        $this->handle = fopen($this->filename, 'a');
    }

    public function closeFile()
    {
        fclose($this->handle);
    }

    public function appendContent($content)
    {
        fwrite($this->handle, $content);
    }
}