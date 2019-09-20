<?php
declare(strict_types = 1);

namespace Purplenex\Vinsent;

class CityJourney extends Journey {

	protected function enjoyVacation(): string
	{
		return 'Eat local cuisine and taste local wine';
	}

	protected function buyGifts()
	{
		return 'Buy gifts';
	}
}