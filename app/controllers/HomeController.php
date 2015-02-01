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
		// $list = $user->find(1);
		// echo User::find(1)->id;
		// for ($i=0; $i < 1000; $i++) { 
		// 	echo User::find(1)->id;
		// }
		Cache::set('eee','fsdfs');
		echo Cache::get('eee');
		return View::make('Index.index');
	}
}
