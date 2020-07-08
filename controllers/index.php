<?php
/*

scriptname:

Usage: php scriptname argument

*/

class Index extends Controller {
	
	function __construct() {
		parent::__construct();
		//echo "Im Index des Controllers";

		$this->view->render('index/index');
	}
	
}
