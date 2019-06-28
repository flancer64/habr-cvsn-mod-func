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
        echo "This is func module.\n";
        $base = new \Flancer64\HabrCvN\Base\Lib();
        $base->init();
    }
}