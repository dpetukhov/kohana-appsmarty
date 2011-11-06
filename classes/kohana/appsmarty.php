<?php defined('SYSPATH') or die('No direct script access.');

/**
 * Configured smarty object for use in application
 * 
 * @author Dmitry Petukhov <dima@oscarweb.ru>
 */
class Kohana_AppSmarty extends Smarty {
	
	public function __construct()
	{
		parent::__construct();
		
		/* @var $config Kohana_Config_Group */ 
		$config = Kohana::$config->load('smarty');
		
		$this
			->setTemplateDir($config->get('template_dir'))
			->setCompileDir($config->get('compile_dir'))
			->setCacheDir($config->get('cache_dir'));
		
		$this
			->addConfigDir($config->get('config_dir'))
			->addPluginsDir($config->get('plugins_dir'));
		
		// Set error_reporting level if there is
		if ($error_level = $config->get('error_reporting'))
		{
			$this->error_reporting = $error_level;
		}
	}
}