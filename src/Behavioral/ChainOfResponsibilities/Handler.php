<?php

namespace DesignPattern\Behavioral\ChainOfResponsibilities;
use Psr\Http\Message\RequestInterface;

/**
 * Class Handler
 * @package DesignPattern\Behavioral\ChainOfResponsibilities
 */
abstract class Handler
{
    private ?Handler $successor;

    /**
     * Handler constructor.
     * @param Handler|null $successor
     */
    public function __construct(?Handler $successor = null)
    {
        $this->successor = $successor;
    }

    /**
     * @param RequestInterface $request
     * @return string|null
     */
    final public function handle(RequestInterface $request): ?string
    {
        $processed = $this->processing($request);

        if ($processed === null && $this->successor !== null) {
            $processed = $this->successor->handle($request);
        }

        return $processed;
    }

    /**
     * @param RequestInterface $request
     * @return string|null
     */
    abstract protected function processing(RequestInterface $request): ?string;
}
