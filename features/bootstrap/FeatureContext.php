<?php
use Behat\Behat\Tester\Exception\PendingException;
use Behat\Behat\Context\Context;
use Behat\Behat\Context\SnippetAcceptingContext;
use Behat\Gherkin\Node\PyStringNode;
use Behat\Gherkin\Node\TableNode;
use Behat\MinkExtension\Context\MinkContext;
use PHPUnit_Framework_Assert as PHPUnit;
use Laracasts\Behat\Context\DatabaseTransactions;
/**
 * Defines application features from the specific context.
 */
class FeatureContext extends MinkContext implements Context, SnippetAcceptingContext
{
    /**
     * @Then I should be able to do something with Laravel
     */
    public function iShouldBeAbleToDoSomethingWithLaravel()
    {
        $environmentFileName = app()->environmentFile();
        $environmentName = env('APP_ENV');
        PHPUnit::assertEquals('.env.behat', $environmentFileName);
        PHPUnit::assertEquals('acceptance', $environmentName);
    }

    /**
     * @Given I am not logged in
     */
    public function iAmNotLoggedIn()
    {
        return;
    }

    /**
     * @When I visit :arg1
     */
    public function iVisit($arg1)
    {
        $this->visit('/login');
    }

    /**
     * @Then I should be able to login
     */
    public function iShouldBeAbleToLogin()
    {
        $this->fillField('Email address', 'umohr@terry.org');
        $this->fillField('Password', 'password');
        $this->pressButton('Submit');

        PHPUnit::assertTrue(Auth::check());
    }
}
