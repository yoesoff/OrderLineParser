<?php
namespace App\DTO;

use App\DTO\Customer;

class Order
{
    private $orderId;
    private $orderDate;
    private $customer;
    private $items;
    private $discounts;
    private $shippingPrice;

    /**
     * @param $orderId
     * @param $orderDate
     * @param $customer
     * @param $items
     * @param $discounts
     * @param $shippingPrice
     */
    public function __construct($orderId, $orderDate, Customer $customer, $items, $discounts, $shippingPrice)
    {
        $this->orderId = $orderId;
        $this->orderDate = $orderDate;
        $this->customer = $customer;
        $this->items = $items;
        $this->discounts = $discounts;
        $this->shippingPrice = $shippingPrice;
    }

    /**
     * @return mixed
     */
    public function getOrderId()
    {
        return $this->orderId;
    }

    /**
     * @param mixed $orderId
     */
    public function setOrderId($orderId): void
    {
        $this->orderId = $orderId;
    }

    /**
     * @return mixed
     */
    public function getOrderDate()
    {
        return $this->orderDate;
    }

    /**
     * @param mixed $orderDate
     */
    public function setOrderDate($orderDate): void
    {
        $this->orderDate = $orderDate;
    }

    /**
     * @return mixed
     */
    public function getCustomer(): Customer
    {
        return $this->customer;
    }

    /**
     * @param mixed $customer
     */
    public function setCustomer(Customer $customer): void
    {
        $this->customer = $customer;
    }

    /**
     * @return mixed
     */
    public function getItems()
    {
        return $this->items;
    }

    /**
     * @param mixed $items
     */
    public function setItems($items): void
    {
        $this->items = $items;
    }

    /**
     * @return mixed
     */
    public function getDiscounts()
    {
        return $this->discounts;
    }

    /**
     * @param mixed $discounts
     */
    public function setDiscounts($discounts): void
    {
        $this->discounts = $discounts;
    }

    /**
     * @return mixed
     */
    public function getShippingPrice()
    {
        return $this->shippingPrice;
    }

    /**
     * @param mixed $shippingPrice
     */
    public function setShippingPrice($shippingPrice): void
    {
        $this->shippingPrice = $shippingPrice;
    }



}