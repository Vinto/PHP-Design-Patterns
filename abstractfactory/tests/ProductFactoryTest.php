<?php
declare(strict_types = 1);

namespace Purplenex\Vinsent\tests;

use PHPUnit\Framework\TestCase;
use Purplenex\Vinsent\ProductFactory;
use Purplenex\Vinsent\DigitalProduct;
use Purplenex\Vinsent\ShippableProduct;

class ProductFactoryTest extends TestCase {
	
	public function testCanCreateDigitalProduct()
	{
		$factory = new ProductFactory;
		$product = $factory->createDigitalProduct(150);

		$this->AssertInstanceOf(DigitalProduct::class, $product);
	}

	public function testCanCreateShippableProduct()
	{
		$factory = new ProductFactory;
		$product = $factory->createShippableProduct(150);

		$this->AssertInstanceOf(ShippableProduct::class, $product);
	}

	public function testCanCalculateDigitalProductPrice()
	{
		$factory = new ProductFactory;
		$product = $factory->createDigitalProduct(150);

		$this->assertEquals(150, $product->calculatePrice());
	}

	public function testCanCalculateShippableProductPrice()
	{
		$factory = new ProductFactory;
		$product = $factory->createShippableProduct(150);

		$this->assertEquals(210, $product->calculatePrice());
	}
}