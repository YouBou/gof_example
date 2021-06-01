<?php

namespace DesignPattern\Structural\Adapter;

/**
 * Class PaperBook
 * @package DesignPattern\Structural\Adapter
 */
class PaperBook implements Book
{
    /** @var int $page */
    private int $page;

    public function open(): void
    {
        $this->page = 1;
    }

    public function turnPage(): void
    {
        $this->page++;
    }

    /**
     * @return int
     */
    public function getPage(): int
    {
        return $this->page;
    }
}
