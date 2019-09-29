<?php
declare(strict_types = 1);

namespace Purplenex\Vinsent;

class SimpleFactory {
	public function createMotorBike() : MotorBike
	{
		return new MotorBike;
	}
}