<?php declare(strict_types=1);

namespace FlyNowPayLater;

class Address
{
    /**
     * @var string
     */
    private $houseNumber = '';

    /**
     * @var string
     */
    private $street = '';

    /**
     * @var string
     */
    protected $city = '';

    /**
     * @var string
     */
    protected $county = '';

    /**
     * @var string
     */
    public $postcode = '';

    /**
     * @var string
     */
    public $country = '';

    /**
     * @var array
     */
    private $contacts = [];

    /**
     * @param string $houseNumber
     * @return Address
     */
    public function setHouseNumber(string $houseNumber): Address
    {
        $this->houseNumber = $houseNumber;
        return $this;
    }

    /**
     * @return string
     */
    public function getHouseNumber(): string
    {
        return $this->houseNumber;
    }

    /**
     * @param string $street
     * @return Address
     */
    public function setStreet(string $street): Address
    {
        $this->street = $street;
        return $this;
    }

    /**
     * @return string
     */
    public function getStreet(): string
    {
        return $this->street;
    }

    /**
     * @param string $city
     * @return Address
     */
    public function setCity(string $city): Address
    {
        $this->city = $city;
        return $this;
    }

    /**
     * @return string
     */
    public function getCity(): string
    {
        return $this->city;
    }

    /**
     * @param string $county
     * @return Address
     */
    public function setCounty(string $county): Address
    {
        $this->county = $county;
        return $this;
    }

    /**
     * @return string
     */
    public function getCounty(): string
    {
        return $this->county;
    }

    /**
     * @param string $postcode
     * @return Address
     */
    public function setPostcode(string $postcode): Address
    {
        $this->postcode = $postcode;
        return $this;
    }

    /**
     * @return string
     */
    public function getPostcode(): string
    {
        return $this->postcode;
    }

    /**
     * @param string $country
     * @return Address
     */
    public function setCountry(string $country): Address
    {
        $this->country = $country;
        return $this;
    }

    /**
     * @return string
     */
    public function getCountry(): string
    {
        return $this->country;
    }

    /**
     * @param array $contacts
     * @return Address
     */
    public function setContacts(array $contacts): Address
    {
        $this->contacts = $contacts;
        return $this;
    }

    /**
     * @return array
     */
    public function getContacts(): array
    {
        return $this->contacts;
    }
}
