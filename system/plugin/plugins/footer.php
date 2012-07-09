<?php

/**
 * duckPHP
 *
 * @author     Quackster <quacky@winterpartys.org>
 * @copyright  2012 - (and beyond) Quackster.NET
 * @license    http://philsturgeon.co.uk/code/dbad-license/  Don't Be A Dick 1.0
 * @link       http://github.com/Quackster/duckPHP
 */

class footer implements quackPlugin
{
    public function onEnable()
    {
        echo "<!-- Enabling plugin: " . $this->name() . " -->\n";
    }
    
    public function onEcho()
    {
        return "<i>QuackPlugin</i> made by Quackster";
    }
}

?>