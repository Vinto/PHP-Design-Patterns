<?php
declare(strict_types = 1);

namespace Purplenex\Vinsent;

class ShippableProduct implements Product {
	
	protected $price;
	protected $shippingCosts;

	public function __construct(int $price, int $shippingCosts)
	{
		$this->price = $price;
		$this->shippingCosts = $shippingCosts;
	}

	public function calculatePrice(): int
	{
		return $this->price + $this->shippingCosts;
	}
}