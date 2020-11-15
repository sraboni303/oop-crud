<?php

namespace Crud\Controller;
use Crud\Support\Database;

class Student extends Database {


	public function addStudent($name, $email, $cell, $uname){
		$data = $this -> create("INSERT INTO students (name, email, cell, uname) VALUES ('$name', '$email', '$cell', '$uname') ");
		if ($data) {
			return '<p class="alert alert-success">Student Registration Successful !! <button class="close" data-dismiss="alert">&times;</button> </p>';
		}
	}



	public function selectStudent(){

		$data = $this -> all('students');
		return $data;
	
	}


	public function delete_id($id){
		$data = $this -> delete('students', $id);
		
		if ($data) {
			return '<p class="alert alert-success">Student Data Deleted !! <button class="close" data-dismiss="alert">&times;</button> </p>';
		}
	}


	public function viewProfile($id){
		return $this->find('students', $id);
	}











}