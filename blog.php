<?php 
require_once('page_configs/header.php');
require_once('model/blog_machine.php');
$header = new Header('Blog', 'blog.css');

$blogMachine = new BlogMachine();

$titles = $blogMachine->getOrganizedSqlResult($blogMachine->getAllBlogTitles() );
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
				<h2>ARCHIVES</h2>

				<?php  for($i = 0; $i < count($titles); $i++) { ?>

					<h3><?php echo $titles[$i]['BLOG_TITLE']; ?></h3>

				<?php 
					}
				 ?>

			</div>


			<div class="clear"></div>


		</div>



		<?php include('includes/footer.php'); ?>

	</div>

</body>

</html>
