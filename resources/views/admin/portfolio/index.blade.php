@extends('adminlte::page')
<link rel="stylesheet" href="{{asset('assets/css/linearicons.css')}}">
<link rel="stylesheet" href="{{asset('assets/css/owl.carousel.css')}}">
<link rel="stylesheet" href="{{asset('assets/css/font-awesome.min.css')}}">
<link rel="stylesheet" href="{{asset('assets/css/animate.css')}}">
<link rel="stylesheet" href="{{asset('assets/css/bootstrap.css')}}">
<link rel="stylesheet" href="{{asset('assets/css/main.css')}}">

@section('title', 'Admin')

@section('content_header')

@stop

@section('content')

    <div class="col-lg-12">
    </div>
    <section id="protfolio" class="section-full portfolio-content">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="product-area-title text-center">
                        <h3 class="text-w text-uppercase mt-20"><a href=" {{action('PortfolioController@create') }}">Создать Портфолио</a></h3>
                    </div>
                </div>
            </div>
        </div>
        <div id="filter-content" class="row no-gutters mt-50">
            @foreach($portfolios as $portfolio)
            <div class="mix category-3 col-lg-3 col-md-4 col-sm-6 single-filter-content" data-myorder="1">
                <img class=" mix category-1 col-lg-12 col-md-12 col-sm-12 single-filter-content"
                     src="/img_portfolio/{{$portfolio->image}}">
                <div class="overlay overlay-bg-content d-flex align-items-center justify-content-center flex-column">
                    <a href="{{action('PortfolioController@edit', $portfolio->id)}}" class="primary-btn banner">редактировать</a>
                    <a href="{{action('PortfolioController@destroy', $portfolio->id)}}" class="primary-btn banner" onclick="return  confirm('вы уверены что хотите удалить {{$portfolio->name}}')">удалить </a>
                    <p class="text-white">{{$portfolio->link}}</p>
                    <div class="line"></div>
                    <h5 class="text-white text-uppercase">{{$portfolio->name}}</h5>
                </div>
            </div>
            @endforeach
        </div>
    </section>

@stop

@section('css')

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/admin-lte/2.4.8/css/AdminLTE.min.css">

@stop

@section('js')

    <script> console.log('Hi!'); </script>

@stop