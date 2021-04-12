<?php
require_once 'addition.php';
require_once 'division.php';
require_once 'multiplication.php';
require_once 'subtraction.php';
$first = $_POST['first'];
$second = $_POST['second'];
$method = $_POST['method'];




switch ($method) {
    case "dodawanie":
        addition($first, $second);
        break;
    case "odejmowanie":
        subtraction($first, $second);
        break;
    case "dzielenie":
        division($first, $second);
        break;
     case "mnożenie":
        multiplication($first, $second);
        
        break;   
}

?>