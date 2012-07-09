<?php

/**
 * duckPHP
 *
 * @author     Quackster <quacky@winterpartys.org>
 * @copyright  2012 - (and beyond) Quackster.NET
 * @license    http://philsturgeon.co.uk/code/dbad-license/  Don't Be A Dick 1.0
 * @link       http://github.com/Quackster/duckPHP
 */

interface quackPlugin
{
    function onEnable();
    function onEcho();
}