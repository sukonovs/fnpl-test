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
     * @var array|Contact[]
     */
    private $contacts = [];

    /**
     * @param string $houseNumber
     *
     * @return Address
     */
    public function setHouseNumber(string $houseNumber): Address
    {
        $this->houseNumber = $houseNumber;

        return $this;
    }

    /**
     * @param string $street
     *
     * @return Address
     */
    public function setStreet(string $street): Address
    {
        $this->street = $street;

        return $this;
    }

    /**
     * @param string $city
     *
     * @return Address
     */
    public function setCity(string $city): Address
    {
        $this->city = $city;

        return $this;
    }

    /**
     * @param string $county
     *
     * @return Address
     */
    public function setCounty(string $county): Address
    {
        $this->county = $county;

        return $this;
    }

    /**
     * @param string $postcode
     *
     * @return Address
     */
    public function setPostcode(string $postcode): Address
    {
        $this->postcode = $postcode;

        return $this;
    }

    /**
     * @param string $country
     *
     * @return Address
     */
    public function setCountry(string $country): Address
    {
        $this->country = $country;

        return $this;
    }

    /**
     * @param Contact $contact
     *
     * @return Address
     */
    public function addContact(Contact $contact): Address
    {
        $this->contacts[] = $contact;

        return $this;
    }

    /**
     * @return array|Contact[]
     */
    public function getContacts(): array
    {
        return $this->contacts;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        $parameterSections = [
            ['houseNumber', 'street'],
            ['city'],
            ['county'],
            ['postcode'],
            ['country']
        ];

        $parameterSections = $this->unsetUnprintableParameters($parameterSections);

        return htmlspecialchars($this->constructPrintableString($parameterSections));
    }

    /**
     * @param string $parameter
     *
     * @return bool
     */
    protected function isClassParameterPrintable(string $parameter): bool
    {
        return isset($this->{$parameter}) && is_string($this->{$parameter}) && !empty($this->{$parameter});
    }

    /**
     * @param array $parameterSections
     *
     * @return array
     */
    private function unsetUnprintableParameters(array $parameterSections): array
    {
        foreach ($parameterSections as $i => &$parameterSection) {
            foreach ($parameterSection as $j => $parameter) {
                if (!$this->isClassParameterPrintable($parameter)) {
                    unset($parameterSections[$i][$j]);
                }
            }

            if (empty($parameterSection)) {
                unset($parameterSections[$i]);
            }
        }

        return $parameterSections;
    }

    /**
     * @param array $parameterSections
     *
     * @return string
     */
    protected function constructPrintableString(array $parameterSections): string
    {
        $printableString = '';

        foreach ($parameterSections as $parameterSection) {
            $lastSection = $parameterSection === end($parameterSections);
            foreach ($parameterSection as $parameter) {
                $lastParameterInSection = $parameter === end($parameterSection);

                $printableString .= $this->{$parameter};
                $printableString .= !$lastParameterInSection ? ' ' : '';

                if (!$lastParameterInSection) {
                    continue;
                }

                $printableString .= !$lastSection ? ', ' : '';
            }
        }

        return $printableString;
    }
}
