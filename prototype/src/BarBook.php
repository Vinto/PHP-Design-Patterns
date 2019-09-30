<?php
declare(strict_types = 1);

namespace Purplenex\Vinsent;

use Purplenex\Vinsent\BookPrototype;

class BarBook extends BookPrototype {
	protected $category = 'Bar';

	public function __clone()
	{

	}
}