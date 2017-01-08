<?php 

require_once('page_configs/header.php');
$header = new Header('Contact', 'contact.css');

?>

<!doctype html>
<html>

<?php include('includes/header.php'); ?>

<body>

	<div id="mainContainer">

		<div id="titleBanner"></div>

		<?php include("includes/menu.php"); ?>

		<div class="contactBanner">

			<div class="title">CONTACT</div>

		</div>

		<div class="contactBody">

			<form action="POST">

				<h2>NAME</h2>

				<h2>EMAIL</h2>

				<h2>SUBJECT</h2>

				<h2>MESSAGE</h2>

			</form>

		</div>

		<?php include('includes/footer.php'); ?>

	</div>

</body>

</html>
