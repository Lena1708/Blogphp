<?php
#********************************************************************************#

				
				/**
				*
				*	Rechnet mit 2 Zahlenwerten in den 4 Grundrechenarten
				*
				*	@param	Int/Float/String		$zahl1		1. Zahlenwert
				*	@param	String					$operator	Der anzuwendende Rechenoperator
				*	@param	Int/Float/String		$zahl2		2. Zahlenwert
				*
				*	@return	Int/Float/String		Das Rechenergebnis/
				*											bei ungültigem Rechenoperator oder Division durch 0
				*											Fehlermeldung
				*
				*/
				function rechne1( $zahl1, $operator, $zahl2 ) {
if(DEBUG_F)		echo "<p class='debug hint" . ucfirst(__FUNCTION__) . "'><b>Line " . __LINE__ . "</b>: Aufruf " . __FUNCTION__ . "('$zahl1 $operator $zahl2') <i>(" . basename(__FILE__) . ")</i></p>\n";	
				
										
					switch($operator) {
						case "+":			return $zahl1 + $zahl2;
												break;
						case "-":			return $zahl1 - $zahl2;
												break;
						case "*":			return $zahl1 * $zahl2;
												break;
						case "/":			if( $zahl2 == 0 ) {
													return "Division durch 0 ist nicht erlaubt!";
												}
												return $zahl1 / $zahl2;
												break;
						default:				return "Ungültiger Rechenoperator!";
												break;
					}					
				}
				

				#**************************************************************#
				
				
				/**
				*
				*	Rechnet mit 2 Zahlenwerten in den 4 Grundrechenarten
				*
				*	@param	[Int/Float/String		$zahl1=5]			1. Zahlenwert
				*	@param	[String					$operator='+']		Der anzuwendende Rechenoperator
				*	@param	[Int/Float/String		$zahl2=10]			2. Zahlenwert
				*
				*	@return	Int/Float/String		Das Rechenergebnis/
				*											bei ungültigem Rechenoperator oder Division durch 0
				*											Fehlermeldung
				*
				*/
				function rechne2( $zahl1=5, $operator="+", $zahl2=10 ) {
if(DEBUG_F)		echo "<p class='debug hint" . ucfirst(__FUNCTION__) . "'><b>Line " . __LINE__ . "</b>: Aufruf " . __FUNCTION__ . "('$zahl1 $operator $zahl2') <i>(" . basename(__FILE__) . ")</i></p>\n";	
					
										
					switch($operator) {
						case "+":			return $zahl1 + $zahl2;
												break;
						case "-":			return $zahl1 - $zahl2;
												break;
						case "*":			return $zahl1 * $zahl2;
												break;
						case "/":			if( $zahl2 == 0 ) {
													return "Division durch 0 ist nicht erlaubt!";
												}
												return $zahl1 / $zahl2;
												break;
						default:				return "Ungültiger Rechenoperator!";
												break;
					}					
				}				
				
				
				#**************************************************************#
				
				
				/**
				*
				*	Rechnet mit 2 Zahlenwerten in den 4 Grundrechenarten
				*
				*	@param	Int/Float/String		$zahl1				1. Zahlenwert				
				*	@param	Int/Float/String		$zahl2				2. Zahlenwert
				*	@param	[String					$operator='+']		Der anzuwendende Rechenoperator
				*
				*	@return	Int/Float/String		Das Rechenergebnis/
				*											bei ungültigem Rechenoperator oder Division durch 0
				*											Fehlermeldung
				*
				*/
				function rechne3( $zahl1, $zahl2, $operator="+" ) {
if(DEBUG_F)		echo "<p class='debug hint" . ucfirst(__FUNCTION__) . "'><b>Line " . __LINE__ . "</b>: Aufruf " . __FUNCTION__ . "('$zahl1, $zahl2, $operator') <i>(" . basename(__FILE__) . ")</i></p>\n";	
					
										
					switch($operator) {
						case "+":			return $zahl1 + $zahl2;
												break;
						case "-":			return $zahl1 - $zahl2;
												break;
						case "*":			return $zahl1 * $zahl2;
												break;
						case "/":			if( $zahl2 == 0 ) {
													return "Division durch 0 ist nicht erlaubt!";
												}
												return $zahl1 / $zahl2;
												break;
						default:				return "Ungültiger Rechenoperator!";
												break;
					}					
				}
				
				
				#**************************************************************#
				
				/**
				*
				*	Zählt, wie häufig ein Teilstring innerhalb eines Strings vorkommt
				*	Ersetzt alle Vorkommen des Teilstrings durch einen anderen Teilstring
				*
				*	@param	String	$haystack			Der zu durchsuchende String
				*	@param	String	$needle				Der zu suchende Teilstring
				*	@param	String	$replacement		Die Ersetzung für den zu suchenden Teilstring
				*
				*	@return	Array(
				*						Int 		'anzahl'			Anzahl der gefundenen Treffer
				*						String 	'newString'		Der ersetzte String
				*						)
				*
				*/
				function suchenUndErsetzenUndZaehlen( $haystack, $needle, $replacement ) {
if(DEBUG_F)		echo "<p class='debug hint" . ucfirst(__FUNCTION__) . "'><b>Line " . __LINE__ . "</b>: Aufruf " . __FUNCTION__ . "() <i>(" . basename(__FILE__) . ")</i></p>\n";	
					
if(DEBUG_F)		echo "<p class='debug'><b>Line " . __LINE__ . "</b>: \$haystack: $haystack <i>(" . basename(__FILE__) . ")</i></p>\r\n";
if(DEBUG_F)		echo "<p class='debug'><b>Line " . __LINE__ . "</b>: \$needle: $needle <i>(" . basename(__FILE__) . ")</i></p>\r\n";
if(DEBUG_F)		echo "<p class='debug'><b>Line " . __LINE__ . "</b>: \$replacement: $replacement <i>(" . basename(__FILE__) . ")</i></p>\r\n";
					
					// 1. Zählen, wie oft $needle in $haystack vorkommt
					$anzahl = substr_count($haystack, $needle);
if(DEBUG_F)		echo "<p class='debug'><b>Line " . __LINE__ . "</b>: \$anzahl: $anzahl <i>(" . basename(__FILE__) . ")</i></p>\r\n";
					
					// 2. Alle Vorkommen von $needle in $haystack durch $replacement ersetzen
					$newString = str_replace($needle, $replacement, $haystack);
if(DEBUG_F)		echo "<p class='debug'><b>Line " . __LINE__ . "</b>: \$newString: $newString <i>(" . basename(__FILE__) . ")</i></p>\r\n";
					
					// 3. Rückgabe des ersetzten Strings und der Anzahl der Ersetzungen
					return array("anzahl"=>$anzahl, "newString"=>$newString);
				} 
				
				
#********************************************************************************#
?>