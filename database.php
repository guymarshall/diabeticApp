<?php
	class Database {
		public $servername;
		public $username;
		public $password;

		public function __construct() {
			$this->servername = "localhost";
			$this->username = "username";
			$this->password = "password";
		}

		public function create_connection() {
			$connection = new mysqli($servername, $username, $password);
		}

		public function check_connection() {
			if ($connection->connect_error) {
					die("Connection failed: " . $connection->connect_error);
			}
			echo "Connected successfully";
		}
	}
?>