<?php 

class FinalCest
{
    public function everythingWorks(AcceptanceTester $I)
    {
        $expectedText = <<<EOT
Address: 33 Market street, London, Greater London, EC4 MB5, GB
Contact #1: <john@doe.com> John Doe 
Contact #2: <anna@baker.com> Anna Baker
Book record: #2
Address: 22 Tower Street, SK4 1HV, GB
Contact #1: <dane@rovens.com> Ms Dane Rovens
EOT;

        $I->amOnPage('/');
        $I->see($expectedText);
    }
}
