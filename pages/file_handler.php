<?php

class FileManager
{
	protected $dir;

	public function __construct($dir)
	{
		$this->dir = $dir;
	}

	public function create($filename, $content)
	{
		if (!is_dir($this->dir))
		{
			mkdir($this->dir, 0777, true);
		}

		$file = $this->dir . '/' . $filename;

		file_put_contents($file, $content);
	}

	public function read($filename)
	{
		$file = $this->dir . '/' . $filename;

		if (file_exists($file))
		{
			return file_get_contents($file);
		}
		return false;
	}

	public function update($filename, $content)
	{
		$this->create($filename, $content);
	}

	public function delete($filename)
	{
		$file = $this->dir . '/' . $filename;
		if (file_exists($file))
		{
			unlink($file);
		}
	}
}