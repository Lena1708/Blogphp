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

				#********** IF USER IS NOT LOGGED IN, THEN REDIRECTION BACK TO INDEX.PHP ************#

				$isUserLoggedIn = isset($_COOKIE['username']);
				if (!$isUserLoggedIn) {
					header("Location: index.php");
				}

				#********** INITIALIZE VARIABLES *************#
				$blogpostHeadlineArray = NULL;

				$categoryArray    = NULL;
				$selectedCategory = NULL;

				$alignArray = array("01" => "align left", "02" => "align right");
				$align = NULL;

				$addNewCategory = NULL;
				$errorAddNewCategory = NULL;

				$heading = NULL;
				$errorHeading = NULL;

				$writePost = NULL;

				$selectedUser = NULL;

				#************ ?????????????????????????  **********#

				$categoryArray = Category::fetchAllFromDb($pdo);

				#************* URL FORM PROCESSING **********#

				if (isset($_POST['category'])) {
					$selectedCategory = $_POST['category'];
					echo "Your Category Text: $selectedCategory<br/>";
				}

				if (isset($_POST['writePost'])) {
					$writePost = strip_tags($_POST['writePost']);
					echo "Your Blog Text: $writePost<br/>";
				}

				if (isset($_POST['heading'])) {
					$heading = strip_tags($_POST['heading']);
					echo "Your Heading Text: $heading<br/>";
				}

				if (isset($_POST['align'])) {
					$align = $_POST['align'];
					echo "Your Align Text: $align<br/>";
				}

				if (isset($selectedCategory) && isset($heading) && isset($align) && isset($writePost)) {
					Blog::saveToDb($pdo, new Blog($heading, NULL, $align, $writePost, $selectedCategory, $_COOKIE['userId']));
					Blog::saveToDb($pdo, new Blog($heading, NULL, $align, $writePost, $selectedCategory, $_COOKIE['userId']));

					echo "<h1>Saved to database!</h1>";
					header("Location: index.php");
				}

#*****************************************************************************************#

?>

<!doctype html>

<html>

<head>
	<link rel="stylesheet" href="./css/main.css">
	<link rel="stylesheet" href="./css/debug.css">

	<meta charset="utf-8">
	<title>PHP BLOG DASHBOARD</title>
</head>

<body>
	<div class="my-container">


		<div class="logout-btn">
			<form method="POST" action="logout-handler.php">
				<button type="submit">Logout</a>
			</form>
		</div>
		<div class="to-frontend">
			<a href="http://localhost/kurs%201/Blog-Projekt%20Olena%20Stets/index.php">To Frontend</a>
		</div>
		<div class="left-form">
			<p>
			<h1>PHP - PROJEKT BLOG - DASHNBOARD</h1>
			</p>


			<form method="POST" enctype="multipart/form-data">

				<h2>Create a new blog post</h2>


				<div> 
				<?php 
				echo "Active user is $_COOKIE[username] $_COOKIE[userlname]";
				?>
				</div>
				<br>


				<select id="category" class="cat" name="category">
					<?php
					foreach ($categoryArray as $key => $value) {
						if ($selectedCategory == $key) {
							echo "\t\t\t\t\t<option value='$value->cat_id' selected>$value->cat_name</option>\n";
						} else {
							echo "\t\t\t\t\t<option value='$value->cat_id'>$value->cat_name</option>\n";
						}
					}
					?>
				</select>


				<div>
					<span class="error"><?php echo $errorHeading ?></span><br>
					<input type="text" class="cat" name="heading" value="<?php echo $heading ?>" placeholder="Heading">
					</span>
				</div>

				<p>
				<h4>Upload a picture</h4>
				</p>
				<div class="image-container">
					<div class="image-align">
						<select id="align" name="align">
							<?php
							foreach ($alignArray as $key => $value) {
								echo "\t\t\t\t\t<option value='$value'>$value</option>\n";
							}
							?>
						</select>
					</div>
				</div>
				<br>
				<br>
				<div>
					<textarea class="textarea" name="writePost" placeholder="Text..." maxlength="1000"></textarea>
					</h2>
					<br>
					<br>
					<input class="post-it" type="submit" value="POST IT">
				</div>
			</form>
		</div>

		<div class="right-form">

			<form action="category-form.php">
				<span class="error"><?php echo $errorAddNewCategory ?></span><br>
				<p>
				<h2>Add new category</h2>
				</p>
				<input class="add-new-cat-input" type="text" name="addNewCategory" value="<?php echo $addNewCategory ?>" placeholder="Name of the category">
				<br>
				<br>
				<input class="btn-add-new-cat" type="submit" value="ADD A NEW CATEGORY">
				</span>
			</form>
		</div>
	</div>

</body>

</html>