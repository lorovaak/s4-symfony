<?php


class FirstCest
{
    public function _before(AcceptanceTester $I)
    {
    }

    public function _after(AcceptanceTester $I)
    {
    }

    // tests
    public function tryToTest(AcceptanceTester $I)
    {
        
        $I->amOnPage('/cv');
        $I->see('laura');
        $I->see('Ajouter une experience');
    }
}
