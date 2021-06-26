<?php

namespace DesignPattern\More\Repository\Domain;

use InvalidArgumentException;

/**
 * Class PostStatus
 * @package DesignPattern\More\Repositor\Domain
 */
class PostStatus
{
    const STATE_DRAFT_ID = 1;
    const STATE_PUBLISHED_ID = 2;
    const STATE_DRAFT = 'draft';
    const STATE_PUBLISHED = 'published';

    private static array $validStates = [
      self::STATE_DRAFT_ID => self::STATE_DRAFT,
      self::STATE_PUBLISHED_ID => self::STATE_PUBLISHED
    ];

    private int $id;
    private string $name;

    /**
     * @param int $statusId
     * @return PostStatus
     */
    public static function fromInt(int $statusId): self
    {
        self::ensureisValidId($statusId);

        return new self($statusId, self::$validStates[$statusId]);
    }

    /**
     * @param string $status
     * @return static
     * @throws InvalidArgumentException
     */
    public static function fromString(string $status): self
    {
        self::ensureisValidname($status);
        $state = array_search($status, self::$validStates);

        if (!$state) {
            throw new InvalidArgumentException('Invalid state given!');
        }

        return new self($state, $status);
    }

    /**
     * PostStatus constructor.
     * @param int $id
     * @param string $name
     */
    private function __construct(int $id, string $name)
    {
        $this->id = $id;
        $this->name = $name;
    }

    /**
     * @return int
     */
    public function toInt(): int
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function toString(): string
    {
        return $this->name;
    }

    /**
     * @param int $status
     * @throws InvalidArgumentException
     */
    private static function ensureIsValidId(int $status): void
    {
        if (!array_key_exists($status, self::$validStates)) {
            throw new InvalidArgumentException('Invalid status id given');
        }
    }

    /**
     * @param string $status
     * @throws InvalidArgumentException
     */
    private static function ensureIsValidName(string $status): void
    {
        if (!in_array($status, self::$validStates, true)) {
            throw new InvalidArgumentException('Invalid status name given');
        }
    }
}