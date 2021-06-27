<?php

namespace DesignPattern\More\EntityAttributeValue\Tests;

use DesignPattern\More\EntityAttributeValue\Attribute;
use PHPUnit\Framework\TestCase;

/**
 * Class EAVTest
 * @package DesignPattern\More\EntityAttributeValue\Tests
 */
class EAVTest extends TestCase
{
    public function testCanAddAttributeToEntity(): void
    {
        $colorAttribute = new Attribute('color');
        $colorSilver = new Value($colorAttribute, 'silver');
        $colorBlack = new Value($colorAttribute, 'black');

        $memoryAttribute = new Attribute('memory');
        $memory8Gb = new Value($memoryAttribute, '8GB');

        $entity = new Entity('MacBook Pro', [$colorSilver, $colorBlack, $memory8Gb]);

        self::assertEquals('MackBook Pro, color: silver, color: black, memory: 8GB', (string) $entity);
    }
}