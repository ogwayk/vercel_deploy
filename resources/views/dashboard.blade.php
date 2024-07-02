<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('test.css') }}">
</head>

<body>
    <x-app-layout>
        <x-slot name="header">
        </x-slot>

        <p>ここにページの内容をいれます</p>

    </x-app-layout>
</body>
