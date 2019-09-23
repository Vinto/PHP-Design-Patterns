<?php
declare(strict_types = 1);

namespace Purplenex\Vinsent;

use Purplenex\Vinsent\CarService;

abstract class AbstractDecorator implements CarService {

	protected $carService;

	public function __construct(CarService $carService)
	{
		$this->carService = $carService;
	}
}