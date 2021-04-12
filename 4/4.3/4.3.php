<?php

 $imie = $_POST['imie'];
 $nazwisko = $_POST['nazwisko'];
 $ulica = $_POST['ulica'];
 $kod = $_POST['kod']; 
 $miasto = $_POST['miasto']; 
 $mail = $_POST['mail'];
 $telefon = $_POST['telefon'];
 $przyjazd = $_POST['przyjazd'];
 $wyjazd = $_POST['wyjazd'];
if(isset($_POST['formSubmit'])){
    $formSubmit = $_POST['formSubmit'];
}

function zaznaczony($nazwa){

	if ((isset($_POST[$nazwa]) && !empty($_POST[$nazwa]))) {
	echo $nazwa;
   echo ": tak";
   echo "<br>";
} 	

}
echo
' <h1> potwierdzenie rezerwacji </h1>'; 
printf("$imie $nazwisko <br> $ulica <br> $kod $miasto <br> $mail <br> $telefon <br> okres rezerwacji: $przyjazd - $wyjazd <br> ilość osób: $formSubmit<br>"); 

echo zaznaczony("dostawka") ;

echo zaznaczony("klimatyzacja") ;

echo zaznaczony("balkon") ;


  $start = fopen("file.csv", "a");
  $rows = count(file("file.csv"));
  if($rows > 1)
  {
   $rows = ($rows - 1) + 1;
  }
  $form = array(
   'row'  => $rows,
   'name'  => $imie,
   'surname'  => $nazwisko,
   'street' => $ulica,
   'zip' => $kod,
   'city' => $miasto,
   'mail' => $mail,
   'number' => $telefon,
   'arrival' => $przyjazd,
   'departure' => $wyjazd
  );
  fputcsv($start, $form);




?>