<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        @yield('styles')

        <title>Invest Calc</title>
    </head>
    <body class="min-vh-100">
        <div id="index">
