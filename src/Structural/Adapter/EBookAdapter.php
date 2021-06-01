<?php

namespace DesignPattern\Structural\Adapter;

/**
 * Class EBookAdapter
 * @package DesignPattern\Structural\Adapter
 */
class EBookAdapter implements Book
{
    /** @var EBook $eBook */
    protected $eBook;

    /**
     * EBookAdapter constructor.
     * @param EBook $eBook
     */
    public function __construct(EBook $eBook)
    {
        $this->eBook = $eBook;
    }

    public function open(): void
    {
        $this->eBook->unlock();
    }

    public function turnPage(): void
    {
        $this->eBook->pressNext();
    }

    /**
     * @return int
     */
    public function getPage(): int
    {
        return $this->eBook->getPage()[0];
    }
}
