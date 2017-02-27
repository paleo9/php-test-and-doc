<?php

namespace PHPunit;

use PHPUnit\Framework\TestCase;
use Paleo9\Classes\Controller;

/**
 * Class ControllerTest
 * @author Stephen Wardill <s5n.wardill@gmail.com>
 */
class ControllerTest extends TestCase
{
    public function testAdd()
    {
        $controller = new Controller();
        $expected = 5;
        $actual = $controller->add(2, 3);
        $this->assertEquals($actual, $expected);
    }
}
