<?php

namespace DesignPattern\Structural\Composite\Tests;

use DesignPattern\Structural\Composite\Form;
use DesignPattern\Structural\Composite\InputElement;
use DesignPattern\Structural\Composite\TextElement;
use PHPUnit\Framework\TestCase;

/**
 * Class CompositeTest
 * @package DesignPattern\Structural\Composite\Tests
 */
class CompositeTest extends TestCase
{
    public function testRender(): void
    {
        $form = new Form();
        $form->addElement(new TextElement('Email:'));
        $form->addElement(new InputElement());

        $embed = new Form();
        $embed->addElement(new TextElement('Password:'));
        $embed->addElement(new InputElement());

        $form->addElement($embed);

        self::assertSame(
            '<form>Email:<input type="text" /><form>Password:<input type="text" /></form></form>',
            $form->render()
        );
    }
}
