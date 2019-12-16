<?php
require_once 'model/DataHandler.php';

class Logic {
	public function __construct() {
        if($_SERVER['SERVER_ADDR'] == "51.91.158.178") {
//            $this->DataHandler = new DataHandler("localhost", "mysql", "afspraakplanner", "root", "");
            echo "";
        }else{
            $this->DataHandler = new DataHandler("localhost", "mysql", "afspraakplanner", "root", "");
        }
	}

	public function __destruct() {
	}

	
}


?>