<?php 
require_once('db/db_operator.php');

	class QuoteMachine {

		private $dbOperator;

		public function __construct() {

			$this ->dbOperator = new dbOperator(IA);

		}



		/*
		Helper method that gets a number of quotes
		from the database.
		*/
		public function getListOfRandomQuotes($numQuotes){

			$sql = "SELECT QUOTE_TEXT, QUOTE_AUTHOR from QUOTES order by rand() limit $numQuotes";
			$result = mysqli_query($this->dbOperator->getConn(), $sql);

			if (mysqli_num_rows($result) > 0) {
				return $result;
			} else {
				echo "0 results";
				return null;
			}
		}

		public function getOrganizedQuotes(){

			$quotes = $this->getListOfRandomQuotes(10);
			$i = 0;
			$quotesHolder = NULL;

			if($quotes != NULL) {

				$quotesHolder = array();
			} else {
				return NULL;
			}

			while($row = mysqli_fetch_assoc($quotes)) {

				$quote = array( 'quoteText' . $i => $row['QUOTE_TEXT'], 'quoteAuthor' . $i => $row['QUOTE_AUTHOR'] );
				$quotesHolder[$i] = $quote;
				$i++;
			}
			return $quotesHolder;
		}

	}
	


?>