<?php

#***************************************************************************************#

				#***********************************#
				#********** CONFIGURATION **********#
				#***********************************#

				require_once("include/config.inc.php");
				require_once("include/db.inc.php");
				require_once("include/form.inc.php");
				require_once("Class/Category.php");
				require_once("Class/Blog.php");

				#********** ESTABLISH DB CONNECTION **********#	

				$pdo = dbConnect("blog");

				#**********   ???????????????????     ***************#
				$isUserLoggedIn = isset($_COOKIE['username']);

				#********** INITIALIZE VARIABLES *************#
				$blogpostHeadlineArray = NULL;


				#************  ??????????????????     ******************#

				if (isset($_GET['category'])) {
					$categoryFromUrl = $_GET['category'];
					$blogpostHeadlineArray = Blog::fetchAllFromDbByCategory($pdo, $categoryFromUrl);
				} else {
					$blogpostHeadlineArray = Blog::fetchAllFromDb($pdo);
				}

				$allCategoryArray = Category::fetchAllFromDb($pdo);

#*****************************************************************************************#

?>

<!doctype html>

<html>

<head>
	<link rel="stylesheet" href="css/main.css">
	<link rel="stylesheet" href="css/debug.css">

	<meta charset="utf-8">
	<title>Blog</title>
</head>

<body>
<div class="main-container">


	<?php if(!$isUserLoggedIn) :?>
		<div class="login-menu">
			<form method="POST" action="login-handler.php">
				<div class="container">
					<!-- <input type="hidden" name="loginSent"/>-->
					<input type="text" name="login" placeholder="Enter Email"/>
					<input type="text" name="password" placeholder="Enter Password"/>
					<input type="submit" value="Login"/>
				</div>
			</form>
		</div>
	<?php else: ?>
		
		<div class="logout-btn">
			<form method="POST" action="logout-handler.php">
				<button type="submit">Logout</a>
			</form>
		</div>
	<?php endif; ?>
	<div class="to-dashboard">
			<a href="http://localhost/kurs%201/Blog-Projekt%20Olena%20Stets/dashboard.php">To Dashboard</a>
		</div>
	<div class="website-header">
		<h1>PHP-Projekt Blog</h1>
	</div>


	<div class="posts">
		<?php foreach ($blogpostHeadlineArray as $key => $value) : ?>
			<div class="posts-category-style"><?php echo $value->cat_name; ?></div>
			<div class="posts-headline-style"><?php echo $value->blog_headline; ?></div>
			<div class="user-name"><?php echo $value->usr_firstname . " " . $value->usr_lastname; ?></div>
			<div class="posts-date-style"><?php echo date(DATE_RFC822, strtotime($value->blog_date)); ?></div>
			<div class="posts-style"><?php echo $value->blog_content; ?></div><br>
		<?php endforeach ?>
		<?php if(count($blogpostHeadlineArray) < 1) : ?>
			<h1>No blog posts for this category</h1>
		<?php else: ?>
			<div></div>
		<?php endif; ?>
	</div>


	<div class="categories">
		<?php foreach ($allCategoryArray as $key => $value) : ?>
			<div class="all-category-style"><a href="?category=<?php echo $value->cat_id ?>"><?php echo $value->cat_name ?></a></div>
		<?php endforeach ?>
	</div>

	</div>
</body>

</html>