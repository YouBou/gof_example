<?php

namespace DesignPattern\Structural\DataMapper;

use InvalidArgumentException;

/**
 * Class UserMapper
 * @package DesignPattern\Structural\DataMapper
 */
class UserMapper
{
    /** @var StorageAdapter $adapter */
    private StorageAdapter $adapter;

    /**
     * UserMapper constructor.
     * @param StorageAdapter $adapter
     */
    public function __construct(StorageAdapter $adapter)
    {
        $this->adapter = $adapter;
    }

    /**
     * @param int $id
     * @return User
     */
    public function findById(int $id):User
    {
        $result = $this->adapter->find($id);

        if ($result === null) {
            throw new InvalidArgumentException("UserId $id not found");
        }

        return $this->mapRowToUser($result);
    }

    /**
     * @param array $row
     * @return User
     */
    private function mapRowToUser(array $row): User
    {
        return User::fromState($row);
    }
}
