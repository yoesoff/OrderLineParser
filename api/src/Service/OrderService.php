<?php
namespace App\Service;

use App\DTO\Customer;
use App\DTO\Order;
use App\DTO\ShippingAddress;

class OrderService
{
    public function test() {
        return "Hallo from service";
    }

    public function buildProduct() {

    }

    public function buildDiscount() {

    }

    public function buildItems() {

    }

    public function buildShippingAddress($shippingAddress): ShippingAddress {
        return new ShippingAddress(
            $shippingAddress["street"],
            $shippingAddress["postcode"],
            $shippingAddress["suburb"],
            $shippingAddress["state"]);
    }

    public function buildCustomer(array $customer): Customer {
        $shippingAddress = $this->buildShippingAddress($customer["shipping_address"]);
        return new Customer(
            $customer["customer_id"],
            $customer["first_name"],
            $customer["last_name"],
            $customer["email"],
            $customer["phone"],
            $shippingAddress);
    }

    public function buildOrder(array $tOrder): Order {
        $customer = $this->buildCustomer($tOrder["customer"]);

        return new Order(
            $tOrder["order_id"],
            $tOrder["order_date"],
            $customer,
            $tOrder["items"],
            $tOrder["discounts"],
            $tOrder["shipping_price"]);
    }
}