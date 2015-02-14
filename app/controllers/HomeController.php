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
		if ($list = Cache::get('eee')) {
			
		}else {
			$list = User::get();
			Cache::set(md5($list),$list);
		}
		$func = function($f){
			echo $f;
		};
		// $func('fsdfs');
		$getPrintStrFunc = getPrintStrFunc();
		$printStrFunc = function( $str ) {  
		    echo $str.'fsdfsd';  
		};  
		callFunc(function($s,$g){
			echo $s."fffffffffff".$g;
		});  

		$getPrintStrFunc('sfsd333333');
		return View::make('Index.index',compact('list'));
	}
}
