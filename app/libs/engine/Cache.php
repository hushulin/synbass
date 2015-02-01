<?php 

/**
* 缓存
*/
class Cache
{
	function __construct()
	{

	}

	public static function set($key , $value)
	{
		global $cache;
		return $cache->set_cache($key , $value);
	}

	public static function get($key)
	{
		global $cache;
		return $cache->get_cache($key);
	}
}
