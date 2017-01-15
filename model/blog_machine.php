<?php 
require_once('db/db_operator.php');


	class BlogMachine {

		private $dbOperator;

		public function __construct(){

			$this ->dbOperator = new dbOperator(IA);

			$blogPost = $this->getMostRecentPost();
			$row = mysqli_fetch_assoc($blogPost);
			echo $row['BLOG_TITLE'];

		}
	

		/*
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
		*/

		public function getMostRecentPost(){

			//SELECT fields FROM table ORDER BY id DESC LIMIT 1;
			$sql = "SELECT BLOG_TITLE, BLOG_AUTHOR, BLOG_DATE_PUBLISHED, BLOG_TEXT FROM BLOGS ORDER BY BLOG_ID DESC LIMIT 1";

			$result = mysqli_query($this->dbOperator->getConn(), $sql);

			if (mysqli_num_rows($result) > 0) {
				return $result;
			} else {
				echo "0 results";
				return null;
			}

		}



	}


?>