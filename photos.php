<?php 

require_once('page_configs/header.php');
$header = new Header('Photos', 'photos.css');

?>

<!doctype html>
<html>

<?php include('includes/header.php'); ?>

<body>

	<div id="mainContainer">

		<div id="titleBanner"></div>

		<?php include("includes/menu.php"); ?>

		<div class="photoBanner">

			<div class="title">PHOTOS TITLE</div>

			<div class="subtitle">PHOTOS SUBTITLE</div>

		</div>

		<div class="photosBody">

			<div class="thePhotos">

				<h1>PHOTO THUMBNAILS</h1>

				<div>


					<?php 

					for($i = 0; $i < 5; $i++) {

						echo " <img class=\"imgThumb\" src=\"photos/overlook.jpg\"> ";
					}

					?>

				<!--
					<img class="imgThumb" src="photos/overlook.jpg">

					<img class="imgThumb" src="../overlook.jpg">

					<img class="imgThumb" src="../overlook.jpg">

					<img class="imgThumb" src="../overlook.jpg">

					<img class="imgThumb" src="../overlook.jpg">
				-->





				</div>


				<div class="clear"></div>

			</div>

			<div class="photosArchive">

				ARCHIVES

			</div>

			<div class="clear"></div>


		</div>

		<?php include('includes/footer.php'); ?>

	</div>

</body>

</html>
