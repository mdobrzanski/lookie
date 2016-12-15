<?php

	function get_data() {
		// Funckja pobierająca dane z bazy

		// Dane do połączenia do bazy
		$host = "localhost";
		$username = "root";
		$password = "";
		$dbname = "Oleksiejczuk_Abakus";

		// Stwórz połączenie do bazy danych i zapisz obiekt pod zmienną $conn
		$conn = mysql_connect($host, $username, $password);
		// Ustal kodowanie bazy
		mysql_set_charset('utf8');
    	// Wybierz bazę danych
		mysql_select_db($dbname);
		// Zapytanie SQL do bazy danych zapisz do zmiennej $sql
		// Wywołaj zapytanie w bazie i zapisz jego wynik (dane) miennej $result
		$query = mysql_query("SELECT id, name, descr, price, category FROM dane_Oleksiejczuk", $conn);
		
		if(! $query ) {
			die('Could not get data: ' . mysql_error());
		}

		$result = array();
		while($row = mysql_fetch_array($query, MYSQL_ASSOC)) {
			array_push($result, $row);
		}
		mysql_close($conn);

		return $result;
	}

	function product_rows() {
		// Funkcja zwracająca html z wierszami produktów do wyświetlenie w tabeli.

		if (array_key_exists('kategoria', $_GET)){
			$cateogry = $_GET['kategoria'];
		} else {
			$category = NULL;
		}

		// pobieramy producty z bazy danych i zapisujemy do zmiennej $data
		$data = Array(
			Array('name' => 'Name 1', 'descr' => 'Descr 1', 'price' => '7,50', 'category' => 'warzywa'),
			Array('name' => 'Name 2', 'descr' => 'Descr 2', 'price' => '8,60', 'category' => 'warzywa'),
			Array('name' => 'Name 3', 'descr' => 'Descr 3', 'price' => '9,70', 'category' => 'owoce'),
		);
		$data = get_data();

		$b = ''; // ustawiamy zmienną $b na początek jako pusty tekst
		for($i=0; $i < count($data); $i++) {
			// przechodzimy po tabeli $data zawierjącej dane i dopisujemy HTML do zmiennej $b jeśli produkt jest kategorii $category
			$item = $data[$i]; // przy każdym obrocie pętli pod zmienną $item ustawiamy kolejny produkt z listy $data
			if ($category == NULL || $item['category'] == $category){  //  dopisz do $b jeśli $category nie było określone albo kategoria produktu zgadza się z $category (oczekiwaną przez nas kategorią) 
				$b =  $b . '<tr><td>' . $item['name'] . '</td><td>' . $item['descr'] . '</td><td>' . $item['price'] . '</td></tr>';  // \n oznacza nowy wiersz w tekście
			}
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
			<img src="logo.jpg" class="logo">
			<h1>Abakus 2 Zając</h1>
			<nav id="top-menu">
				<ul class="no-dots">
					<li><a href="startowa_Oleksiejczuk.html">Strona główna</a></li>
					<li><a href="opis_sklepu_Oleksiejczuk.html">Opis sklepu</a></li>
					<li><a href="asortyment_Oleksiejczuk.php">Asortyment sklepu</a></li>
					<li><a href="promocje_Oleksiejczuk.html">Promocje</a></li>
					<li><a href="kontakt_Oleksiejczuk.html">Kontakt</a></li>
					<li><a href="regulamin_Oleksiejczuk.html">Regulamin</a></li>
				</ul>
			</nav>
		</header>
		<main>				
			<section id="assortment" class="main-content">
				<article> 
					<header><h1>Warzywa i owoce</h1></header>
					<table>
						<thead>
							<tr>
								<th>Nazwa</th>
								<th>Opis<th>
								<th>Cena</th>						
							</tr>
						</thead>
						<tbody>
							<?php
								// wywołujemy funkcję, która doda  
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