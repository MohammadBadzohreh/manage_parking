<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0;">
    <meta name="_token" content="{{ csrf_token() }}">

    <title>Panel</title>
    <link rel="stylesheet" href="{{ asset('/css/font_awesome.css') }}" type="text/css">
    <link rel="stylesheet" href={{ asset("/panel/css/style.css") }}>
    <link rel="stylesheet" href={{ asset("/panel/css/responsive_991.css") }} media="(max-width:991px)">
    <link rel="stylesheet" href={{ asset("/panel/css/responsive_768.css") }} media="(max-width:768px)">
    <link rel="stylesheet" href={{ asset("/panel/css/font.css") }}>
    <link rel="stylesheet" href="{{ asset('/css/iziToast.min.css') }}" type="text/css">
    @yield("css")
</head>
<body>
