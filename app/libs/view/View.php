<?php 
namespace Synbass;
/**
* 
*/
class View
{

	function __construct()
	{

	}

	public static function make($path = '' , $data = [])
	{
		global $blade;
		$content = $blade->view()->make($path,$data);
		echo $content;
		die();
	}

}
