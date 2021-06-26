<?php

namespace DesignPattern\More\Repository;

use OutOfBoundsException;

/**
 * Interface Persistence
 * @package DesignPattern\More\Repository
 */
interface Persistence
{
    /**
     * @return int
     */
    public function generateId(): int;

    /**
     * @param array $data
     */
    public function persist(array $data): void;

    /**
     * @param int $id
     * @return array
     * @throws OutOfBoundsException
     */
    public function retrieve(int $id): array;

    /**
     * @param int $id
     * @throws OutOfBoundsException
     */
    public function delete(int $id): void;
}
