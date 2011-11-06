<?php defined('SYSPATH') or die('No direct script access.');

return array(
	
	// Path to 'lib' folder from smarty distribution with Smarty.class.php
	// file inside
	'smarty_dir' => 'vendor/smarty-3.1.4',
	
	// Error_reporting level
	'error_reporting' => E_ALL ^ E_NOTICE,

	/**
	 * Override default pathes
	 */
	// Cache dir, must be writable
	'cache_dir' => APPPATH.'cache',
	
	// Folder for compiled templates, must be writable
	'compile_dir' => APPPATH.'templates_c',
	
	// Folders with templates
	'template_dir' => array(
		APPPATH.'templates'
	),
	
	// Folder with custom plug-ins will be added by addPluginsDir
	'plugins_dir'  => array(
		APPPATH.'plugins'
	),
);