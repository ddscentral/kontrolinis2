<?php

require_once(__DIR__ ."/../Models/RectModel.php");
require_once(__DIR__ ."/../Libs/Controller.php");

class RectController extends Controller
{
	private $model;	

	public function __construct() {
		parent::__construct();

		$this->model = new RectModel();
	}

	public function mainFunction() {
		$rectList = $this->model->getRectList();

		$this->view->rectList = $rectList;
		$this->view->render(__DIR__ . "/../Views/RectView.phtml");	
	}
}

