<!DOCTYPE html>
<html lang="pl">

<head>
  <meta charset="utf-8">
  <title>HERBACIARNIA - zamówienia klientów</title>
</head>
<body>
<h1>HERBACIARNIA</h1>
<h2>Zamówienia klientów</h2>
<?php
//odczytanie całego pliku
$zamowienia = file("zamowienia/zamowienia.txt");
//obliczenie ilości elementów tablicy
$ilosc_zamowien = count($zamowienia);
if ($ilosc_zamowien == 0) {
	echo "<p><strong>Brak zamówień.
		Proszę spróbować później.</strong></p>";
}
//wyświetlenie tablicy z zamówieniami
echo "<table border=\"1\">\n";
echo "<tr><th bgcolor=\"#CCCCFF\">Data zamówienia</td>
		       <th bgcolor=\"#CCCCFF\">Czarna</td>
		       <th bgcolor=\"#CCCCFF\">Earl Grey</td>
		       <th bgcolor=\"#CCCCFF\">Zielona</td>
		       <th bgcolor=\"#CCCCFF\">Szałwiowa</td>
		       <th bgcolor=\"#CCCCFF\">Miętowa</td>
		       <th bgcolor=\"#CCCCFF\">Melisowa</td>
		       <th bgcolor=\"#CCCCFF\">Rumiankowa</td>
		       <th bgcolor=\"#CCCCFF\">Dziurawcowa</td>
		       <th bgcolor=\"#CCCCFF\">Jaśminowa</td>
		       <th bgcolor=\"#CCCCFF\">Suma</td>
		       <th bgcolor=\"#CCCCFF\">Adres</td>
		</tr>";
		
for ($i=0; $i < $ilosc_zamowien; $i++) {
	//rozbicie każdej linii
	$linia = explode( "\t", $zamowienia[$i]);
	
	//zapamiętanie wyłącznie ilości zamówionych produktów
	$linia[1] = intval( $linia[1] );
	$linia[2] = intval( $linia[2] );
	$linia[3] = intval( $linia[3] );
	$linia[4] = intval( $linia[4] );
	$linia[5] = intval( $linia[5] );
	$linia[6] = intval( $linia[6] );
	$linia[7] = intval( $linia[7] );
	$linia[8] = intval( $linia[8] );
	$linia[9] = intval( $linia[9] );
	
	//wyświetlenie każdego zamówienia
	echo "<tr>
				<td>$linia[0]</td>
				<td align=\"right\">".$linia[1]."</td>
				<td align=\"right\">".$linia[2]."</td>
				<td align=\"right\">".$linia[3]."</td>
				<td align=\"right\">".$linia[4]."</td>
				<td align=\"right\">".$linia[5]."</td>
				<td align=\"right\">".$linia[6]."</td>
				<td align=\"right\">".$linia[7]."</td>
				<td align=\"right\">".$linia[8]."</td>
				<td align=\"right\">".$linia[9]."</td>
				<td align=\"right\">".$linia[10]."</td>
				<td>".$linia[11]."</td>
			</tr>";	
}

echo "</table>";
?>
</body>
</html>
