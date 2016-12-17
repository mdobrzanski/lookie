<?php

	function get_data() {
		// Funckja pobierająca dane z bazy

		// Dane do połączenia do bazy
		$host = "localhost";
		$username = "root";
		$password = "";
		$dbname = "Oleksiejczuk_Abakus";

		// Stwórz nowy obiekt połączenia do bazy danych
		$db = new mysqli($host, $username, $password, $dbname);
		// Zapytanie SQL do bazy danych zapisz do zmiennej $sql
		$resource = $db->query("SELECT id, name, descr, price, unit, category FROM dane_Oleksiejczuk");
		// Stwórz listę, który będzie przechowywał dane z bazy
		$result = array();
		// W pętli dodawaj kolejne wiersze danych z bazy do listy $result
		while ( $row = $resource->fetch_assoc() ) {
			array_push($result, $row);
		}
		$resource->free();
		// Zamknij połączenie do bazy danych
		$db->close();
		// Zwróć listę z danymi
		return $result;	
	}

	function product_rows() {
		// Funkcja zwracająca html z wierszami produktów do wyświetlenia w tabeli.

		// pobieramy produkty z bazy danych i zapisujemy do zmiennej $data
		$data = get_data();

		$b = ''; // ustawiamy zmienną $b na początek jako pusty tekst
		for ($i=0; $i < count($data); $i++) {
			// przechodzimy po liście $data zawierjącej dane i dopisujemy HTML do zmiennej $b jeśli produkt jest kategorii $category
			$item = $data[$i]; // przy każdym obrocie pętli pod zmienną $item ustawiamy kolejny produkt z listy $data
			$b =  $b . '<tr><td>' . $item['name'] . '</td><td>' . $item['descr'] . '</td><td>' . $item['price'] . '</td></tr>';
		}
		return $b; // zwracamy zawartość zmiennej $b
	}	
?>

<!DOCTYPE html>
<html lang="pl">
	<head>
		<meta charset="utf-8">		
		<title>Abakus 2 Zając - Oleksiejczuk - Asortyment</title>
		<link rel="stylesheet" type="text/css" href="stylOleksiejczuk.css">
	</head>
	<body>
		<header id="page-header">			
			<img src="logo_Oleksiejczuk.jpg" class="logo">
			<h1>Abakus 2 Zając</h1>
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
			<section id="assortment" class="main-content">
				<article> 
					<header><h1>Warzywa i owoce</h1></header>
					<table id="products">
						<thead>
							<tr>
								<th>Nazwa</th>
								<th>Opis<th>
								<th>Cena</th>						
							</tr>
						</thead>
						<tbody>
							<?php
								// wywołujemy funkcję, która doda wiersze do tabeli
								echo product_rows();
							?>
						</tbody>
					</table>	
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