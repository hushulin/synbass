<?php 
/**
* 
*/
class HomeController extends BaseController
{
	
	function __construct()
	{
		# code...
	}

	public function index()
	{
		$user = new User();
		$list = $user->find(1);
		return View::make('Index.index');
	}
}
