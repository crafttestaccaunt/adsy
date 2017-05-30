<?php

require_once 'ContactPage.php';

class ApplicationManager{
	
	private $contact;
	
	public function __construct(){
		 
		$this->contact = new ContactPage();
	}
		
	public function getContactPageHelper(){
		return $this->contact;
	}
	
}