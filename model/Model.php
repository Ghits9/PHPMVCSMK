<?php
	include_once ("model/Student.php");
	/**
	 * 
	 */
	class Model
	{
		// 
		public function getStudentList() {
			return array(
				"56625" => new student("56625","Aan Ahmad","XII","RPL"),
				"67753" => new student("67753","Budi Ahmad","XII","RPL"),
				"89765" => new student("89765","Cecep Suhada","XII","RPL"),
				"87600" => new student("87600","Dida Alexander","XII","RPL"));
		}

		public function getStudent($title) {
			$allStudents = $this->getStudentList();
			return $allStudents[$title];
		}

	}
 ?>