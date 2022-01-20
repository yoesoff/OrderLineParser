<?php
namespace App\DTO;

class ShippingAddress
{
    private $street;
    private $postcode;
    private $suburb;
    private $state;

    /**
     * @param $street
     * @param $postcode
     * @param $suburb
     * @param $state
     */
    public function __construct($street, $postcode, $suburb, $state)
    {
        $this->street = $street;
        $this->postcode = $postcode;
        $this->suburb = $suburb;
        $this->state = $state;
    }

    /**
     * @return mixed
     */
    public function getStreet()
    {
        return $this->street;
    }

    /**
     * @param mixed $street
     */
    public function setStreet($street): void
    {
        $this->street = $street;
    }

    /**
     * @return mixed
     */
    public function getPostcode()
    {
        return $this->postcode;
    }

    /**
     * @param mixed $postcode
     */
    public function setPostcode($postcode): void
    {
        $this->postcode = $postcode;
    }

    /**
     * @return mixed
     */
    public function getSuburb()
    {
        return $this->suburb;
    }

    /**
     * @param mixed $suburb
     */
    public function setSuburb($suburb): void
    {
        $this->suburb = $suburb;
    }

    /**
     * @return mixed
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * @param mixed $state
     */
    public function setState($state): void
    {
        $this->state = $state;
    }

}