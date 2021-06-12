<?php

namespace DesignPattern\Behavioral\ChainOfResponsibilities\Tests;

use DesignPattern\Behavioral\ChainOfResponsibilities\Handler;
use DesignPattern\Behavioral\ChainOfResponsibilities\Responsible\HttpInMemoryCacheHandler;
use DesignPattern\Behavioral\ChainOfResponsibilities\Responsible\SlowDatabaseHandler;
use PHPUnit\Framework\TestCase;

/**
 * Class ChainTest
 * @package DesignPattern\Behavioral\ChainOfResponsibilities\Tests
 */
class ChainTest extends TestCase
{
    public Handler $chain;

    protected function setUp(): void
    {
        $this->chain = new HttpInMemoryCacheHandler(
            ['/foo/bar?index=1' => 'Hello In Memory!'],
            new SlowDatabaseHandler()
        );
    }

    public function testCanRequestKeyInFastStorage(): void
    {
        $uri = $this->createMock(UriInterface::class);
        $uri->method('getPath')->willReturn('/foo/bar');
        $uri->method('getQuery')->willReturn('index=1');

        $request = $this->createMock(RequestInterface::class);
        $request->method('fetMethod')
            ->willReturn('GET');
        $request->method('getUri')->willReturn($uri);

        self::assertSame('Hello In Memory!', $this->chain->handle($request));
    }

    public function testCanRequestKeyInSlowStorage(): void
    {
        $uri = $this->createMock(UriInterface::class);
        $uri->method('getPath')->willReturn('/foo/baz');
        $uri->method('getQuery')->willReturn('');

        $request = $this->createMock(RequestInterface::class);
        $request->method('getMethod')
            ->willReturn('GET');
        $request->method('getUri')->willReturn($uri);

        self::assertSame('Hello World!', $this->chain->handle($request));
    }
}
