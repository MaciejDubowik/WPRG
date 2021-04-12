<!DOCTYPE html>
<html>
<head>
</head>
<body>
<h1> FORMULARZ REZERWACJI </h1><br>
 <form action="4.3.php" method="POST">
	 &emsp;&emsp;&emsp; IMIĘ: <input type=text name="imie" /><br>
	 NAZWISKO: <input type=text name="nazwisko" /><br>
	 <br>
	  &ensp;ULICA I NUMER: <input type=text name="ulica" /><br>
	  &nbsp;KOD POCZTOWY:<input type=text name="kod" /><br>
	  &emsp;&emsp;&emsp; &emsp;MIASTO:<input type=text name="miasto" /><br>
	  <br>
     &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp; MAIL: <input type="email" name="mail" /><br>
	 NUMER TELEFONU: <input type="tel" name="telefon" /><br>
	  <br>
	 &emsp;&emsp;&ensp; DATA PRZYJAZDU: <input type="date" name="przyjazd" /><br>
	 DATA WYMELDOWANIA: <input type="date" name="wyjazd" /><br>

	 <br>
	 		ILOŚĆ OSÓB:
	         <select name="formSubmit">
              <option value="">Select...</option>
              <option value="1">1</option>
              <option value="2">2</option>
              <option value="3">3</option>
              <option value="4">4</option>
        </select>
     <br><br>
      <b>DODATKOWE UDOGODNIENIA:</b><br>
        DOSTAWKA:<input type="checkbox" name="dostawka" /><br>
        KLIMATYZACJA:<input type="checkbox" name="klimatyzacja" /><br>
        BALKON:<input type="checkbox" name="balkon"/><br>
  <input type=submit value="Wyślij"/>

  </form>
________________________________________________________
  <br>
  <br>
  <form action='file.csv'>
    <b>Pobierz plik .csv i zobacz go w estetycznej tabeli używając np. excela </b><input type="submit" name="download" class="button" value="Pobierz" /> <br>
  </form>   
  <form action='4.3confirmation.php'>     
    <b>Wyświetl zawartość pliku .csv w przeglądarce</b> <input type="submit" name="display" class="button" value="Wczytaj" />
  </form>


</body>
</html>