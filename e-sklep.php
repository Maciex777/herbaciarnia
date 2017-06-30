<!DOCTYPE html>
<html lang="pl">
<head>
  <title>HERBACIARNIA - sklep z herbatą ziołową</title>
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
        <li class="col-md-3"><a href="#">E-sklep</a></li>
		<li class="col-md-3"><a href="#">Kontakt</a></li>
      </ul>
	</div>
    </div>
  </div>
</nav>
  
<div class="container-fluid text-center">    
  <div class="row content">
   <div class="col-xs-12 col-sm-5 col-md-10 col-md-offset-1" >
	<h1>Herbaty ziołowe</h1>   
	<form class="col-xs-12 col-md-4" action="przetworzonezamowienie.php" method=post>
		<h2>Zamówienie</h2>
		<table border=0>
			<tr bgcolor=#cccccc>
			  <td class="headtable" width="280">Produkt</td>
			  <td class="headtable" width="60">Ilość</td>
			</tr>
			<tr>
			  <td>Herbata czarna</td>
			  <td align="center"><input type="text" name="iloscczarnej" size="3" maxlength="3"/></td>
			</tr>  
			<tr>
			  <td>Herbata Earl Grey</td>
			  <td align="center"><input type="text" name="iloscearlgrey" size="3" maxlength="3"/></td>
			</tr>  
			<tr>
			  <td>Herbata zielona</td>
			  <td align="center"><input type="text" name="ilosczielonej" size="3" maxlength="3"/></td>
			</tr>
			<tr>
			  <td>Herbata szałwiowa</td>
			  <td align="center"><input type="text" name="iloscszalwiowej" size="3" maxlength="3"/></td>
			</tr>			
			<tr>
			  <td>Herbata mietowa</td>
			  <td align="center"><input type="text" name="iloscmietowej" size="3" maxlength="3"/></td>
			</tr>			
			<tr>
			  <td>Herbata melisowa</td>
			  <td align="center"><input type="text" name="iloscmelisowej" size="3" maxlength="3"/></td>
			</tr>			
			<tr>
			  <td>Herbata rumiankowa</td>
			  <td align="center"><input type="text" name="iloscrumiankowej" size="3" maxlength="3"/></td>
			</tr>
			<tr>
			  <td>Herbata dziurawcowa</td>
			  <td align="center"><input type="text" name="iloscdziurawcowej" size="3" maxlength="3"/></td>
			</tr>			
			<tr>
			  <td>Herbata jaśminowa</td>
			  <td align="center"><input type="text" name="iloscjasminowej" size="3" maxlength="3"/></td>
			</tr>
		</table>
		
		<table>			
			<tr>
			  <td class="headtable" width="140">Adres wysyłki</td>
			  <td width="200" align="center"><input type="text" name="adres" size="20" maxlength="35" required/></td>
			</tr>  
			<tr>
			  <td class="headtable" width="140">Adres mailowy</td>
			  <td width="200" align="center"><input type="email" name="email" size="20" maxlength="35" required/></td>
			</tr>  
			<tr>
				<td width="340" colspan="2" align="center">Jak dowiedzieli się Państwo o sklepie HERBACIARNIA?</td>
			</tr>
			<tr>	  
			  <td colspan="2" align="center"><select name="jak">
				<option value = "a">Jestem stałym klientem
				<option value = "b">Reklama telewizyjna
				<option value = "c">Książka telefoniczna
				<option value = "d">Znajomy
				<option>Inne źródło
			  </select>
			  </td>
			</tr>  
			<tr>
			  <td colspan="2" align="center"><input type="submit" value="Złóż zamówienie" /></td>
			</tr>  
		</table>
	</form>
	 </div>
 </div>
</div>

<footer class="container-fluid text-center">
  <p class="text-right">Created by Maciej Molenda</p>
</footer>

</body>
</html>
