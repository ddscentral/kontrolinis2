<?php

class Rect
{
	public $id;
	public $foreColor;
	public $backColor;
	public $title;
	public $inputType;

	public function __construct($id, $foreColor, $backColor, $title, $inputType) {
		$this->id = $id;
		$this->foreColor = $foreColor;
		$this->backColor = $backColor;
		$this->title = $title;
		$this->inputType = $inputType;	
	}
}
