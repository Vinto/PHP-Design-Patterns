<?php
declare(strict_types = 1);

namespace Purplenex\Vinsent;

abstract class BookPrototype {
	protected $title;

	protected $category;

	abstract public function __clone();

	public function setTitle(string $title)
	{
		$this->title = $title;
	}

	public function getTitle() : string
	{
		return $this->title;
	}
}
