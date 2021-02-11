<?php

#*******************************************************************************************#


				#************************************#
				#********** CLASS CATEGORY **********#
				#************************************#

				/**
				*
				*	Class represents a category
                *
                */

                class Category {
                    
                    #*******************************#
                    #********** ATTRIBUTE **********#
                    #*******************************#

                    public $cat_id;
                    public $cat_name;

                    
                    #***********************************************************#

                    #***********     ??????????????          ************************#

                    static function fetchAllFromDb($pdo) {
                        $statementAllCategory = $pdo->prepare("SELECT * FROM category");
                        $statementAllCategory->execute();
                        if (DEBUG)			if ($statementAllCategory->errorInfo()[2]) echo "<p class='debug err'>" . $statementAllCategory->errorInfo()[2] . "</p>";
                        return $statementAllCategory->fetchAll(PDO::FETCH_CLASS, "Category");
                    }

                    static function saveToDb($pdo, $categoryName) {
                        $setStatement = $pdo->prepare("INSERT INTO category
                                                                (cat_name)
                                                                VALUES
                                                                (:ph_cat_name)
                                                                ");

                        $setStatement->execute(array(
                            "ph_cat_name" => $categoryName
                        ));

                        if (DEBUG)            if ($setStatement->errorInfo()[2]) echo "<p class='debug err'>" . $setStatement->errorInfo()[2] . "</p>";
                    }

                    static function checkIfExists($pdo, $categoryName) {
                        $getStatement = $pdo->prepare("SELECT * FROM category WHERE cat_name='$categoryName'");
                        $getStatement->execute();
                        if (DEBUG)            if ($getStatement->errorInfo()[2]) echo "<p class='debug err'>" . $getStatement->errorInfo()[2] . "</p>";
                    
                        return $getStatement->rowCount();
                    }
                }
?>
