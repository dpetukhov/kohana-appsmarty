<?php defined('SYSPATH') or die('No direct script access.');

/**
 * Smarty-templated controller
 * 
 * Usage example:
 * <code>
 * class Controller_Welcome extends Controller_Smarty {
 *     public function action_index()
 *     {
 *         $this->tp->assign('some', 'value');
 *         $this->response->body($this->tp->fetch('welcome/index.php'));
 *     }
 * }
 * </code>
 * 
 * @author Dmitry Petukhov <dima@oscarweb.ru>
 */
class Kohana_Controller_Smarty extends Controller {
	
	public function before()
	{
		parent::before();
		
		$this->tp = new AppSmarty;
	}
}