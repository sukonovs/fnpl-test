<?php

use \FlyNowPayLater\Address;
use \Codeception\Test\Unit;

class AddressTest extends Unit
{
    /**
     * @var \UnitTester
     */
    protected $tester;

    public function testPrintsEmptyStringOnInitialization()
    {
        $address = new Address();

        $this->assertEmpty((string)$address);
    }

    public function testPrintsSingleElement()
    {
        $address = new Address();
        $address->setStreet('Street');

        $this->assertEquals('Street', (string)$address);
    }

    public function testPrintsTwoSectionsWithCommaBetween()
    {
        $address = new Address();
        $address->setStreet('Street');
        $address->setCity('City');

        $this->assertEquals('Street, City', (string)$address);
    }

    public function testPrintsTwoElementsWithSpaceBetween()
    {
        $address = new Address();
        $address->setHouseNumber('33');
        $address->setStreet('Street');

        $this->assertEquals('33 Street', (string)$address);
    }

    public function testExampleAddresses()
    {
        $address = new Address();
        $address->setHouseNumber('33');
        $address->setStreet('Market street')->setCity('London');
        $address->setPostCode('EC4 MB5');
        $address->setCounty('Greater London');
        $address->setCountry('GB');

        $this->assertEquals('33 Market street, London, Greater London, EC4 MB5, GB', (string)$address);

        $address = new Address();
        $address->setHouseNumber('22');
        $address->setStreet('Tower street');
        $address->setPostCode('SK4 1HV');
        $address->setCountry('GB');

        $this->assertEquals('22 Tower Street, SK4 1HV, GB', (string)$address);
    }
}
