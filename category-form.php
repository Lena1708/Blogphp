<?php
    require_once("include/config.inc.php");
    require_once("include/db.inc.php");
    require_once("include/form.inc.php");
    require_once("Class/Category.php");

    $pdo = dbConnect("blog");

    if (isset($_GET['addNewCategory'])) {
        $addNewCategory = strip_tags($_GET['addNewCategory']);
        echo "Your New Category Text: $addNewCategory<br/>";
    }


    if (isset($addNewCategory)) {
        $isExists = Category::checkIfExists($pdo, $addNewCategory);

        if ($isExists) {
            echo "This category is already available!";
        } else {
            Category::saveToDb($pdo, $addNewCategory);
            echo "<h1>New category was added to database!</h1>";

            header("Location: dashboard.php");
        }
    }
?>
