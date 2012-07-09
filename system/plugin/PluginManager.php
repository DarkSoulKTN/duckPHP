<?php

/**
 * duckPHP
 *
 * @author     Quackster <quacky@winterpartys.org>
 * @copyright  2012 - (and beyond) Quackster.NET
 * @license    http://philsturgeon.co.uk/code/dbad-license/  Don't Be A Dick 1.0
 * @link       http://github.com/Quackster/duckPHP
 */

class PluginManager
{
    /*
     * Class storage!
     */
    public $classes;

    /*
     * Plugin registry class
     */
    public $pluginRegistry;
    
    /*
     * Constructor when creating class
     */
    public function __construct()
    {    
        global $pluginRegistry;
        
        $this->classes = array();
        $this->pluginRegistry = $pluginRegistry;
    }
    
    /*
     * Include all plugins and add them to array
     */
    public function startPlugins()
    {
        /*
         * Plugin directory
         */
        $dir = "system/plugin/plugins/";

        /*
         * Plugins and their class names
         */
        $plugins = $this->pluginRegistry->getPluginsRegistered();
        
        /*
         * Include them and create an instance for them
         */
        foreach ($plugins as $fileName => $className)
        {
           /*
            * Include the plugins
            */
           include ($dir . $fileName);
           
           /*
            * Create new instance and register it!
            */
           $plugin = new $className;
           $plugin->onEnable();
           
           /*
            * Add to array
            */
           $this->registerPlugin($plugin, $className);
        }
    }
    
    /*
     * Register the class and the class name 
     */
    public function registerPlugin($instance, $className)
    {
        $this->classes[$className] = $instance;
    }
    
    /*
     * Returns a single plugin
     */
    public function getPlugin($className)
    {
        return $this->classes[$className];
    }
    
    /*
     * Returns all loaded plugins
     */
    public function getPlugins()
    {
        return $this->classes;
    }
}