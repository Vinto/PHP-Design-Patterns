<?php
declare(strict_types = 1);

namespace Purplenex\Vinsent;

class MotorBike {
	public function rideTo(string $destination) : string
	{
		return 'Ride to '.$destination;
	}
}