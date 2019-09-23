<?php
declare(strict_types = 1);

namespace Purplenex\Vinsent;

class WheelRotation extends AbstractDecorator {

	public function getCost()
	{
		return 20;
	}

	public function getDescription()
	{
		return $this->carService->getDescription() . ' and Wheel rotation';
	}
}