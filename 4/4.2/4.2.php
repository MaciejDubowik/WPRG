<?php
$textField = $_POST['textField'];

$date = date("Y-m-d");
 
$file = fopen('pamiętnik.txt', 'a');
$end = '<br><br>';
fwrite($file, $date. PHP_EOL);
fwrite($file, $textField. PHP_EOL. PHP_EOL);  
fclose($file);  
  
echo "zapisano dzisiejszy wpis:)"

?>