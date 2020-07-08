<?php
/*

scriptname:

Usage: php scriptname argument

*/

class Login extends Controller {
	
	function __construct() {
		parent::__construct();
		//echo "Im Index des Controllers";

		$this->view->render('login/index');
	}
	
}
