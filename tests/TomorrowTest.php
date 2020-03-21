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

    public function testShow(): void
    {
        ob_start();
        $this->tomorrow->show();
        $output = trim(ob_get_clean());

        // 2020/03/21 以外の日にテストを実行すると失敗する.
        $this->assertEquals('2020/03/22', $output);
    }
}
