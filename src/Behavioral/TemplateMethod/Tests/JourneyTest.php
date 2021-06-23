<?php

namespace DesignPattern\Behavioral\TemplateMethod\Tests;

use DesignPattern\Behavioral\TemplateMethod\BeachJourney;
use DesignPattern\Behavioral\TemplateMethod\CityJourney;
use PHPUnit\Framework\TestCase;

/**
 * Class JourneyTest
 * @package DesignPattern\Behavioral\TemplateMethod\Tests
 */
class JourneyTest extends TestCase
{
    public function testCanGetOnVacationOnTheBeach(): void
    {
        $beachJourney = new BeachJourney();
        $beachJourney->takeATrip();

        self::assertSame(
            [
                'Buy a flight ticket',
                'Taking the plane',
                'Swimming and sun-bathing',
                'Taking the plane'
            ],
            $beachJourney->getThingsToDo()
        );
    }

    public function testCanGetOnAJourneyToACity(): void
    {
        $cityJourney = new CityJourney();
        $cityJourney->takeATrip();

        self::assertSame(
            [
                'Buy a flight ticket',
                'Taking the plane',
                'Eat, drink, take photos and sleep',
                'Buy a gift',
                'Taking the plane'
            ],
            $cityJourney->getThingsToDo()
        );
    }
}