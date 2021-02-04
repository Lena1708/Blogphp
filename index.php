<?php



#***********************************#
#********** CONFIGURATION **********#
#***********************************#

#********** INCLUDES **********#
// include(Pfad zur Datei): Bei Fehler wird das Skript weiter ausgeführt. Problem mit doppelter Einbindung derselben Datei
// require(Pfad zur Datei): Bei Fehler wird das Skript gestoppt. Problem mit doppelter Einbindung derselben Datei
// include_once(Pfad zur Datei): Bei Fehler wird das Skript weiter ausgeführt. Kein Problem mit doppelter Einbindung derselben Datei
// require_once(Pfad zur Datei): Bei Fehler wird das Skript gestoppt. Kein Problem mit doppelter Einbindung derselben Datei
require_once("include/config.inc.php");
require_once("include/db.inc.php");
require_once("include/form.inc.php");

//Schritt 1 DB: Mit der Datenbank verbinden
	$pdo = dbConnect("blog");

	if (isset($_POST["loginSent"])) {
	if (isset($_POST['login']) && isset($_POST['password'])) {
		$login = strip_tags($_POST['login']);
		$password = strip_tags($_POST['password']);}

//Schritt 2 DB: SQL-Statement vorbereiten
//$statement = $pdo->prepare("SELECT * FROM users");

//Schritt 3 DB: SQL-Statement ausführen und ggf. Platzhalter füllen

// Die SQL-Abfrage ist in der übermittelten Form 'genehmigt' und kann nun ausgeführt werden
//$statement->execute( );

//Schritt 4 DB: Daten weiterverarbeiten

// $statement->fetchAll() liest in einem Rutsch alle Datensätze aus der Datenbank 
//und schreibt das Ergebnis (ein zweidimensionales Array, das alle Datensätze in Form von
//einzelnen Arrays enthält) in die Variable <code>$resultArray</code>. 
//$resultArray enthält also je Datensatz ein Array, dessen Indizes den Namen der Tabellenspalten 
//entsprechen.

// Der fetchAll()-Parameter PDO::FETCH_ASSOC liefert o.g. assoziatives Array zurück.
// Der fetchAll()-Parameter PDO::FETCH_NUM liefert das gleiche Array als numerisches Array zurück.
//$resultArray = $statement->fetchAll(PDO::FETCH_ASSOC);


?>

<!doctype html>

<html>

<head>
	<link rel="stylesheet" href="css/main.css">
	<link rel="stylesheet" href="css/debug.css">

	<meta charset="utf-8">
	<title>Blog</title>
</head>

<body>

	<body>



		

		<div class="login-menu">
			<form method="POST">
				<div class="container">
					<input type="hidden" name="loginSent"/>
					<input type="text" name="login" placeholder="Enter Username" /><br><br>
					<input type="text" name="password" placeholder="Enter Password" /><br><br>
					<input type="submit" value="Login">
				</div>
			</form>
		</div>

		
		<div class="main-container">


			<div class="website-header">
				<h1>PHP-Projekt Blog</h1>
				<h3>Show all blog posts</h3>
			</div>
			<div class="posts">
				<div>
					<h2>Far far away</h2>
					<h4>Behind the word mountains</h4>
					<p>Far from the countries Vokalia and Consonantia, there live the blind texts.
						Separated they live in Bookmarksgrove right at the coast of the Semantics,
						a large language ocean. A small river named Duden flows by their place and supplies
						it with the necessary regelialia.</p>
					<img src="uploaded images/snacks1.jpg" alt="Image" style="width:300px; height:180px">
					<p>It is a paradisematic country, in which roasted parts of sentences fly into your mouth.
						Even the all-powerful Pointing has no control about the blind texts it is an almost
						unorthographic life One day however a small line of blind text by the name of
						Lorem Ipsum decided to leave for the far World of Grammar.</p>
					<p>The Big Oxmox advised her not to do so, because there were thousands of bad Commas,
						wild Question Marks and devious Semikoli, but the Little Blind Text didn’t listen.
						She packed her seven versalia, put her initial into the belt and made herself on the way.</p>
					</p>
					<br>
					<hr>
					<br>
				</div>

				<div>
					<h2>The Big Oxmox</h2>
					<h4>Behind the word mountains</h4>
					<p>Far from the countries Vokalia and Consonantia, there live the blind texts.
						Separated they live in Bookmarksgrove right at the coast of the Semantics,
						a large language ocean. A small river named Duden flows by their place and supplies
						it with the necessary regelialia.</p>
					<img src="uploaded images/snacks2.jpg" alt="Image" style="width:300px; height:180px">
					<p>It is a paradisematic country, in which roasted parts of sentences fly into your mouth.
						Even the all-powerful Pointing has no control about the blind texts it is an almost
						unorthographic life One day however a small line of blind text by the name of
						Lorem Ipsum decided to leave for the far World of Grammar.</p>
					<p>The Big Oxmox advised her not to do so, because there were thousands of bad Commas,
						wild Question Marks and devious Semikoli, but the Little Blind Text didn’t listen.
						She packed her seven versalia, put her initial into the belt and made herself on the way.</p>
					</p>
					<br>
					<hr>
					<br>
				</div>

				<div>
					<h2>A small river named Duden</h2>
					<h4>Behind the word mountains</h4>
					<p>Far from the countries Vokalia and Consonantia, there live the blind texts.
						Separated they live in Bookmarksgrove right at the coast of the Semantics,
						a large language ocean. A small river named Duden flows by their place and supplies
						it with the necessary regelialia.</p>
					<img src="uploaded images/snacks3.jpg" alt="Image" style="width:300px; height:180px">
					<p>It is a paradisematic country, in which roasted parts of sentences fly into your mouth.
						Even the all-powerful Pointing has no control about the blind texts it is an almost
						unorthographic life One day however a small line of blind text by the name of
						Lorem Ipsum decided to leave for the far World of Grammar.</p>
					<p>The Big Oxmox advised her not to do so, because there were thousands of bad Commas,
						wild Question Marks and devious Semikoli, but the Little Blind Text didn’t listen.
						She packed her seven versalia, put her initial into the belt and made herself on the way.</p>
					</p>
					<br>
					<hr>
					<br>
				</div>
			</div>


			<div class="categories">
				<ul style="list-style-type: none; font-size: 25px">
					<li style="margin-top: 25px">Snacks</li>
					<li style="margin-top: 25px">Pasta</li>
					<li style="margin-top: 25px">Cakes</li>
					<li style="margin-top: 25px">Pizza</li>
					<li style="margin-top: 25px">Salads</li>
					<li style="margin-top: 25px">Bread</li>

				</ul>

			</div>
		</div>
	</body>
</body>

</html>


<!-- 

			<h3>Schritt 1 DB: Mit der Datenbank verbinden</h3>
				<code>$pdo = dbConnect("blog")</code>
				<?php
				// Aufruf der Funktion dbConnect() und speichern des zurückgelieferten PDO-Objekts
				// (Datenbankverbindung)
				$pdo = dbConnect();
				?>

			<h3>Schritt 2 DB: SQL-Statement vorbereiten</h3>
			<code>$statement = $pdo->prepare("SQL-Statement")</code>
				<?php
				// Hier findet sozusagen der 'Handshake' zwischen Statement-Objekt und Datenbank statt
				$statement = $pdo->prepare("SELECT * FROM users");
				?>

			<h3>Schritt 3 DB: SQL-Statement ausführen und ggf. Platzhalter füllen</h3>
			<code>$statement->execute();</code>
			<?php
			// Die SQL-Abfrage ist in der übermittelten Form 'genehmigt' und kann nun ausgeführt werden
			$statement->execute();
			if (DEBUG)	if ($statement->errorInfo()[2]) echo "<p class='debug err'><b>Line " . __LINE__ . "</b>: " . $statement->errorInfo()[2] . " <i>(" . basename(__FILE__) . ")</i></p>\r\n";
			?>
			
			<h3>Schritt 4 DB: Daten weiterverarbeiten</h3>
			<p>
			<code>$statement->fetchAll()</code> liest in einem Rutsch alle Datensätze aus der Datenbank 
			und schreibt das Ergebnis (ein zweidimensionales Array, das alle Datensätze in Form von
			einzelnen Arrays enthält) in die Variable <code>$resultArray</code>. 
			$resultArray enthält also je Datensatz ein Array, dessen Indizes den Namen der Tabellenspalten 
			entsprechen.
			</p>
			<?php
			// Der fetchAll()-Parameter PDO::FETCH_ASSOC liefert o.g. assoziatives Array zurück.
			// Der fetchAll()-Parameter PDO::FETCH_NUM liefert das gleiche Array als numerisches Array zurück.
			$resultArray = $statement->fetchAll(PDO::FETCH_ASSOC);
			/*				
if(DEBUG)	echo "<pre class='debug'>Line <b>" . __LINE__ . "</b> <i>(" . basename(__FILE__) . ")</i>:<br>\r\n";					
if(DEBUG)	print_r($resultArray);					
if(DEBUG)	echo "</pre>";
*/
			?>

	-->