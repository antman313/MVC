<?php
/*

scriptname:

Usage: php scriptname argument

*/

class Help extends Controller {
	
	function __construct() {
		parent::__construct();
		//echo "Im Help des Controllers<br />";
		$this->view->render("help/index");
	}
	
	public function other($arg = false) {
		echo "we are inside other now<br />";
		echo "Optionales: " . $arg . "<br />";
		
		require 'models/help_model.php';
		$model = new Help_Model();
	}
	
}
