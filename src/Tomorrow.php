<?php
declare(strict_types=1);

namespace Ttskch\Tomorrow;

class Tomorrow
{
    /**
     * @var Clock
     */
    private $clock;

    public function __construct(Clock $clock)
    {
        $this->clock = $clock;
    }

    public function show(): void
    {
        $now = $this->clock->getDateTime();
        $tomorrow = $now->modify('+1 day');

        echo $tomorrow->format('Y/m/d') . PHP_EOL;
    }
}
