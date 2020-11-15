<?php 
namespace Crud\Controller;
use Crud\Support\Database;

/**
 * Teacher Class:
 */
class Teacher extends Database{

	/**
	 * Data Insert into Database:
	 */
	public function addTeacher($name, $email, $cell, $uname){
		$data = $this -> create("INSERT INTO teachers (name, email, cell, uname) VALUES ('$name', '$email', '$cell', '$uname') ");

		if ($data) {
			return '<p class="alert alert-success">Teacher Registration Successful !! <button class="close" data-dismiss="alert">&times;</button> </p>';
		}
	}




	/**
	 *  Select Data From Database:
	 */
	public function selectTeacher(){
		$data = $this -> all('teachers');
		return $data;
	}



	/**
	 * Delete Profile:
	 */
	public function deleteTeacher($id){
		return $this -> delete('teachers', $id);
	}


	/**
	 * View Profile:
	 */
	public function viewProfile($id){
		return $this -> find('teachers', $id);
	}











































}
