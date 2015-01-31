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
		$list = $user->take(10)->get();
		return View::make('Index.index', ['list' => $list]);
	}
}
