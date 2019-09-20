<?php

namespace Purplenex\Vinsent\tests;

use PHPUnit\Framework\TestCase;
use Purplenex\Vinsent\BeachJourney;
use Purplenex\Vinsent\CityJourney;

class BeachJourneyTest extends TestCase {

	public function testCanGoOnVacationOnTheBeach()
	{
		$beachJourney = new BeachJourney;
		$beachJourney->takeTrip();

		$this->assertSame(
			[
				'Obtain a VISA', 
				'Find accommodation',
				'Buy a flight ticket',
				'Take a plane',
				'Swimming and sun-bathing',
				'Take a plane',
			], $beachJourney->getThingsToDo()
		);
	}

	public function testCanGoOnVacationInTheCity()
	{
		$cityJourney = new CityJourney;
		$cityJourney->takeTrip();

		$this->assertSame(
			[
				'Obtain a VISA', 
				'Find accommodation',
				'Buy a flight ticket',
				'Take a plane',
				'Eat local cuisine and taste local wine',
				'Buy gifts',
				'Take a plane',
			], $cityJourney->getThingsToDo()
		);
	}
}