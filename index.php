<?php 

require_once('page_configs/header.php');
$header = new Header('Home Page', 'home.css');

?>

<!doctype html>
<html>
	  <?php include('includes/header.php'); ?>
	  <body>

	  	<div id="mainContainer">

	  		<div id="titleBanner"></div>


	  		<?php include("includes/menu.php"); ?>


	  		<div class="homeContainer">

	  			<div class="homeBox">
	  				BLOGS
	  			</div>

	  			<div class="homeBox">
	  				PHOTOS
	  			</div>

	  		</div>
	  		<?php include('includes/footer.php'); ?>
	  	</div>

	  </body>
</html>