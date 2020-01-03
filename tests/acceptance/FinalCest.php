<?php 

class FinalCest
{
    public function everythingWorks(AcceptanceTester $I)
    {
        $I->amOnPage('/');
        $I->see('Book record: #1');
        $I->see('Address: 33 Market street, London, Greater London, EC4 MB5, GB');
        $I->see('Contact #1: <john@doe.com> John Doe');
        $I->see('Contact #2: <anna@baker.com> Anna Baker');
        $I->see('Book record: #2');
        $I->see('Address: 22 Tower Street, SK4 1HV, GB');
        $I->see('Contact #1: <dane@rovens.com> Ms Dane Rovens');
    }
}
