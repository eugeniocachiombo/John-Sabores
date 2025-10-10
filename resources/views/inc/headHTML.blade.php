<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title')</title>

    <link rel="shortcut icon" href="{{ asset('assets/img/logo.jpg') }}" type="image/x-icon">
    <link rel="stylesheet" href="{{ asset('assets/fontawesome/css/all6.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/fontawesome/css/all5.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/bootstrap-5.0.2-dist/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/PDF.css') }}">
    <script src="{{ asset('assets/bootstrap-5.0.2-dist/js/bootstrap.js ') }}"></script>
    <script src="{{ asset('assets/jquery/jquery.js') }}"></script>
    <script src="{{ asset('assets/js/sweetalert.js') }}"></script>
    <script src="{{ asset('assets/js/run_sweetalert.js') }}"></script>
    @livewireStyles
</head>

<body>
