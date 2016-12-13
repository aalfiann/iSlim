<?php

namespace models;
use lib\Core;
use PDO;

class Starter {

	protected $core;

	function __construct() {
		$this->core = \lib\Core::getInstance();
	}
	
	// Get all stuff
	public function getAll() {
		$r = array();		

		$sql = "SELECT * FROM user";
		$stmt = $this->core->dbh->prepare($sql);		

		if ($stmt->execute()) {
			$r = $stmt->fetchAll(PDO::FETCH_ASSOC);		   	
		} else {
			$r = 0;
		}		
		return $r;
	}

    public function set() {
        return "hello world!!!";
    }
}