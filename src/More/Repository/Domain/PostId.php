<?php

namespace DesignPattern\More\Repository\Domain;

use InvalidArgumentException;

/**
 * Class PostId
 * @package DesignPattern\More\Repository\Domain
 */
class PostId
{
    private int $id;

    /**
     * @param int $id
     * @return PostId
     */
    public static function fromInt(int $id): PostId
    {
        self::ensureIsValid($id);
        return new self($id);
    }

    /**
     * PostId constructor.
     * @param int $id
     */
    private function __construct(int $id)
    {
        $this->id = $id;
    }

    /**
     * @return int
     */
    public function toInt(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     * @throws InvalidArgumentException
     */
    private static function ensureIsValid(int $id): void
    {
        if ($id <= 0) {
            throw new InvalidArgumentException('Invalid PostId given');
        }
    }
}