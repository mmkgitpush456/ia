<?php 
require_once('page_configs/header.php');
require_once('model/quote_machine.php');
$header = new Header('Inspiration-Active', 'home.css');

?>

<!doctype html>
<html>
	  <?php include('includes/header.php'); ?>
	  <body>

	  	<div id="mainContainer">

	  		<div id="titleBanner"></div>


	  		<?php include("includes/menu.php"); ?>


	  		<div class="homeContainer">

	  			<div class="quoteBox">
	  				<?php 
	  				$quoteMachine = new QuoteMachine(); 


	  				

	  				

	  				?>
	  			</div>

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