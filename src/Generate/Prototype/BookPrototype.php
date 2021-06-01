<?php

namespace DesignPattern\Generate\Prototype;

/**
 * Class BookPrototype
 * @package DesignPattern\Generate\Prototype
 */
abstract class BookPrototype
{
    /** @var string $title */
    protected string $title;

    /** @var string $category */
    protected string $category;

    abstract public function __clone();

    /**
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * @param string $title
     */
    public function setTitle(string $title): void
    {
        $this->title = $title;
    }
}