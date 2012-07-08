<?php

class PluginRegistry
{
    /*
     * Class storage!
     */
    public $plugins;
    
    /*
     * Constructor when creating class
     */
    public function __construct()
    {
        $this->plugins = array();
    }
    
    /*
     * Register all plugins and their class names
     */
    public function registerPlugin($fileName, $className)
    {
        $this->plugins[$fileName] = $className;
    }
    
    /*
     * Return list of plugins
     */ 
    public function getPluginsRegistered()
    {
        return $this->plugins;
    }
    
    /*
     *  Function to return class name by file name
     */
    public function getClassName($fileName)
    {
        if (isset($this->plugins[$fileName]))
        {
            return $this->plugins[$fileName];
        }
        else
        {
            return null;
        }
    }
}