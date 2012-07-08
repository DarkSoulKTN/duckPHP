<?php

class Template
{
    /*
     * Template theme
     */
    public $theme;

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
    public function load($page)
    {
        /*
         * Grab content for page
         */
        $this->content = file_get_contents("system/template/" . $this->theme . "/" . $page . ".html");
    }

    /*
     * Set a tag 
     */
    public function set($key, $variable)
    {
        $this->content = str_replace("[" . $key . "]", $variable, $this->content);
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
        $this->content = str_replace("[Plugin:" . $className . "]", $plugin->output(), $this->content);
    }
    
    /*
     * Output function
     */
    public function display()
    {
        echo $this->content;
    }
}