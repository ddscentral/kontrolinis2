<?php

require_once(__DIR__ . '/../Libs/Database.php');

class Model
{
	protected $db;

	public function __construct() {
		$this->db = Database::getInstance();	
	}
}
