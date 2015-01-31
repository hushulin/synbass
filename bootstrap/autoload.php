<?php

define('SYNBASS_START', microtime(true));

/*
|--------------------------------------------------------------------------
| Register The Composer Auto Loader
|--------------------------------------------------------------------------
*/

require __DIR__.'/../vendor/autoload.php';

/*
|--------------------------------------------------------------------------
| Include The Compiled Class File
|--------------------------------------------------------------------------
*/

if (file_exists($compiled = __DIR__.'/compiled.php'))
{
	require $compiled;
}
