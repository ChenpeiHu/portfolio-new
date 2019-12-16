<?php
require_once 'model/Logic.php';

class Controller {
	public function __construct() {
		$this->Logic = new Logic();
	}

	public function __destruct() {
	}

	public function handleRequest() {
		try {
			$pagina = isset( $_REQUEST['request'] ) ? $_REQUEST['request'] : null;
			switch ( $pagina ) {

				default:
					$this->collectLanding();
					break;

			}
		} catch ( ValidationException $e ) {
			$errors = $e->getErrors();
		}
	}

    public function collectLanding(){
	    include 'view/landing.php';
    }
	

}

?>