<?php

/**
 * duckPHP
 *
 * @author     Quackster <quacky@winterpartys.org>
 * @copyright  2012 - (and beyond) Quackster.NET
 * @license    http://philsturgeon.co.uk/code/dbad-license/  Don't Be A Dick 1.0
 * @link       http://github.com/Quackster/duckPHP
 */

class mysql implements quackPlugin
{    
    public function onEnable()
    {
        /*
         * Call connect to MySQL database function
         */
		$this->onMySQL();
    }
    
    public function onEcho()
    {   
        /*
         * Nothing to be returned.
         */
        return "";
    }
	
	public function onMySQL()
	{
        /*
         * Connect to MySQL database
         */
		mysql_connect("localhost", "root", "");
		mysql_select_db("");
	}
}

?>