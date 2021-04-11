<?php

 if(isset($_POST['formSubmit'])){
    $formSubmit = $_POST['formSubmit'];
}
 function zaznaczony($nazwa){

	if ((isset($_POST[$nazwa]) && !empty($_POST[$nazwa]))) {
	echo $nazwa;
   echo ": tak";
   echo "<br>";
}
else{
		echo $nazwa;
   echo ": nie";
   echo "<br>";
}
}	

function podsumowanie(){
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

echo
' <h1> potwierdzenie rezerwacji </h1>'; 
printf("$imie $nazwisko <br> $ulica <br> $kod $miasto <br> $mail <br> $telefon <br> okres rezerwacji: $przyjazd - $wyjazd <br> ilość osób: $formSubmit<br>"); 

echo zaznaczony("dostawka") ;

echo zaznaczony("klimatyzacja") ;

echo zaznaczony("balkon") ;
}



 if($formSubmit == '1'){
    podsumowanie();
}
else{ 
	podsumowanie();

	for($i=0; $i<$formSubmit-1; $i++){
		

		echo 'dane dodatkowej osoby <br> <form action="4.3podsumowanie.php" method="POST">
	 &emsp;&emsp;&emsp; IMIĘ: <input type=text name="imie'.$i.'" /><br>
	 NAZWISKO: <input type=text name="nazwisko'.$i.'" /><br>
	 <br>
	  &ensp;ULICA I NUMER: <input type=text name="ulica'.$i.'" /><br>
	  &nbsp;KOD POCZTOWY:<input type=text name="kod'.$i.'" /><br>
	  &emsp;&emsp;&emsp; &emsp;MIASTO:<input type=text name="miasto'.$i.'" /><br>
	  <br>
     &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp; MAIL: <input type="email" name="mail'.$i.'" /><br>
	 NUMER TELEFONU: <input type="tel" name="telefon'.$i.'" /><br>
	  <br>';

	  
	}
	echo '<input type=submit value="Wyślij"/>';

	
	//printf('$imie'.$i.' $nazwisko'.$i.' <br> $ulica'.$i.' <br> $kod'.$i.' $miasto'.$i.' <br> $mail'.$i.' <br> $telefon'.$i.' <br>'); 
}

?>