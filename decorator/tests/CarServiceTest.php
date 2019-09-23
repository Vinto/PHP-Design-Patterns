<?php

namespace Purplenex\Vinsent\tests;

use PHPUnit\Framework\TestCase;
use Purplenex\Vinsent\OilChange;
use Purplenex\Vinsent\WheelRotation;
use Purplenex\Vinsent\BasicInspection;

class CarServiceTest extends TestCase {
	
	public function testCanCreateBasicInspectionCost()
	{
		$basicInspection = new BasicInspection;
		$this->assertSame(19, $basicInspection->getCost());
	}

	public function testCanCreateBasicInspectionDescription()
	{
		$basicInspection = new BasicInspection;
		$this->assertSame('Basic inspection', $basicInspection->getDescription());
	}

	public function testCanCreateBasicInspectionAndOilChangeCost()
	{
		$oilChangeAndBasicInspection = new OilChange(new BasicInspection());
		$this->assertSame(30, $oilChangeAndBasicInspection->getCost());
	}

	public function testCanCreateBasicInspectionAndOilChangeDescription()
	{
		$oilChangeAndBasicInspection = new OilChange(new BasicInspection());
		$this->assertSame('Basic inspection and Oil change', $oilChangeAndBasicInspection->getDescription());
	}

	public function testCanCreateBasicInpsectionAndOilChangeAndWheelRotationCost()
	{
		$basicInspectionAndOilChangeAndWheelRotation = new WheelRotation(new OilChange(new BasicInspection));
		$this->assertSame(50, $basicInspectionAndOilChangeAndWheelRotation->getCost());
	}

	public function testCanCreateBasicInpsectionAndOilChangeAndWheelRotationDescription()
	{
		$basicInspectionAndOilChangeAndWheelRotation = new WheelRotation(new OilChange(new BasicInspection));
		$this->assertSame('Basic inspection and Oil change and Wheel rotation', $basicInspectionAndOilChangeAndWheelRotation->getDescription());
	}
}