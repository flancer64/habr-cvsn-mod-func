<?php
/**
 * Authors: Alex Gusev <alex@flancer64.com>
 * Since: 2019
 */

namespace Flancer64\HabrCvN\Func;


class Lib
{
    public function exec()
    {
        $base = new \Flancer64\HabrCvN\Base\Lib();
        $base->init();
        echo "This is func module.";
    }
}