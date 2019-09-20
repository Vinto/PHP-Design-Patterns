<?php

use Purplenex\Vinsent\Name;
use PHPUnit\Framework\TestCase;

class NameTest extends TestCase {

	public function testCanCreateName() {
		$name = new Name('Vinny');

		$this->assertInstanceOf(Name::class, $name);
	}
}