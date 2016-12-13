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
        return array(
			'hello' => "Hello World!!!",
			'description1' => "Use this document as a way to quickly start any new project.",
			'description2' => "All you get is this text and a mostly barebones HTML document.",
			'author' => "iSlim is forged by M ABD AZIZ ALFIAN"
			);
    }
}