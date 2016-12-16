<!DOCTYPE html>
<html lang="pl">
	<head id="page-head">
		<meta charset="utf-8">
		<title>Abakus 2 Zając - Oleksiejczuk - Odczyt</title>
		<link rel="stylesheet" type="text/css" href="stylOleksiejczuk.css">
	</head>
	<body>
		<header id="page-header">			
			<img src="foto1_Oleksiejczuk.jpg" class="logo">
			<h1>Abakus 2 Zając <span id="visitor"></span></h1>
			<nav id="top-menu">
				<ul class="no-dots">
					<li><a href="startowa_Oleksiejczuk.html">Strona główna</a></li>
					<li><a href="opis_sklepu_Oleksiejczuk.html">Opis sklepu</a></li>
					<li><a href="bazaOleksiejczuk.php">Asortyment sklepu</a></li>
					<li><a href="formularz_Oleksiejczuk.php">Formularz</a></li>
					<li><a href="kontakt_Oleksiejczuk.html">Kontakt</a></li>
					<li><a href="regulamin_Oleksiejczuk.html">Regulamin</a></li>
				</ul>
			</nav>
		</header>
		<main>
			<section class="main-content">
				<article> 
					<header>Dane Personalne</header>
                    <?php
                        echo "<p>Imię: " . $_POST['first-name'] . "</p>";
                        echo "<p>Nazwisko: " . $_POST['last-name'] . "</p>";
                        echo "<p>Wiek: " . $_POST['age'] . "</p>";
                        echo "<p>Adres: " . $_POST['address'] . "</p>";
                    ?>
				</article>
			</section>
			<aside id="basket" class="sidebar">
				<header><h1>Koszyk</h1></header>
				<p>Produkty które wybrałeś</p>			
				<ul class="no-dots">
					<li>Produkt 1</li>
					<li>Produkt 2</li>			
				</ul>
			</aside>
		</main>
		<footer id="page-footer">
			<p>Copyright @2016 Abakus 2 Zając</p>
		</footer>			
	</body>
</html>