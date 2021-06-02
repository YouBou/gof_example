<?php

namespace DesignPattern\Structural\Bridge\Tests;

use DesignPattern\Structural\Bridge\HelloWorldService;
use DesignPattern\Structural\Bridge\HtmlFormatter;
use DesignPattern\Structural\Bridge\PlainTextFormatter;
use PHPUnit\Framework\TestCase;

/**
 * Class BridgeTest
 * @package DesignPattern\Structural\Bridge\Tests
 */
class BridgeTest extends TestCase
{
    public function testCanPrintUsingThePlainTextFormatter(): void
    {
        $service = new HelloWorldService(new PlainTextFormatter());

        self::assertSame('Hello World', $service->get());
    }

    public function testCanPrintusingTheHtmlFormatter(): void
    {
        $service = new HelloWorldService(new HtmlFormatter());

        self::assertSame('<p>Hello World</p>', $service->get());
    }
}