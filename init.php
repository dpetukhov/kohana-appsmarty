<?php defined('SYSPATH') or die('No direct script access.');

/**
 * Smarty vendor class autoloader
 * 
 * Once connected, the Smarty class become availabe from any part
 * of the application.
 * 
 * The loader gets smarty dir location from the configuration file,
 * includes the main Smarty.class.php file and removes itself from
 * the spl_autoload stack.
 * 
 * @author Dmitry Petukhov <dima@oscarweb.ru>
 * 
 */
function smarty_class_autoload($class_name)
{   
	if (strtolower($class_name) == 'smarty')
	{
		$dir = Kohana::$config->load('smarty.smarty_dir');
		
		// Include smarty class
		include_once Kohana::find_file($dir, 'Smarty.class');
		
		// We do not need this anymore
		spl_autoload_unregister('smarty_class_autoload');
	}
}

spl_autoload_register('smarty_class_autoload');