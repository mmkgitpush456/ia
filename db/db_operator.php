<?php 
require_once('db_connection.php');

/*
if(is_resource($conn) ) {
	echo "OPEN!!";
} else {
	echo "CLOSED!!";
}
*/

	class DbOperator {

		private $conn;

		public function __construct($database_name) {

			$this->conn = mysqli_connect(SERVER_NAME, USERNAME, PASSWORD, $database_name);

				// Check connection
			if (!$this->conn) {
				die("Connection failed: " . mysqli_connect_error());
			}
			echo "Connected successfully";
			mysqli_close($this->conn);
		}
	}

	$dbOperator = new DbOperator(IA);

?>