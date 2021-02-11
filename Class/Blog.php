<?php

#*******************************************************************************************#


				#************************************#
				#********** CLASS BLOG **********#
				#************************************#

				/**
				*
				*	Class represents a blog
                *
                */

                class Blog {

                #*******************************#
				#********** ATTRIBUTE **********#
				#*******************************#

                public $blog_headline;
                public $blog_imagePath;
                public $blog_imageAlignment;
                public $blog_content;
                public $blog_date;
                public $cat_id;
                public $usr_id;

                #***********************************************************#

                #*********** USING A CONSTRUCTOR ***************************#

                function __construct($blog_headline, $blog_imagePath, $blog_imageAlignment, $blog_content, $cat_id, $usr_id)
                {
                    $this->blog_headline = $blog_headline;
                    $this->blog_imagePath = $blog_imagePath;
                    $this->blog_imageAlignment = $blog_imageAlignment;
                    $this->blog_content = $blog_content;
                    $this->cat_id = $cat_id;
                    $this->usr_id = $usr_id;
                }

                #*********** USING A STATIC METHOD *************************#

                static function fetchAllFromDb($pdo) {
                    $statementBlogPosts = $pdo->prepare("SELECT * FROM blog INNER JOIN category ON blog.cat_id = category.cat_id INNER JOIN user ON blog.usr_id = user.usr_id");
                    $statementBlogPosts->execute();
if (DEBUG)			if ($statementBlogPosts->errorInfo()[2]) echo "<p class='debug err'>" . $statementBlogPosts->errorInfo()[2] . "</p>";
                    return $statementBlogPosts->fetchAll(PDO::FETCH_OBJ);
                }

                #*********** USING A STATIC METHOD *************************#

                static function fetchAllFromDbByCategory($pdo, $categoryId) {
                    $statementBlogPosts = $pdo->prepare("SELECT * FROM blog INNER JOIN category ON blog.cat_id = category.cat_id INNER JOIN user ON blog.usr_id = user.usr_id WHERE blog.cat_id=$categoryId");
                    $statementBlogPosts->execute();
if (DEBUG)			if ($statementBlogPosts->errorInfo()[2]) echo "<p class='debug err'>" . $statementBlogPosts->errorInfo()[2] . "</p>";
                    return $statementBlogPosts->fetchAll(PDO::FETCH_OBJ);
                }

                #*********** USING A STATIC METHOD *************************#

                static function saveToDb($pdo, $blogObj) {
                    $statement = $pdo->prepare("INSERT INTO blog
                                                            (blog_headline, blog_imagePath, blog_imageAlignment, blog_content, cat_id, usr_id)
                                                            VALUES
                                                            (:ph_blog_headline, :ph_blog_imagePath, :ph_blog_imageAlignment, :ph_blog_content, :ph_cat_id, :ph_usr_id)
                                                            ");


                    $statement->execute(array(
                        "ph_blog_headline" => $blogObj->blog_headline,
                        "ph_blog_imagePath" => $blogObj->blog_imagePath,
                        "ph_blog_imageAlignment" => $blogObj->blog_imageAlignment,
                        "ph_blog_content" => $blogObj->blog_content,
                        "ph_cat_id" => $blogObj->cat_id,
                        "ph_usr_id" => $blogObj->usr_id
                    ));

if (DEBUG)			if ($statement->errorInfo()[2]) echo "<p class='debug err'><b>Line " . $statement->errorInfo()[2] . "</p>";
                }
            }

#*******************************************************************************************#

?>