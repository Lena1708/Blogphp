<?php

#*******************************************************************************************#


				#************************************#
				#********** CLASS USER **********#
				#************************************#

				/**
				*
				*	Class represents a user
                *
                */

                class User {

                    #*******************************#
                    #********** ATTRIBUTE **********#
                    #*******************************#

                    public $usr_firstname;
                    public $usr_lastname;
                    public $usr_email;
                    public $usr_password;
                    public $usr_id;

                    #***********************************************************#

                    #*********** USING A STATIC METHOD *************************#

                    static function getUserByEmail($pdo, $email) {
if(DEBUG_C)			echo "<h3 class='debugClass'><b>Line  " . __LINE__ .  "</b>: Aufruf " . __METHOD__ . "() (<i>" . basename(__FILE__) . "</i>)</h3>\r\n";
                        $statement = $pdo->prepare("SELECT * FROM user WHERE usr_email='$email'");
                        $statement->execute();
if(DEBUG)			if($statement->errorInfo()[2]) echo "<p class='debug err'><b>Line " . __LINE__ . "</b>: " . $statement->errorInfo()[2] . " <i>(" . basename(__FILE__) . ")</i></p>\r\n";

                        if(!$statement->rowCount()) {
                            return NULL;
                        }

                        $userDataSet = $statement->fetchAll(PDO::FETCH_CLASS, "User");

                        return $userDataSet[0];
                    }
                }
                 
#*******************************************************************************************#

?>