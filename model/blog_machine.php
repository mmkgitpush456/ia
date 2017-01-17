<?php 
require_once('db/db_operator.php');

/*
The Blog Machine class controls the printing of information 
from the BLOGS portion of the database to the blogs.php page.
*/
	class BlogMachine {

		private $dbOperator;										//DB instance
		private $focusedBlog;										//selected blog piece pulled in from the URL

		public function __construct($theSelectedBlog){

			$this ->dbOperator = new dbOperator(IA);
			$this ->focusedBlog = $theSelectedBlog;
		}


		/*
		Helper function that selected the desired blog post based on ID.
		If the user clicks on the blog link from the main menu, the most recently entered
		post is selected and displayed.
		*/
		public function getSelectedBlogPost(){

			$sql = NULL;
			
			if($this->focusedBlog == NULL) {
				$sql = "SELECT BLOG_TITLE, BLOG_AUTHOR, BLOG_DATE_PUBLISHED, BLOG_TEXT FROM BLOGS ORDER BY BLOG_ID DESC LIMIT 1";
			} else {
				$sql = "SELECT BLOG_TITLE, BLOG_AUTHOR, BLOG_DATE_PUBLISHED, BLOG_TEXT FROM BLOGS WHERE BLOG_ID = " . $this->focusedBlog;
			}

			$result = mysqli_query($this->dbOperator->getConn(), $sql);

			if (mysqli_num_rows($result) > 0) {
				return mysqli_fetch_assoc($result);
			} else {
				echo "0 results";
				return null;
			}
		}

		/*
		Helper function that selects all the blog titles and their corresponding
		ID's in order to be printed out in the ARCHIVES section of the blogs
		page.
		*/
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

		/*
		Currently takes the results from the getAllBlogTitles method
		and organizes it into a multidimensional array to be printed
		out on the blogs page
		*/
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

		/*
		Organizer method that takes the text from a selected blog post and
		prints each paragraph out with surrounding <p> tags for better display.
		*/
		public function organizeAndPrintBlogPost($blogPost){
			function val($val) { return "<p>" . $val . "</p>"; }
			echo implode("</n>", array_map('val', explode(PHP_EOL, $blogPost ) ) );
		}


		

	}


?>