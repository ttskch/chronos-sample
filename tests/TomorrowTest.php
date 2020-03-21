<?php
declare(strict_types=1);

namespace Ttskch\Tomorrow;

use Cake\Chronos\Chronos;
use PHPUnit\Framework\TestCase;

class TomorrowTest extends TestCase
{
    /**
     * @var Tomorrow
     */
    protected $tomorrow;

    protected function setUp() : void
    {
        $this->tomorrow = new Tomorrow();
    }

    public function testIsInstanceOfTomorrow() : void
    {
        $actual = $this->tomorrow;
        $this->assertInstanceOf(Tomorrow::class, $actual);
    }

    public function testShow(): void
    {
        Chronos::setTestNow('2020-03-21');

        ob_start();
        $this->tomorrow->show();
        $output = trim(ob_get_clean());

        // 「現在」を「2020-03-21」でモックしているので、いつテストを実行してもパスする.
        $this->assertEquals('2020/03/22', $output);
    }
}
