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

                    #***********     ??????????????          ************************#

                    static function getUserByEmail($pdo, $email) {
                        $statement = $pdo->prepare("SELECT * FROM user WHERE usr_email='$email'");
                        $statement->execute();
                        if (DEBUG)			if ($statement->errorInfo()[2]) echo "<p class='debug err'>" . $statement->errorInfo()[2] . "</p>";

                        if(!$statement->rowCount()) {
                            return NULL;
                        }

                        $userDataSet = $statement->fetchAll(PDO::FETCH_CLASS, "User");

                        return $userDataSet[0];
                    }
                }
?>