<!--
<?php    
                
                $categoryArray = array("01"=>"Lifestyle", "02"=>"food", "03"=>"mobile", "04"=>"living");
				$category = NULL;
				
				$alignArray = array("01"=>"align left", "02"=>"align right");
				$align = NULL;

				$addNewCategory = NULL;
				$errorAddNewCategory = NULL;

				$heading = NULL;
				$errorHeading = NULL;
?>
-->
<!--



		**********************  CATEGORY PHP ********************* 

		<div>
			<?php
			if (isset($_POST['category'])) {
				$category = $_POST['category'];
				foreach ($category as $item) echo "$item<br>";
			}
			?>
		</div>


 		**********************  CATEGORY HTML *********************  
		<div>
			<h2>Neuen Blog Eintrag verfassen</h2>
			<select name="category[]" size="1">
				<option value="lifestyle">Lifestyle</option>
				<option value="food">Food</option>
				<option value="mobile">Mobile</option>
				<option value="living">Living</option>
			</select>
		</div>
		


		*********************  CATEGORY HTML **************************
			<select id="category" name="category">
			<?php
					foreach( $categoryArray AS $key=>$value ) {
						if( $category == $key ) {
							echo "\t\t\t\t\t<option value='$key' selected>$value</option>\n";
						} else {
							echo "\t\t\t\t\t<option value='$key'>$value</option>\n";
						}
					}
				?>
			</select>
		







		 **********************  WRITE A BLOG POST PHP ************
		<div>
			<?php
			if (isset($_POST['writePost'])) {
				$writePost = strip_tags($_POST['writePost']);
				echo "Your Blog Text: $writePost";
			}
			?>
		</div>


		 *********************  WRITE A BLOG POST HTML ************************ 

		<div>
			<form>
				<h2>Write a Blog post: <h2>
						<textarea name="writePost" placeholder="Text..." maxlength="1000"></textarea>
					</h2>
					<input type="submit" value="POST IT">
			</form>
		</div>







		********************* ADD A NEW CATEGORY PHP  ******************************
		<div>
			<?php

			if (isset($_POST['addNewCategory'])) {
				$addNewCategory = strip_tags($_POST['addNewCategory']);
				echo "Your Blog Text: $addNewCategory";
			}
			?>
		</div>


		********************* ADD A NEW CATEGORY HTML  ******************************
		<div>
			<span class="error"><?php echo $errorAddNewCategory ?></span><br>

				<input type="text" name="firstname" value="<?php echo $addNewCategory ?>" placeholder="Name der Kategorie">
                <input type="submit" value="ADD A NEW CATEGORY">
            </span>
		</div>






		
		***********************  HEADING  PHP  *******************************************
		<div>
		<?php
			if (isset($_POST['heading'])) {
				$heading = strip_tags($_POST['heading']);
				echo "Your Blog Text: $heading";
			}
			?>
		</div>


		********************* HEADING HTML  ******************************
		<div>
			<span class="error"><?php echo $errorHeading ?></span><br>
				<input type="text" name="firstname" value="<?php echo $hading ?>" placeholder="Heading">
            </span>
		</div>


		





		**********************  ALIGN PHP ********************* 

		<div>
		<?php
			if (isset($_POST['align'])) {
				$align = $_POST['align'];
				foreach ($align as $item) echo "$item<br>";
			}
			?>
		</div>


		**********************   ALIGN HTML  ***************************************
			<select id="align" name="align">
				<?php
					foreach( $alignArray AS $key=>$value ) {
						if( $align == $key ) {
							echo "\t\t\t\t\t<opton value='$key' selected>$value</option>\n";
						} else {
							echo "\t\t\t\t\t<option value='$key'>$value</option>\n";
						}
					}
				?>
			</select>
		


