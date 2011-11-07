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
 * @package Kohana/AppSmarty
 * @author Dmitry Petukhov <dima@oscarweb.ru>
 */
function smarty_class_autoload($class_name)
{
	$class_name = strtolower($class_name);
	
	if ($class_name == 'smarty' OR $class_name == 'smartybc')
	{
		$dir = Kohana::config('smarty.smarty_dir');
		
		$file = ($class_name == 'smarty') ? 'Smarty' : 'SmartyBC';
		
		include_once Kohana::find_file($dir, $file.'.class');
		
		// We do not need this anymore
		spl_autoload_unregister('smarty_class_autoload');
	}
}

spl_autoload_register('smarty_class_autoload');