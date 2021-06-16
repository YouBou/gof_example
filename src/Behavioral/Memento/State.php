<?php

namespace DesignPattern\Behavioral\Memento;

use Stringable;
use InvalidArgumentException;

/**
 * Class State
 * @package DesignPattern\Behavioral\Memento
 */
class State implements Stringable
{
    const STATE_CREATED  = 'created';
    const STATE_OPENED   = 'opened;';
    const STATE_ASSIGNED = 'assigned';
    const STATE_CLOSED   = 'closed;';

    private string $state;

    /** @var string[] $validStates */
    private static array $validStates = [
        self::STATE_CREATED,
        self::STATE_OPENED,
        self::STATE_ASSIGNED,
        self::STATE_CLOSED,
    ];

    /**
     * State constructor.
     * @param string $state
     */
    public function __construct(string $state)
    {
        self::ensureIsValidState($state);

        $this->state = $state;
    }

    /**
     * @param string $state
     */
    private static function ensureIsValidState(string $state): void
    {
        if (!in_array($state, self::$validStates)) {
            throw new InvalidArgumentException('Invalid state given');
        }
    }

    /**
     * @inheritDoc
     */
    public function __toString(): string
    {
        return $this->state;
    }
}
