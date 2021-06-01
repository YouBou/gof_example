<?php

namespace DesignPattern\Structural\Adapter;

/**
 * Class Kindle
 * @package DesignPattern\Structural\Adapter
 */
class Kindle implements EBook
{
    /** @var int $page */
    private int $page = 1;
    /** @var int $totalPages */
    private int $totalPages = 100;

    public function pressNext(): void
    {
        $this->page++;
    }

    public function unlock(): void
    {
    }

    /**
     * @return int[]
     */
    public function getPage(): array
    {
        return [$this->page, $this->totalPages];
    }
}
