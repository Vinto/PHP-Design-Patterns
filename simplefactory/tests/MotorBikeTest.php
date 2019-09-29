<?php

use PHPUnit\Framework\TestCase;
use Purplenex\Vinsent\MotorBike;
use Purplenex\Vinsent\SimpleFactory;

class MotorBikeTest extends TestCase {
	public function testCanCreateMotorbike()
	{
		$motorBike = (new SimpleFactory)->createMotorBike();

		$this->assertInstanceOf(MotorBike::class, $motorBike);
	}
}