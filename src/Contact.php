<?php

namespace FlyNowPayLater;

class Contact
{
    /**
     * @var string
     */
    private $name = '';

    /**
     * @var string
     */
    public $email = '';

    /**
     * @param string $name
     *
     * @return Contact
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @param string $email
     *
     * @return Contact
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return htmlspecialchars("<{$this->email}> $this->name");
    }
}
