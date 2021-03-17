<?php
function dataUrodzenia($pesel){

$rok = $pesel[0]. $pesel[1];
$miesiac = ($pesel[2]. $pesel[3]) - 20 ; 

if($miesiac<10){
	$miesiacPrawidlowy = '0'. + $miesiac;
}
else{
	$miesiacPrawidlowy = $miesiac;
}

$dzien = $pesel[4]. $pesel[5];
$urodziny = $dzien. "-". $miesiacPrawidlowy. "-". $rok;

return $urodziny;
}

echo dataUrodzenia('01234567891')


?>