<?php

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
    public function setHouseNumber($houseNumber)
    {
        $this->houseNumber = $houseNumber;
        return $this;
    }

    /**
     * @return string
     */
    public function getHouseNumber()
    {
        return $this->houseNumber;
    }

    /**
     * @param string $street
     * @return Address
     */
    public function setStreet($street)
    {
        $this->street = $street;
        return $this;
    }

    /**
     * @return string
     */
    public function getStreet()
    {
        return $this->street;
    }

    /**
     * @param string $city
     * @return Address
     */
    public function setCity($city)
    {
        $this->city = $city;
        return $this;
    }

    /**
     * @return string
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * @param string $county
     * @return Address
     */
    public function setCounty($county)
    {
        $this->county = $county;
        return $this;
    }

    /**
     * @return string
     */
    public function getCounty()
    {
        return $this->county;
    }

    /**
     * @param string $postcode
     * @return Address
     */
    public function setPostcode($postcode)
    {
        $this->postcode = $postcode;
        return $this;
    }

    /**
     * @return string
     */
    public function getPostcode()
    {
        return $this->postcode;
    }

    /**
     * @param string $country
     * @return Address
     */
    public function setCountry($country)
    {
        $this->country = $country;
        return $this;
    }

    /**
     * @return string
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * @param array $contacts
     * @return Address
     */
    public function setContacts($contacts)
    {
        $this->contacts = $contacts;
        return $this;
    }

    /**
     * @return array
     */
    public function getContacts()
    {
        return $this->contacts;
    }
}
