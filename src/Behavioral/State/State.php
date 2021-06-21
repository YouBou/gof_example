<?php

namespace DesignPattern\Behavioral\State;

/**
 * Interface State
 * @package DesignPattern\Behavioral\State
 */
interface State
{
    /**
     * @param OrderContext $context
     */
    public function proceedToNext(OrderContext $context): void;

    /**
     * @return string
     */
    public function toString(): string;
}