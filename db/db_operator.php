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
			} else {
				echo "CONNECTION SUCCESSFUL";
			}
		}

		/*
		Close the db connection.
		*/
		public function closeConnection(){

			mysqli_close($this->conn);

		}

		/*
		Helper method that gets a number of quotes
		from the database.
		*/
		public function getListOfRandomQuotes($numQuotes){

			$sql = "SELECT QUOTE_ID, QUOTE_TEXT, QUOTE_AUTHOR from QUOTES order by rand() limit $numQuotes";
			$result = mysqli_query($this->conn, $sql);

			if (mysqli_num_rows($result) > 0) {
				return $result;
			} else {
				echo "0 results";
				return null;
			}
		}

		public function getConn(){
			return $this->conn;
		}
	}


?>