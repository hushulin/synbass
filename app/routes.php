<?php
use NoahBuscher\Macaw\Macaw;

Macaw::get('/fuck', function() {
	header("Content-type:text/html;charset=utf-8");
  echo "成功！";
});

Macaw::get('/eeee' , function(){
	
});

Macaw::get('/', 'HomeController@index');

Macaw::get('/ee' , function(){
	$injector = new Auryn\Provider;
// $obj1 = new View;
$obj2 = $injector->make('Synbass\View');
$e = $injector->share('Views');
var_dump($e);
$e = $injector->define('View', [
    ':dsn' => 'mysql:dbname=testdb;host=127.0.0.1',
    ':username' => 'dbuser',
    ':passwd' => 'dbpass'
]);

var_dump($e);

// $g = Provider::make('View');

var_dump($obj2 instanceof Synbass\View); // true
});






Macaw::dispatch();
