<?php 
require_once('db/db_operator.php');


	class BlogMachine {

		private $dbOperator;

		public function __construct(){

			$this ->dbOperator = new dbOperator(IA);


		}



		public function getMostRecentPost(){

			//SELECT fields FROM table ORDER BY id DESC LIMIT 1;
			$sql = "SELECT BLOG_TITLE, BLOG_AUTHOR, BLOG_DATE_PUBLISHED, BLOG_TEXT FROM BLOGS ORDER BY BLOG_ID DESC LIMIT 1";

			$result = mysqli_query($this->dbOperator->getConn(), $sql);

			if (mysqli_num_rows($result) > 0) {
				return mysqli_fetch_assoc($result);
			} else {
				echo "0 results";
				return null;
			}
		}

		public function getAllBlogTitles(){

			$sql = "SELECT BLOG_TITLE, BLOG_ID FROM BLOGS ORDER BY BLOG_ID DESC";
			$result = mysqli_query($this->dbOperator->getConn(), $sql);

			if (mysqli_num_rows($result) > 0) {
				return $result;
			} else {
				echo "0 results";
				return null;
			}

		}

		public function organizeAndPrintBlogPost($blogPost){
			function val($val) { return "<p>" . $val . "</p>"; }
			echo implode("</n>", array_map('val', explode(PHP_EOL, $blogPost ) ) );
		}


		public function getOrganizedSqlResult($result){

			$container = NULL;
			$i = 0;

			while($row = mysqli_fetch_assoc( $result) ) {

				$container[$i]['BLOG_TITLE'] = $row['BLOG_TITLE'];
				$container[$i]['BLOG_ID'] = $row['BLOG_ID'];
				$i++;
			}


			return $container;
		}

	}


?>