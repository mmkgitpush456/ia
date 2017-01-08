<?php 

require_once('page_configs/header.php');
$header = new Header('Blog', 'blog.css');

?>

<!doctype html>
<html>

<?php include('includes/header.php'); ?>

<body>

	<div id="mainContainer">

		<div id="titleBanner"></div>


		<?php include("includes/menu.php"); ?>


		<div class="blogBanner">

			<div class="title">BLOG TITLE</div>

			<div class="subtitle">BLOG SUBTITLE</div>

		</div>

		<div class="bloggingBody">

			<div class="theBlog">
				BLOG STUFF
			</div>

			<div class="blogArchive">
				ARCHIVES
			</div>

		</div>

		<div class="footer">

			FOOTER
		</div>

	</div>

</body>

</html>
