<?php 

namespace Acme;

class AuthController {

	protected $registration;
	function __construct(RegisterUser $registration)
	{
		$this->registration = $registration;
	}

	public function register(){
		$this->registration->execute([], $this);
	}

	public function userRegisteredSuccessfully(){
		var_dump('Created successfully. redirect somewhere');
	}	

	public function userRegisteredFailed(){
		var_dump('Created failed. redirect back');
	}
}