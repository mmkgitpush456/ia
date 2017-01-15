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

		public function __construct($dbName) {

			$this ->makeConnection($dbName);

			echo "<br/>";


		}

		/*
		Simple method that makes a connection call to the desired DB.
		Connection attempt dies if unsuccesful.
		*/
		private function makeConnection($dbName){
			$this->conn = mysqli_connect(SERVER_NAME, USERNAME, PASSWORD, $dbName);

			if (!$this->conn) {
				die("Connection failed: " . mysqli_connect_error());
			} 

			/*
			else {
				echo "CONNECTION ACTIVE";
			}
			*/
		}

		/*
		Close the db connection.
		*/
		public function closeConnection(){

			mysqli_close($this->conn);

		}

		public function getConn(){
			return $this->conn;
		}
	}


?>