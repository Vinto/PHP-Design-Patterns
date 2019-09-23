<?php
declare(strict_types = 1);

namespace Purplenex\Vinsent;

class BasicInspection implements CarService {
	
	public function getCost()
	{
		return 19;
	}

	public function getDescription()
	{
		return 'Basic inspection';
	}
}