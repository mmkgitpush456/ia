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

		public function organizeAndPrintBlogPost($blogPost){
			function val($val) { return "<p>" . $val . "</p>"; }
			echo implode("</n>", array_map('val', explode(PHP_EOL, $blogPost ) ) );
		}


	}


?>