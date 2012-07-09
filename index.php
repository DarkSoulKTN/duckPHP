<?php

/**
 * duckPHP
 *
 * @author     Quackster <quacky@winterpartys.org>
 * @copyright  2012 - (and beyond) Quackster.NET
 * @license    http://philsturgeon.co.uk/code/dbad-license/  Don't Be A Dick 1.0
 * @link       http://github.com/Quackster/duckPHP
 */

include "global.php";

/*
 * Load index page
 */
$tpl->page("index");

/*
 * Set some misc variables
 */
$tpl->param("email", "duckphp@quackster.net");

/*
 * Replace plugin tag with the chosen class name
 */
$tpl->plugin("footer");
$tpl->plugin("mysql");

/*
 * Output the contents
 */
$tpl->display();

?>