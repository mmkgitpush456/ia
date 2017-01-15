<?php 
require_once('db/db_operator.php');

	class QuoteMachine {

		private $dbOperator;

		public function __construct() {

			$this ->dbOperator = new dbOperator(IA);

		}



		/*
		Helper method that gets a number of quotes
		in random order from the database.
		*/
		private function getRandomQuotesQuery($numQuotes){

			$sql = "SELECT QUOTE_TEXT, QUOTE_AUTHOR from QUOTES order by rand() limit $numQuotes";
			$result = mysqli_query($this->dbOperator->getConn(), $sql);

			if (mysqli_num_rows($result) > 0) {
				return $result;
			} else {
				echo "0 results";
				return null;
			}
		}

		/*
		
		*/
		public function getOrganizedQuotes(){

			$quotes = $this->getRandomQuotesQuery(10);
			$i = 0;
			$quotesHolder = NULL;

			if($quotes != NULL) {

				$quotesHolder = array();
			} else {
				return NULL;
			}

			while($row = mysqli_fetch_assoc($quotes)) {

				$quote = array( 'quoteText' => $row['QUOTE_TEXT'], 'quoteAuthor' => $row['QUOTE_AUTHOR'] );
				$quotesHolder[$i] = $quote;
				$i++;
			}
			return $quotesHolder;
		}

	}
	


?>