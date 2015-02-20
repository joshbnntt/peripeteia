<?php
namespace Codeception\Module;

// here you can define custom actions
// all public methods declared in helper class will be available in $I

use Codeception\Module;
use \FunctionalTester;

class FunctionalHelper extends Module
{

    /**
     * @param FunctionalTester $i
     */
    public function loggedIn(FunctionalTester $i)
   {
       $this->login($i, 'umohr@terry.org', 'password');
   } 

    public function login(FunctionalTester $i, $email, $password)
    {
        $i->amOnPage('/login');
        $i->fillField('email', $email);
        $i->fillField('password', $password);
        $i->click('submit');
        $i->seeCurrentUrlEquals('/');
    }

}
