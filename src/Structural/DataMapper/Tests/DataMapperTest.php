<?php

namespace DesignPattern\Structural\DataMapper\Tests;

use DesignPattern\Structural\DataMapper\StorageAdapter;
use DesignPattern\Structural\DataMapper\User;
use DesignPattern\Structural\DataMapper\UserMapper;
use PHPUnit\Framework\TestCase;
use InvalidArgumentException;

/**
 * Class DataMapperTest
 * @package DesignPattern\Structural\DataMapper\Tests
 */
class DataMapperTest extends TestCase
{
    public function testCanMapUserFromStorage(): void
    {
        $storage = new StorageAdapter(
            [
                1 => [
                    'username' => 'domnikl',
                    'email' => 'liebler.dominik@gmail.com'
                ]
            ],
        );
        $mapper = new UserMapper($storage);

        $user = $mapper->findById(1);

        self::assertInstanceOf(User::class, $user);
    }

    public function testWillNotMapInvalidData(): void
    {
        $this->expectException(InvalidArgumentException::class);

        $storage = new StorageAdapter([]);
        $mapper = new UserMapper($storage);

        $mapper->findById(1);
    }
}
