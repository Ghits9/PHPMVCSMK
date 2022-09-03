<?php
	include_once ("model/Model.php");
	/**
	 * 
	 */
	class Controller
	{
		public $model;
		function __construct()
		{
			$this->model = new Model();
		}

		public function invoke() {
			if (!isset($_GET['student'])) {
				$student = $this->model->getStudentList();
				include 'view/studentlist.php';
			}

			else {
				$student = $this->model->getStudent($_GET['student']);
				include 'view/viewstudent.php';
			}

		}

	}

 ?>