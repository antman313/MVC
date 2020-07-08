<?php

class ErrorOutput extends Controller {
	
	function __construct() {
		parent::__construct();
		echo "Fehler auf der ganzen Linie!";
		
		$this->view->msg = "This page doesnt exists! FEHLER!!<br />";
		$this->view->render("error/index");
		
	}
}
