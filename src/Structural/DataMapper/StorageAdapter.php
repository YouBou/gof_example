<?php

namespace DesignPattern\Structural\DataMapper;

/**
 * Class StorageAdapter
 * @package DesignPattern\Structural\DataMapper
 */
class StorageAdapter
{
    /** @var array $data */
    private array $data;

    /**
     * StorageAdapter constructor.
     * @param array $data
     */
    public function __construct(array $data)
    {
        $this->data = $data;
    }

    /**
     * @param int $id
     * @return array|null
     */
    public function find(int $id): ?array
    {
        return $this->data[$id] ?? null;
    }
}
