<?php

namespace DesignPattern\Behavioral\Interpreter\Tests;

use DesignPattern\Behavioral\Interpreter\AndExp;
use DesignPattern\Behavioral\Interpreter\Context;
use DesignPattern\Behavioral\Interpreter\OrExp;
use DesignPattern\Behavioral\Interpreter\VariableExp;
use PHPUnit\Framework\TestCase;

/**
 * Class InterpreterTest
 * @package DesignPattern\Behavioral\Interpreter\Tests
 */
class InterpreterTest extends TestCase
{
    private Context $context;
    private VariableExp $a;
    private VariableExp $b;
    private VariableExp $c;

    public function setUp(): void
    {
        $this->context = new Context();
        $this->a = new VariableExp('A');
        $this->b = new VariableExp('B');
        $this->c = new VariableExp('C');
    }

    public function testOr(): void
    {
        $this->context->assign($this->a, false);
        $this->context->assign($this->b, false);
        $this->context->assign($this->c, true);

        $exp1 = new OrExp($this->a, $this->b);
        $result1 = $exp1->interpret($this->context);

        self::assertFalse($result1, 'A v B must false');

        $exp2 = new OrExp($exp1, $this->c);
        $result2 = $exp2->interpret($this->context);

        self::assertTrue($result2, '(A v B) v C must true');
    }

    public function testAnd(): void
    {
        $this->context->assign($this->a, true);
        $this->context->assign($this->b, true);
        $this->context->assign($this->c, false);

        $exp1 = new AndExp($this->a, $this->b);
        $result1 = $exp1->interpret($this->context);

        self::assertTrue($result1, 'A ∧ B must true');

        $exp2 = new AndExp($exp1, $this->c);
        $result2 = $exp2->interpret($this->context);

        self::assertFalse($result2, '(A ∧ B) ∧ C must false');
    }
}
