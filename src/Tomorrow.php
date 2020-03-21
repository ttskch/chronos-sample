<?php
declare(strict_types=1);

namespace Ttskch\Tomorrow;

class Tomorrow
{
    public function show(): void
    {
        echo (new \DateTime('+1 day'))->format('Y/m/d') . PHP_EOL;
    }
}
