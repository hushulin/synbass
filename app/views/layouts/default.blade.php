<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8"/>

<title>@section('title')
    网站标题
@show</title>

<meta name="keywords" content="@section('keywords')
    网站关键字
@show"/>

<meta name="description" content="@section('description')
    网站描述
@show"/>

<meta name="viewport" content="width=device-width"/>
<link rel="stylesheet" href="{{ cdn('/assets/css/nec/reset.css') }}"/>
<link rel="stylesheet" href="{{ cdn('/assets/css/nec/function.css') }}"/>
<link rel="stylesheet" href="{{ cdn('/assets/css/nec/global.css') }}"/>
@yield('styles')

<link rel="shortcut icon" href="{{ cdn('/favicon.ico') }}"/>
<link rel="apple-touch-icon" href="{{ cdn('/touchicon.png') }}"/>
</head>

<body>
@yield('main')
<script type="text/javascript" src="{{ cdn('/assets/js/nej/baseline/src/define.js?pro=./') }}"></script>
@yield('scripts')
</body>
</html>