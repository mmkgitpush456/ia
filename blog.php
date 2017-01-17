<?php 
require_once('page_configs/header.php');
require_once('model/blog_machine.php');
$header = new Header('Blog', 'blog.css');

$blogMachine = new BlogMachine($_GET['blog_id']);

$titles = $blogMachine->getOrganizedSqlResult($blogMachine->getAllBlogTitles() );
$selectedBlog = $blogMachine->getSelectedBlogPost();

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

				<?php  for($i = 0; $i < count($titles); $i++) { 

					//'<a href="pass.php?link=' . $a . '>Link 1</a>';
					?>
					<h3><a href="blog.php?blog_id=<?php echo $titles[$i]['BLOG_ID'];?>"><?php echo $titles[$i]['BLOG_TITLE']; ?></a> </h3>

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
