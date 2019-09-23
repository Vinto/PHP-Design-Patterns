<?php
declare(strict_types = 1);

namespace Purplenex\Vinsent;

class WheelRotation extends AbstractDecorator {

	private const PRICE = 20;

	public function getCost()
	{
		return self::PRICE + $this->carService->getCost();
	}

	public function getDescription()
	{
		return $this->carService->getDescription() . ' and Wheel rotation';
	}
}