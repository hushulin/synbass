<?php 
/**
* 
*/
class Controller
{
	public $debugbar;
	public $debugbarRenderer;
	function __construct()
	{
		global $debugbar , $debugbarRenderer;
		$this->debugbar = $debugbar;
		$this->debugbarRenderer = $debugbarRenderer;
	}
}
