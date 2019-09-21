<?php
declare(strict_types = 1);

namespace Purplenex\Vinsent;

class DigitalProduct implements Product {

	protected $price;

	public function __construct(int $price)
	{
		$this->price = $price;
	}

	public function calculatePrice() : int
	{
		return $this->price;
	}
}