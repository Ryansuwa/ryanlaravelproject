@section('header')
        <!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title',$title)</title>
    <link rel="stylesheet" href="{{url('css/admin.css')}}">
</head>
<body>
<body class="nav-md">
<div class="container body">
    <div class="main_container">
@endsection

