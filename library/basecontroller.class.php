<?php

class BaseController
{

	protected $_controller;
	protected $_action;
	protected $_template;

	public $doNotRenderHeader;
	public $render;

	function __construct($controller, $action)
	{

		global $inflect;

		$this->_controller = ucfirst($controller);
		$this->_action = $action;

		$model = ucfirst($inflect->singularize($controller));
		$this->doNotRenderHeader = 0;
		$this->render = 1;
		$this->$model = new $model;
		$this->_template = new Template($controller, $action);
	}

	//	validate input
	function validate_input($data)
	{
		if ($data != null) {
			$data = trim($data);
			$data = stripslashes($data);
			$data = htmlspecialchars($data);
		}
		return $data;
	}

	function set($name, $value)
	{
		$this->_template->set($name, $value);
	}

	function __destruct()
	{
		if ($this->render) {
			$this->_template->render($this->doNotRenderHeader);
		}
	}
}
