<?php
//calculator_test2.php
require_once 'simpletest/autorun.php';
include 'Calculator.php';

class TestOfCalculator extends UnitTestCase {
	function testSubtract() {
	  $myCalc = new Calculator();
	  $this->assertEqual($myCalc->subtract(4.2,2.1), 2.1, "4.2 - 2.1");
	  $this->assertEqual($myCalc->subtract(4,2), 2, "4 - 2");
		}
	
	
	
}



