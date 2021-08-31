<?php

require_once __DIR__.'/../vendor/autoload.php';

use Shape\Triangle;
use PHPUnit\Framework\TestCase;


class TriangleTest extends TestCase { 
    public function testCalcArea() {
        $triangle = new Triangle();
        $this->assertEquals(525, $triangle->calcArea(30, 35));
    }
}