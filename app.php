<?php
declare(strict_types=1);

use Ttskch\Tomorrow\Clock;
use Ttskch\Tomorrow\Tomorrow;

require __DIR__ . '/vendor/autoload.php';

$tomorrow = new Tomorrow(new Clock());

$tomorrow->show();
