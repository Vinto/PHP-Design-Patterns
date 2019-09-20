<?php
declare(strict_types = 1); 

namespace Purplenex\Vinsent;

class Name {
	
	protected $name;

	public function __construct($name)
	{
		$this->name = $name;
	}

	public function getName() : string
	{
		return $this->name;
	}
}