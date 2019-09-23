<?php 
declare(strict_types = 1);

namespace Purplenex\Vinsent;

class OilChange extends AbstractDecorator {

	public function getCost()
	{
		return 11 + $this->carService->getCost();
	}

	public function getDescription()
	{
		return $this->carService->getDescription() . ' and Oil change';
	}
}