<?php

namespace DesignPattern\Behavioral\ChainOfResponsibilities\Responsible;

use DesignPattern\Behavioral\ChainOfResponsibilities\Handler;

/**
 * Class HttpInMemoryCacheHandler
 * @package DesignPattern\Behavioral\ChainOfResponsibilities\Responsible
 */
class HttpInMemoryCacheHandler extends Handler
{
    private array $data;

    /**
     * HttpInMemoryCacheHandler constructor.
     * @param array $data
     * @param Handler|null $successor
     */
    public function __construct(array $data, ?Handler $successor = null)
    {
        $this->data = $data;
        parent::__construct($successor);
    }

    /**
     * @inheritDoc
     */
    protected function processing(RequestInterface $request): ?string
    {
        $key = sprintf(
            '%s?%s',
            $request->getUri()->getPath(),
            $request->getUri()->getQuery()
        );

        if (isset($this->data[$key]) && $request->getMethod() === 'GET') {
            return $this->data[$key];
        }

        return null;
    }
}
