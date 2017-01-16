<?php 
require_once('page_configs/header.php');
require_once('model/blog_machine.php');
$header = new Header('Blog', 'blog.css');

$blogMachine = new BlogMachine();
$selectedBlog = $blogMachine->getMostRecentPost();
?>

<!doctype html>
<html>

<?php include('includes/header.php'); ?>

<body>

	<div id="mainContainer">

		<div id="titleBanner"></div>


		<?php include("includes/menu.php"); ?>


		<div class="blogBanner">

			<div class="title"><?php echo $selectedBlog['BLOG_TITLE'];  ?></div>

			<div class="subtitle">By <?php echo $selectedBlog['BLOG_AUTHOR']; ?></div>

		</div>

		<div class="bloggingBody">

			<div class="theBlog">
				 <?php $blogMachine -> organizeAndPrintBlogPost($selectedBlog['BLOG_TEXT'] ); ?> 
			</div>

			<div class="blogArchive">
				ARCHIVES
			</div>


			<div class="clear"></div>


		</div>



		<?php include('includes/footer.php'); ?>

	</div>

</body>

</html>
