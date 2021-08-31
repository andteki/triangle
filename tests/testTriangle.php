<?php

require_once __DIR__.'/../vendor/autoload.php';

use Shape\Triangle;
use SebastianBergmann\Timer\Timer;

$timer = new Timer;
$timer->start();

echo Triangle::calcArea(30, 35) . "\n";

$duration = $timer->stop();

print $duration->asSeconds() . "\n";