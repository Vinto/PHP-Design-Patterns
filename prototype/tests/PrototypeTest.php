<?php

namespace Purplenex\Vinsent\tests;

use PHPUnit\Framework\TestCase;
use Purplenex\Vinsent\BarBook;
use Purplenex\Vinsent\FooBook;

class PrototypeTest extends TestCase {
	public function testCanCreateBookPrototype()
	{
		$barBookPrototype = new BarBook;

		for ($i = 0; $i < 10; $i++)
		{
			$book = clone $barBookPrototype;
			$book->setTitle('Bar Book number '.$i);
			$this->assertInstanceOf(BarBook::class, $book);
		}

		$fooBookPrototype = new FooBook;

		for ($i = 0; $i < 5; $i++)
		{
			$book = clone $fooBookPrototype;
			$book->setTitle('Foo Book number '.$i);
			$this->assertInstanceOf(FooBook::class, $book);
		}
	}
}