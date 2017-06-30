<?php
//utwórz krótkie nazwy zmiennych
$iloscczarnej = $_POST['iloscczarnej'];
$iloscearlgrey = $_POST['iloscearlgrey'];
$ilosczielonej = $_POST['ilosczielonej'];
$iloscszalwiowej = $_POST['iloscszalwiowej'];
$iloscmietowej = $_POST['iloscmietowej'];
$iloscmelisowej = $_POST['iloscmelisowej'];
$iloscrumiankowej = $_POST['iloscrumiankowej'];
$iloscdziurawcowej = $_POST['iloscdziurawcowej'];
$iloscjasminowej = $_POST['iloscjasminowej'];
$adres = $_POST['adres'];
$email = $_POST['email'];
$jak = $_POST['jak'];
?>
<!DOCTYPE html>
<html lang="pl">
<head>
  <title>HERBACIARNIA - wyniki zamówienie</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="style.css" type="text/css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Roboto:400,700" rel="stylesheet"> 
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<nav class="navbar navbar-default">
  <div class="container-fluid col-xs-12 col-md-8 col-md-offset-2">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
	  <span class="navbar-toggle" id="menu" >Menu</span>
	  <div class="col-xs-6 col-sm-6 col-sm-offset-3 col-md-offset-3 col-md-6 col-md-offset-3 text-center">
        <a class="navbar-brand" href="#">HERBACIARNIA</a>
	  </div>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
	<div class="col-xs-12 col-md-offset-1 col-md-10 text-center">
      <ul class="nav navbar-nav text-center">
        <li class="col-md-3"><a href="#">O nas</a></li>
        <li class="col-md-3"><a href="#">Produkty</a></li>
        <li class="col-md-3"><a href="e-sklep.php">E-sklep</a></li>
		<li class="col-md-3"><a href="#">Kontakt</a></li>
      </ul>
	</div>
    </div>
  </div>
</nav>

<div class="container-fluid text-center">    
  <div class="row content">
    <div class="col-md-4 col-md-offset-4" style="background-color:rgba(255,255,255, 0.8); ">
	<h1>HERBACIARNIA</h1>
	<h2>Wyniki zamówienia</h2>
	<?php
	$ilosc = 0;
	$ilosc = $iloscczarnej + $iloscearlgrey + $ilosczielonej + $iloscszalwiowej + $iloscmietowej + $iloscmelisowej + $iloscrumiankowej + $iloscdziurawcowej + $iloscjasminowej;

	if($ilosc == 0) {
		
	  echo '<p style="color:red">';
	  echo 'Nie zostało złożone żadne zamówienie!<br/>';
	  echo '</p>';
	  exit;
	  
	} else {
		
	$data = 	date('H:i, JS F Y');
	  echo '<p>Zamówienie przyjęte o '.$data.'</p>';
	  echo '<p>Zamówienie Państwa wygląda następująco: </p>';
	  
	  echo 'Zamówionych produktów: '.$ilosc.':<br/>';

	  if ($iloscczarnej > 0)
		  echo $iloscczarnej.' sztuk herbaty czarnej<br/>';
	  if ($iloscearlgrey > 0)
		  echo $iloscearlgrey.' sztuk herbaty Earl Grey<br/>';
	  if ($ilosczielonej > 0)
		  echo $ilosczielonej.' sztuk herbaty zielonej<br/>';
	  if ($iloscszalwiowej > 0)
		  echo $iloscszalwiowej.' sztuk herbaty szałwiowej<br/>';
	  if ($iloscmietowej > 0)
		  echo $iloscmietowej.' sztuk herbaty miętowej<br/>';  
	  if ($iloscmelisowej > 0)
		  echo $iloscmelisowej.' sztuk herbaty melisowej<br/>';
	  if ($iloscrumiankowej > 0)
		  echo $iloscrumiankowej.' sztuk herbaty rumiankowej<br/>';  
	  if ($iloscdziurawcowej > 0)
		  echo $iloscdziurawcowej.' sztuk herbaty dziurawcowej<br/>';
	  if ($iloscjasminowej > 0)
		  echo $iloscjasminowej.' sztuk herbaty jaśminowej<br/>';

	$wartosc = 0.00;

	define('CENACZARNEJ', 10);  
	define('CENAEARLGREY', 6);  
	define('CENAZIELONEJ', 8);
	define('CENASZALWIOWEJ', 12);
	define('CENAMIETOWEJ', 10);
	define('CENAMELISOWEJ', 12);
	define('CENARUMIANKOWEJ', 10);
	define('CENADZIURAWCOWEJ', 14);
	define('CENAJASMINOWEJ', 16);

	$wartosc = $iloscczarnej * CENACZARNEJ + $iloscearlgrey * CENAEARLGREY + $ilosczielonej * CENAZIELONEJ + $iloscszalwiowej * CENASZALWIOWEJ + $iloscmietowej * CENAMIETOWEJ + $iloscmelisowej * CENAMELISOWEJ + $iloscrumiankowej * CENARUMIANKOWEJ + $iloscdziurawcowej * CENADZIURAWCOWEJ + $iloscjasminowej * CENAJASMINOWEJ;

	  echo '<br/>Cena netto: '.number_format($wartosc, 2).' PLN<br/>';

	$stawkavat = 0.22; // stawka VAT wynosi 22%
	$wartosc = $wartosc * (1 + $stawkavat); 
	  echo 'Cena brutto: '.number_format($wartosc, 2).' PLN<br/>';
	  echo "<p>Adres wysyłki to ".$adres. "<p>";
	  
	  switch($jak) {
		  case "a":
			echo "<p>Stały klient.</p>";
			break;
		  case "b":
			echo "<p>Źródło informacji - reklama telewizyjna.</p>";
			break;
		  case "c":
			echo "<p>Źródło informacji - książka telefoniczna.</p>";
			break;
		  case "d":
			echo "<p>Źródło informacji - znajomy.</p>";
			break;	
		  default:
			echo "<p>Źródło informacji - Źródło nieznane.</p>";
			break;	
	  }		

	  echo "<p>Na adres mailowy ".$email. " zostaną przesłane:<br/>- zapytanie o potwierdzenie zamówienia<br/>- informacje dotyczące odbioru<p>";
	  
	//otwarcie pliku i dopisanie zamówienia
	$wp = @fopen("zamowienia/zamowienia.txt", 'ab');
	flock($wp, LOCK_EX); 	//blokada zapisu pliku

		if (!$wp) {
		  echo "<p><strong>Zamówienie Państwa nie może zostać przyjęte w tej chwili.
					Proszę spróbować później.</strong></p></body></html>";
		  exit;
		}
		
	$ciagwyjsciowy = $data."\t".$iloscczarnej." sztuk herbaty czarnej \t".$iloscearlgrey." sztuk herbaty Earl Grey\t".$ilosczielonej." sztuk herbaty zielonej\t".$iloscszalwiowej." sztuk herbaty szałwiowej\t".$iloscmietowej." sztuk herbaty miętowej\t".$iloscmelisowej." sztuk herbaty melisowej\t".$iloscrumiankowej." sztuk herbaty rumiankowej\t".$iloscdziurawcowej." sztuk herbaty dziurawcowej\t".$iloscjasminowej." sztuk herbaty jaśminowej\t".$wartosc."PLN\t".$adres."\n";
	fwrite($wp, $ciagwyjsciowy, strlen($ciagwyjsciowy));
	flock($wp, LOCK_UN);		//zwolnienie blokady zapisu
	fclose($wp);
	} 
	?>
	<a href="e-sklep.php" class="btn btn-success" role="button">Wróć do sklepu</a>
	</div>
  </div>
</div>

<footer class="container-fluid text-center">
  <p class="text-right">Created by Maciej Molenda</p>
</footer>

</body>
</html>
