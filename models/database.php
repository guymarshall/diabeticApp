<?php
class Database {
	public $servername;
	public $username;
	public $password;
	public $database;

	public function __construct() {
		$this->servername = "localhost";
		$this->username = "username";
		$this->password = "password";
		$this->database = "database";
	}

	public function create_and_check_connection() {
		echo "test<br>";
		try {
			$connection = new mysqli($servername, $username, $password, $database);
			echo "test<br>";
		}
		catch (Throwable $t) {
			echo $t;
			echo 'in catch<br>';
			echo "an error has occured<br>";
			if ($connection->connect_error) {
				echo "Connection failed: " . $connection->connect_error;
				die();
			}
		}
		finally {
			echo "finally bit<br>";
		}

		echo "Connected successfully<br>";
		echo 'another<br>';
	}
}
?>