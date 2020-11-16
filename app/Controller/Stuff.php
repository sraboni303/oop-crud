<?php 
namespace Crud\Controller;
use Crud\Support\Database;

/**
 * Stuff Class:
 */
class Stuff extends Database{

	/**
	 * Data Insert into Database:
	 */
	public function addStuff($name, $email, $cell, $uname){
		$data = $this -> create("INSERT INTO stuff (name, email, cell, uname) VALUES ('$name', '$email', '$cell', '$uname') ");

		if ($data) {
			return '<p class="alert alert-success">Stuff Registration Successful !! <button class="close" data-dismiss="alert">&times;</button> </p>';
		}
	}




	/**
	 *  Select Data From Database:
	 */
	public function selectStuff(){
		$data = $this -> all('stuff');
		return $data;
	}



	/**
	 * Delete Profile:
	 */
	public function deleteStuff($id){
		return $this -> delete('stuff', $id);
	}


	/**
	 * View Profile:
	 */
	public function viewProfile($id){
		return $this -> find('stuff', $id);
	}


	/**
	 * Edit Profile
	 */
	public function editStuff($id){
		$data = $this -> find('stuff', $id);
		return $data;
	}


	/**
	 *  Update Profile
	 */
	 public function updateProfile($name, $email, $cell, $uname, $id){
	 	$this->update("UPDATE stuff SET name='$name', email='$email', cell='$cell', uname='$uname' WHERE id='$id' ");


	 }






}