<?php
declare(strict_types = 1);

namespace Purplenex\Vinsent;

interface Product 
{
	public function calculatePrice() : int;
}