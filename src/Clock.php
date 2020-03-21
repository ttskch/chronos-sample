<?php
declare(strict_types=1);

namespace Ttskch\Tomorrow;

class Clock
{
    public function getDateTime(): \DateTime
    {
        return new \DateTime();
    }
}
