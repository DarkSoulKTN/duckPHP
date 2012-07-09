<?php

/**
 * duckPHP
 *
 * @author     Quackster <quacky@winterpartys.org>
 * @copyright  2012 - (and beyond) Quackster.NET
 * @license    http://philsturgeon.co.uk/code/dbad-license/  Don't Be A Dick 1.0
 * @link       http://github.com/Quackster/duckPHP
 */

class Template
{
    /*
     * Template theme
     */
    public $theme;
	
	/*
     * Template page
     */
    public $page;

    /*
     * Templates content
     */
    public $content;
    
    /*
     * Variables for replacing
     */
    public $vars;
    
    /*
     * Load content and init variables
     */
    public function __construct()
    {
        /*
         * Define variables as array
         */
        $this->vars = array();
    }
    
    /*
     * Load content and init variables
     */
    public function theme($theme)
    {
        /*
         * Set theme
         */
        $this->theme = $theme;
    }
    
    /*
     * Load content and init variables
     */
    public function page($page)
    {
		/*
         * Set page
         */
        $this->page = $page;
    }

    /*
     * Set a tag 
     */
    public function param($key, $variable)
    {
		$this->vars["[" . $key . "]"] = $variable;
    }
    
    /*
     * Set a tag for plugin output
     */
    public function plugin($className)
    {
        global $pluginManager;
        
        /*
         * Get the plugin
         */
        $plugin = $pluginManager->getPlugin($className);
        
        /*
         * Replace with output
         */
		$this->vars["[Plugin:" . $className . "]"] = $plugin->onEcho();
    }
    
    /*
     * Output function
     */
    public function display()
    {		 
		/*
		 * Start PHP buffer
		 */
		ob_start();
		 
		/*
         * Grab content for page
         */
		include "system/template/" . $this->theme . "/" . $this->page . ".html";
		
		/*
         * Get content from buffer
         */
        $this->content = ob_get_contents();
		
		/*
         * Filter params
         */
		foreach ($this->vars as $key => $value)
        {
			$this->content = str_replace($key, $value, $this->content);
		}
		
		/*
		 * Clean buffer
		 */
		ob_end_clean();
		
		/*
		 * Echo out the content
		 */
        echo $this->content;
    }
}