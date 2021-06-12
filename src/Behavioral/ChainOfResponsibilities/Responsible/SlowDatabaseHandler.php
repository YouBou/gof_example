<?php

namespace DesignPattern\Behavioral\ChainOfResponsibilities\Responsible;

use DesignPattern\Behavioral\ChainOfResponsibilities\Handler;

/**
 * Class SlowDatabaseHandler
 * @package DesignPattern\Behavioral\ChainOfResponsibilities\Responsible
 */
class SlowDatabaseHandler extends Handler
{
    /**
     * @inheritDoc
     */
    protected function processing(RequestInterface $request): ?string
    {
        return 'Hello World!';
    }
}
