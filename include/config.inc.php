<?php
#********************************************************************************#


				#******************************************#
				#********** GLOBAL CONFIGURATION **********#
				#******************************************#
				
				
				/*
					Konstanten werden in PHP mittels der Funktion define() oder über 
					das Schlüsselwort const (const DEBUG = true;) definiert. Seit PHP7
					ist der einzige Unterschied zwischen den beiden Varianten, dass über 
					const definierte Konstanten nicht innerhalb von Funktionen, Schleifen, 
					if-Statements oder try/catch-Blöcken definiert werden können.
					Konstanten besitzen im Gegensatz zu Variablen kein $-Präfix
					Üblicherweise werden Konstanten komplett GROSS geschrieben.
				*/	
				
				#**********DATABASE CONFIGURATION************#
				define("DB_SYSTEM", "mysql");
				define("DB_HOST",  	"localhost");
				define("DB_NAME",    "blog");
				define("DB_USER",    "root");
				define("DB_PWD", "");
				
				#********** FORMULAR CONFIGURATION **********#
				define("INPUT_MIN_LENGTH", 2);
				define("INPUT_MAX_LENGTH", 256);
				
				
				#********** DEBUGGING **********#
				define("DEBUG", 	true);				// Debugging for main page
				define("DEBUG_F", true);				// Debugging for functions
				define("DEBUG_DB", true); 				// Debugging for database


#********************************************************************************#
?>