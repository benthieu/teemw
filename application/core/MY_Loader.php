<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class MY_Loader extends CI_Loader {

	var $template;

	function __construct() {
		parent::__construct();

		// load template
		$this->_load_template();
	}

	/**
	 * view
	 *
	 * Ovverrides the default view from CI_Loader
	 *
	 * @access	public
	 * @param	string	$view
	 * @param	array	$vars
	 * @param	bool	$return
	 */
	function view($view, $vars = array(), $return = FALSE) {
		$CI =& get_instance();

		$vars['content_view'] = $view;
		// finally load view!
		if ($this->template !== FALSE) {
			return parent::view('../template/'.$this->template, $vars, $return);
		}

		return $this->basic_view($view, $vars, $return);
	}

	function basic_view($view, $vars = array(), $return = FALSE) {
		return parent::view($view, $vars, $return);
	}

	function template($template) {
		if (file_exists(APPPATH.'template/'.$template.'.php')) {
			$this->template = $template;
		}
	}
	function no_template() {
		$this->template = FALSE;
	}

	function _load_template() {
		$this->template = 'default';
	}

}
