<?php

class Customer
{
    public string $firstName;
    public string $lastName;
    public array $address;

    /**
     * @return string
     */
    public function getFullName(): string
    {
        return $this->firstName . ' ' . $this->lastName;
    }

    /**
     * @return array
     */
    public function getAddress(): array
    {
        return $this->address;
    }

}

class Item
{
    public string $name;
    public string $quantity;
    public string $price;
    const TAX_RATE = 0.07;
    public float $shippingRate = 0.05;
    /**
     * @return float
     */
    public function getEachItemsPrice($item): float
    {
        return ($item->quantity * $item->price) * (1 + self::TAX_RATE) * (1 + $this->shippingRate);
    }

    /**
     * @return float
     */
    public function getTotalPrice($items): float
    {
        $cost = 0;
        foreach ($items as $item) {
            $cost += $this->getEachItemsPrice($item);
        }
        return $cost;
    }
}
/**
 * Due to insufficient info about Cart and Order some  requested results have not been implemented
 */