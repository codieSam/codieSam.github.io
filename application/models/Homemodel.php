<?php 

defined("BASEPATH") OR exit("No direct script access allowed");

class Homemodel extends CI_Model{
	public function sum(){
		$a = 10;
		$b = 20;
		return $a + $b;
	}
}

?>
