<?php 
function synbass_app_path()
{
	$paths  = require __DIR__.'/../../../bootstrap/paths.php';
	return $paths['app'];
}

function synbass_public_path()
{
	$paths  = require __DIR__.'/../../../bootstrap/paths.php';
	return $paths['public'];
}

function synbass_base_path()
{
	$paths  = require __DIR__.'/../../../bootstrap/paths.php';
	return $paths['base'];
}

function cdn($paths)
{
	$config = require synbass_app_path().'/config/app.php';
	$host = $config['url'] ?: 'localhost';
	return $host.$paths;
}
