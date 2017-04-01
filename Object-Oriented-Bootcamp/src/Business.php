<?php

namespace Acme;

use Acme\Users\Person;

class Business {
	protected $staff;

	public function __construct(Staff $staff){
		$this->staff = $staff;
	}

	public function hire(Person $person){
		// Add $person to the staff collection
		$this->staff->add($person);
	}
}