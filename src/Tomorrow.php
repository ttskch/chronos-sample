<?php
declare(strict_types=1);

namespace Ttskch\Tomorrow;

use Cake\Chronos\Chronos;

class Tomorrow
{
    public function show(): void
    {
        echo (new Chronos('+1 day'))->format('Y/m/d') . PHP_EOL;
    }
}
