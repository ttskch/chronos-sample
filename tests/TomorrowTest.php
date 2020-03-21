<?php

declare(strict_types=1);

namespace Ttskch\Tomorrow;

use PHPUnit\Framework\TestCase;

class TomorrowTest extends TestCase
{
    /**
     * @var Tomorrow
     */
    protected $tomorrow;

    protected function setUp() : void
    {
        $this->tomorrow = new Tomorrow;
    }

    public function testIsInstanceOfTomorrow() : void
    {
        $actual = $this->tomorrow;
        $this->assertInstanceOf(Tomorrow::class, $actual);
    }
}
