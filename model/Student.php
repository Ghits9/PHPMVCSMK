<?php
	/**
	 * 
	 */
	class Student
	{
		public $nis;
		public $nama_lengkap;
		public $kelas;
		public $jurusan;

		function __construct($nis, $nama_lengkap, $kelas, $jurusan)
		{
			$this->nis = $nis;
			$this->nama_lengkap = $nama_lengkap;
			$this->kelas = $kelas;
			$this->jurusan = $jurusan;
		}
	}
 ?>