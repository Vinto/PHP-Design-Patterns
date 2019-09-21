<?php
declare(strict_types = 1);

namespace Purplenex\Vinsent;

use Purplenex\Vinsent\DigitalProduct;
use Purplenex\Vinsent\ShippableProduct;

class ProductFactory {
	
	const SHIPPING_COSTS = 60;

	public function createDigitalProduct(int $price) : Product
	{
		return new DigitalProduct($price);
	}

	public function createShippableProduct(int $price) : Product
	{
		return new ShippableProduct($price, self::SHIPPING_COSTS);
	}
}