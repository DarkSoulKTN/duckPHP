<?php

include "global.php";

/*
 * Load index page
 */
$tpl->load("index");

/*
 * Set some misc variables
 */
$tpl->set("email", "quackphp@quackster.net");

/*
 * Replace plugin tag with the chosen class name
 */
$tpl->plugin("footer");

/*
 * Output the contents
 */
$tpl->display();

?>