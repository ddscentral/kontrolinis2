<?php

require_once(__DIR__ . "/../Libs/Model.php");
require_once(__DIR__ . "/../Libs/Rect.php");

class RectModel extends Model
{
	protected $rectList;

	public function __construct() {
			parent::__construct();

			$this->rectList = array();

			$query = 'select * from `rect`';

			$result = $this->db->query($query);

			while ($row = $result->fetch_assoc()) {
				$this->rectList[$row['id']] = new Rect($row['id'], $row['forecolor'], $row['backcolor'], $row['title'], $row['inputtype']);			
			}

			$result->close();
	}

	public function getRectList() {
		return $this->rectList;
	}
}
