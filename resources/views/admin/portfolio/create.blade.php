@extends('adminlte::page')
<link rel="stylesheet" href="{{asset('assets/css/linearicons.css')}}">
<link rel="stylesheet" href="{{asset('assets/css/owl.carousel.css')}}">
<link rel="stylesheet" href="{{asset('assets/css/font-awesome.min.css')}}">
<link rel="stylesheet" href="{{asset('assets/css/animate.css')}}">
<link rel="stylesheet" href="{{asset('assets/css/bootstrap.css')}}">
<link rel="stylesheet" href="{{asset('assets/css/main.css')}}">
<meta name="csrf-token" content="{{ csrf_token() }}">
@section('title', 'Admin')

@section('content_header')


    <h1>Dashboard</h1>
@stop

@section('content')
    <div class="col-lg-12">
    </div>
    <section id="protfolio" class="section-full portfolio-content">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="product-area-title text-center">
                        <h3 class="text-w text-uppercase mt-20">Создать Портфолио</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>
        <form method="post" action="{{action('PortfolioController@store')}}" enctype="multipart/form-data">
            {!! csrf_field() !!}
            <div class="row">
                <div class="col-md-4"></div>
                <div class="form-group col-md-4">
                    <label for="Name">Name:</label>
                    <input type="text" class="form-control" name="name">
                </div>
            </div>
                <div class="row">
                    <div class="col-md-4"></div>
                    <div class="form-group col-md-4">
                        <label for="Link">Link:</label>
                        <input type="text" class="form-control" name="link">
                    </div>
                </div>

            <div class="row">
                <div class="col-md-4"></div>
                <div class="form-group col-md-4">
                    <input type="file" name="filename">
                </div>
            <div class="row">
                <div class="col-md-4"></div>
                <div class="form-group col-md-4" style="margin-top:60px">
                    <button type="submit"  class="btn btn-success">Create</button>
                </div>
            </div>
            </div>
        </form>

@stop

@section('css')

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/admin-lte/2.4.8/css/AdminLTE.min.css">

@stop

@section('js')

    <script> console.log('Hi!'); </script>

@stop