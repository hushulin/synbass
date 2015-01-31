
<?php
use DebugBar\StandardDebugBar;

$debugbar = new StandardDebugBar();
$debugbarRenderer = $debugbar->getJavascriptRenderer();

$debugbar["messages"]->addMessage("hello world!");
?>

<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title></title>
	<link rel="stylesheet" type="text/css" href="{{ cdn('/assets/css/reset.css') }}">
	<?php echo $debugbarRenderer->renderHead() ?>
</head>
<body>
	@foreach ($list as $element)
	{{$element->user_name }}<br>
	qq
@endforeach
<script type="text/javascript" src="http://lib.sinaapp.com/js/jquery/1.7.2/jquery.min.js"></script>
<?php echo $debugbarRenderer->render() ?>
</body>
</html>