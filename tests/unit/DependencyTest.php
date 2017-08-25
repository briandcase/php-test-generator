<?php

declare(strict_types=1);

namespace Mihaeu\TestGenerator;

use PHPUnit\Framework\TestCase;

/**
 * @covers Mihaeu\TestGenerator\Dependency
 */
class DependencyTest extends TestCase
{
    public function testHasName() : void
    {
        assertEquals('test', (new Dependency('test'))->name());
    }

    public function testHasType() : void
    {
        assertEquals('int', (new Dependency('test', 'int'))->type());
    }

    public function testHasValue() : void
    {
        assertEquals('3.1415', (new Dependency('test', null, '3.1415'))->value());
    }
}
