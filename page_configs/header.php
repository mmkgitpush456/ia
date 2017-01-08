<?php 


	public class Header {

		private $title;
		private $styleSheet;

		public function __construct($title, $styleSheet) {

			$this->title = $title;
			$this->styleSheet = $styleSheet;
		}

		public function getTitle(){

			return $this->title;

		}

		public function getStyleSheet($styleSheet){

			return $this->styleSheet;
		}

	}

?>