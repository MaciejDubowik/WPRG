<?php
$pierwsza = $_POST['pierwsza'];
$druga = $_POST['druga'];
$metoda = $_POST['metoda'];

if($metoda == "dodawanie"){
	$wynik = $pierwsza + $druga;
	echo $wynik;
}
else if($metoda == "odejmowanie"){
	$wynik = $pierwsza - $druga;
	echo $wynik;
}
else if($metoda == "dzielenie"){
	$wynik = $pierwsza / $druga;
	echo $wynik;
}
else if($metoda == "mnożenie"){
	$wynik = $pierwsza * $druga;
	echo $wynik;
}

include '4.1view.php';
?>

