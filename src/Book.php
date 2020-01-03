<?php declare(strict_types=1);

namespace FlyNowPayLater;

class Book
{
    /**
     * @var array|Address[]
     */
    private $addresses = [];

    /**
     * @param callable $function
     *
     * @return Book
     */
    public function createAddress(callable $function): Book
    {
        $address = new Address();
        $function($address);

        $this->addresses[] = $address;

        return $this;
    }

    /**
     * @return void
     */
    public function render(): void
    {
        $output = $this->generateAddressOutput();

        echo $this->convertOutputToLines($output);
    }

    /**
     * @return array
     */
    protected function generateAddressOutput(): array
    {
        $output = [];

        foreach ($this->addresses as $i => $address) {
            $addressNo = $i + 1;
            $output[] = "Book record: #{$addressNo}";
            $output[] = "Address: $address";
            $output = $this->generateContactsOutput($address, $output);
        }

        return $output;
    }

    /**
     * @param Address $address
     * @param array $output
     *
     * @return array
     */
    protected function generateContactsOutput(Address $address, array $output): array
    {
        foreach ($address->getContacts() as $i => $contact) {
            $contactNo = $i + 1;
            $output[] = "Contact #{$contactNo}: {$contact}";
        }

        return $output;
    }

    /**
     * @param array $output
     *
     * @return string
     */
    protected function convertOutputToLines(array $output): string
    {
        return implode("<br/>", $output);
    }
}
