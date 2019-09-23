<?php 
declare(strict_types = 1);

namespace Purplenex\Vinsent;

class OilChange extends AbstractDecorator {
	
	private const PRICE = 11;

	public function getCost()
	{
		return self::PRICE + $this->carService->getCost();
	}

	public function getDescription()
	{
		return $this->carService->getDescription() . ' and Oil change';
	}
}