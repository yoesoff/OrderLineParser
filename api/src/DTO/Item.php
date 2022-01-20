<?php
namespace App\DTO;

class Item
{
    private $quantity;
    private $unitPrice;
    private $product;

    /**
     * @param $quantity
     * @param $unitPrice
     * @param $product
     */
    public function __construct($quantity, $unitPrice, $product)
    {
        $this->quantity = $quantity;
        $this->unitPrice = $unitPrice;
        $this->product = $product;
    }


    /**
     * @return mixed
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * @param mixed $quantity
     */
    public function setQuantity($quantity): void
    {
        $this->quantity = $quantity;
    }

    /**
     * @return mixed
     */
    public function getUnitPrice()
    {
        return $this->unitPrice;
    }

    /**
     * @param mixed $unitPrice
     */
    public function setUnitPrice($unitPrice): void
    {
        $this->unitPrice = $unitPrice;
    }

    /**
     * @return mixed
     */
    public function getProduct()
    {
        return $this->product;
    }

    /**
     * @param mixed $product
     */
    public function setProduct($product): void
    {
        $this->product = $product;
    }


}