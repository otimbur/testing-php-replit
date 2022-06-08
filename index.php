<?php

include 'Calculator.php';

//create an object and we need a veriable
//in PHP the variable start with $ sighn
// the object name is the- Calculator

$myCalc = new Calculator();

//echo let's shows on the page
// -> 

echo $myCalc->add(2,2);
