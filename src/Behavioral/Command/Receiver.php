<?php

namespace DesignPattern\Behavioral\Command;

/**
 * Class Receiver
 * @package DesignPattern\Behavioral\Command
 */
class Receiver
{
    private bool $enableDate = false;
    /** @var string[] $output */
    private array $output = [];

    /**
     * @param string $str
     */
    public function write(string $str): void
    {
        if ($this->enableDate) {
            $str .= ' ['.date('Y-m-d').']';
        }

        $this->output[] = $str;
    }

    /**
     * @return string
     */
    public function getOutput(): string
    {
        return implode("\n", $this->output);
    }

    public function enableDate(): void
    {
        $this->enableDate = true;
    }

    public function disableDate(): void
    {
        $this->enableDate = false;
    }
}
