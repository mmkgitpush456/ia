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
	  				$quotes = $quoteMachine->getOrganizedQuotes();

	  				for($i = 0; $i < count($quotes); $i++) {

	  				?>
	  					<h1 class="quoteText" id="quoteText_<?php echo $i; ?>"><?php echo $quotes[$i]['quoteText'];?></h1>
	  					<h2 class="quoteAuthor" id="quoteAuthor_<?php echo $i; ?>"><?php echo $quotes[$i]['quoteAuthor']; ?></h2>

	  				<?php
	  				}
	  			
	  				?>
	  			</div>

	  			<div class="homeBox">
	  				BLOGS
	  			</div>

	  			<div class="homeBox">
	  				PHOTO ALBUMS
	  			</div>

	  		</div>
	  		<?php include('includes/footer.php'); ?>
	  	</div>

	  </body>
</html>