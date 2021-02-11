<?php

#***************************************************************************************#

				#***********************************#
				#********** CONFIGURATION **********#
				#***********************************#

                require_once("include/config.inc.php");
                require_once("include/db.inc.php");
                require_once("include/form.inc.php");
                require_once("Class/User.php");
                				
				#********** ESTABLISH DB CONNECTION **********#	

                $pdo = dbConnect("blog");

                #********** PROCESS FORM LOGIN **********#

                if (isset($_POST['login']) && isset($_POST['password'])) {
                    $login = strip_tags($_POST['login']);
                    $password = strip_tags($_POST['password']);

                    $user = User::getUserByEmail($pdo, $login);

                    if (isset($user)) {
                        if ($password == $user->usr_password) {
                            echo "<p class='success'>Success</p>";

                            session_start();
                            setcookie('username', $user->usr_firstname);
                            setcookie('userlname', $user->usr_lastname);
                            setcookie('userId', $user->usr_id);

                            header("Location: dashboard.php");
                        } else {
                            echo "<p class='error'>Pasword incorrect</p>";
                        }
                    } else {
                        echo "<p class='error'>User not found</p>";
                    }
                }

#***************************************************************************************#

?>