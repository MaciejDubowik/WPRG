<?php 
error_reporting(0);
 $imie0 = $_POST['imie0'];
 $nazwisko0 = $_POST['nazwisko0'];
 $ulica0 = $_POST['ulica0'];
 $kod0 = $_POST['kod0']; 
 $miasto0 = $_POST['miasto0']; 
 $mail0 = $_POST['mail0'];
 $telefon1 = $_POST['telefon1'];

 $imie1 = $_POST['imie1'];
 $nazwisko1 = $_POST['nazwisko1'];
 $ulica1 = $_POST['ulica1'];
 $kod1 = $_POST['kod1']; 
 $miasto1 = $_POST['miasto1']; 
 $mail1 = $_POST['mail1'];
 $telefon1 = $_POST['telefon1'];

 $imie2 = $_POST['imie2'];
 $nazwisko2 = $_POST['nazwisko2'];
 $ulica2 = $_POST['ulica2'];
 $kod2 = $_POST['kod2']; 
 $miasto2 = $_POST['miasto2']; 
 $mail2 = $_POST['mail2'];
 $telefon2 = $_POST['telefon2'];
echo ' <h1> potwierdzenie rezerwacji dla dodatkowych osob</h1>'; 
printf("$imie0 $nazwisko0 <br> $ulica0 <br> $kod0 $miasto0 <br> $mail0 <br> $telefon0  ");
echo "<br>";
printf("$imie1 $nazwisko1 <br> $ulica1 <br> $kod1 $miasto1<br> $mail1 <br> $telefon1 <br> ");
echo "<br>";
printf("$imie2 $nazwisko2 <br> $ulica2 <br> $kod2 $miasto2 <br> $mail2 <br> $telefon2 <br> ");






?>