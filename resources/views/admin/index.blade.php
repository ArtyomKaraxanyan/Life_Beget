@extends('adminlte::page')
<link rel="stylesheet" href="{{asset('assets/css/linearicons.css')}}">
<link rel="stylesheet" href="{{asset('assets/css/owl.carousel.css')}}">
<link rel="stylesheet" href="{{asset('assets/css/font-awesome.min.css')}}">
<link rel="stylesheet" href="{{asset('assets/css/animate.css')}}">
<link rel="stylesheet" href="{{asset('assets/css/bootstrap.css')}}">
<link rel="stylesheet" href="{{asset('assets/css/main.css')}}">

@section('title', 'Admin')

@section('content_header')


    <h1>Dashboard</h1>

@stop


@section('content')
    <div class="col-lg-12">

    <a class="primary-btn banner" href="{{ action('PortfolioController@index') }}">
        {{  'ПОРТФОЛИО' }}
    </a>
        </div>
@stop

@section('css')

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/admin-lte/2.4.8/css/AdminLTE.min.css">

@stop

@section('js')

    <script> console.log('Hi!'); </script>

@stop