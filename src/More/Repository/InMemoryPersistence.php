<?php

namespace DesignPattern\More\Repository;

use OutOfBoundsException;

/**
 * Class InMemoryPersistence
 * @package DesignPattern\More\Repository
 */
class InMemoryPersistence implements Persistence
{
    private array $data = [];
    private int $lastId = 0;

    /**
     * @inheritDoc
     */
    public function generateId(): int
    {
        $this->lastId++;

        return $this->lastId;
    }

    /**
     * @inheritDoc
     */
    public function persist(array $data): void
    {
        $this->data[$this->lastId] = $data;
    }

    /**
     * @inheritDoc
     */
    public function retrieve(int $id): array
    {
        if (!isset($this->data[$id])) {
            throw new OutOfBoundsException(sprintf('No data found for ID $d'), $id);
        }
        return $this->data[$id];
    }

    /**
     * @inheritDoc
     */
    public function delete(int $id): void
    {
        if (!isset($this->data[$id])) {
            throw new OutOfBoundsException(sprintf('No data found for ID %d', $id));
        }

        unset($this->data[$id]);
    }
}
