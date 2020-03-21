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
        $clock = $this->prophesize(Clock::class);
        $clock->getDateTime()->willReturn(new \DateTime('2020-03-21'));

        $this->tomorrow = new Tomorrow($clock->reveal());
    }

    public function testIsInstanceOfTomorrow() : void
    {
        $actual = $this->tomorrow;
        $this->assertInstanceOf(Tomorrow::class, $actual);
    }

    public function testShow(): void
    {
        ob_start();
        $this->tomorrow->show();
        $output = trim(ob_get_clean());

        // 「現在」を「2020-03-21」でモックしているので、いつテストを実行してもパスする.
        $this->assertEquals('2020/03/22', $output);
    }
}
