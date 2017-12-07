<!DOCTYPE html>

<html lang="en" id="home">

  <head>
  	<link rel="shortcut icon" href="{{{ asset('img/cb.png') }}}">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cebelas Bangsawan</title>
    <link href="{{{ asset('css/bootstrap.min.css')}}}" rel="stylesheet">
    <link href="{{{ asset('css/style.css')}}}" rel="stylesheet">
  </head>

  <body>
	@include('shared.head_nav')
	@yield("content")
    <script src="{{{ asset('js/jquery-3.2.1.min.js')}}}"></script>
    <script src="{{{ asset('js/bootstrap.min.js')}}}"></script>
    <script src="{{{ asset('js/script.js')}}}"></script>
  </body>

  @include("shared.footer")
</html>