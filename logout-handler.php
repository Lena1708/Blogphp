<?php


#***************************************************************************************#

				#***********************************#
				#********** CONFIGURATION **********#
				#***********************************#

                require_once("include/config.inc.php");
                require_once("include/db.inc.php");
                require_once("include/form.inc.php");

                #*********** PROCESS FORM LOGOUT ******************#

                setcookie('username', NULL);
                session_unset();
                session_destroy();

                header("Location: index.php");
?>


