<?php

namespace DesignPattern\Structural\FluentInterface;

use Stringable;

/**
 * Class Sql
 * @package DesignPattern\Structural\FluentInterface
 */
class Sql implements Stringable
{
    /** @var array $fields */
    private array $fields = [];
    /** @var array $from */
    private array $from = [];
    /** @var array $where */
    private array $where = [];

    /**
     * @param array $fields
     * @return $this
     */
    public function select(array $fields): self
    {
        $this->fields = $fields;

        return $this;
    }

    /**
     * @param string $table
     * @param string $alias
     * @return $this
     */
    public function from(string $table, string $alias): self
    {
        $this->from[] = $table . ' AS ' . $alias;

        return $this;
    }

    /**
     * @param string $condition
     * @return $this
     */
    public function where(string $condition): self
    {
        $this->where[] = $condition;

        return $this;
    }

    /**
     * @inheritDoc
     */
    public function __toString(): string
    {
        return sprintf(
            'SELECT %s FROM %s WHERE %s',
            implode(', ', $this->fields),
            implode(', ', $this->from),
            implode(', ', $this->where)
        );
    }
}
