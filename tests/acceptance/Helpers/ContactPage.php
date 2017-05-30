<?php

class ContactPage{
		
	
	public function typeFirstName(AcceptanceTester $I, $firstName){
		$I->fillField('ContactForm[name]', $firstName);
	}
	
	public function typeEmail(AcceptanceTester $I, $email){
		$I->fillField('ContactForm[email]', $email);
	}
	
	public function typeSubject(AcceptanceTester $I, $subject){
		$I->fillField('ContactForm[subject]', $subject);
	}
	
	public function clickSubmitButton(AcceptanceTester $I){
		$I->click('contact-button');
	}
	
		
}