<?php

namespace PHPunit;

use PHPUnit\Framework\TestCase;
use Paleo9\Classes\Db;

/**
 * Class DbTest
 * @author Stephen Wardill <s5n.wardill@gmail.com>
 */
class DbTest extends TestCase
{
    /**
     * @param mixed $dependencies
     */
    public function testConstructorWorksCorrectly()
    {
        $this->dependencies = $dependencies;
    }

    public function testAdd()
    {
        $db = new Db();
        $expected = 5;
        $actual = $db->add(2, 3);
        $this->assertEquals($actual, $expected);
    }
}
