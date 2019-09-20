<?php
declare(strict_types = 1);

namespace Purplenex\Vinsent;

abstract class Journey {

	protected $thingsToDo = [];

	public function takeTrip()
	{
		$this->thingsToDo[] = $this->obtainVisa();
		$this->thingsToDo[] = $this->findAccommodation();
		$this->thingsToDo[] = $this->buyFlightTicket();
		$this->thingsToDo[] = $this->takeAPlane();
		$this->thingsToDo[] = $this->enjoyVacation();

		$buyGift = $this->buyGifts();

		if ($buyGift !== null)
		{
			$this->thingsToDo[] = $buyGift;
		}

		$this->thingsToDo[] = $this->takeAPlane();
	}

	abstract protected function enjoyVacation() : string;

	public function obtainVisa()
	{
		return 'Obtain a VISA';
	}

	public function findAccommodation()
	{
		return 'Find accommodation';
	}

	public function buyFlightTicket()
	{
		return 'Buy a flight ticket';
	}

	protected function buyGifts()
	{
		return null;
	}

	public function takeAPlane()
	{
		return 'Take a plane';
	}

	public function getThingsToDo(): array
	{
		return $this->thingsToDo;
	}
}