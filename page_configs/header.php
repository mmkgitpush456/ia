<?php 


	
	class Header {

		private $mTitle;
		private $mStylesheet;

		public function __construct($title, $styleSheet) {

			$this->mTitle = $title;
			$this->mStylesheet = $styleSheet;
		}

		public function getTitle(){

			return $this->mTitle;

		}

		public function getStylesheet(){

			return $this->mStylesheet;
		}
		

	}
	

?>