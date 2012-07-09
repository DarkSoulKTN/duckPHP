<?php

include "system/plugin/Plugin.php";

/*###################################################*/
//                  Plugin registry
/*###################################################*/

include "system/plugin/PluginRegistry.php";

$pluginRegistry = new PluginRegistry();
$pluginRegistry->registerPlugin("footer.php", "footer");
$pluginRegistry->registerPlugin("mysql.php", "mysql");

/*###################################################*/
//                  Plugin loading
/*###################################################*/

include "system/plugin/PluginManager.php";

$pluginManager = new PluginManager();
$pluginManager->startPlugins();

/*###################################################*/
//                  Templates
/*###################################################*/

include "system/template/Template.php";

$tpl = new Template();
$tpl->theme("default");

?>