<?php

namespace Paleo9\Classes;

/**
 * Class Db
 * @author Stephen Wardill <s5n.wardill@gmail.com>
 */
class Db
{
    /**
     * @param mixed $dependencies
     */
    public function __construct($dependencies)
    {
        $this->dependencies = $dependencies;
    }

    public function add($first, $second)
    {
        return $first + $second;
    }
}
