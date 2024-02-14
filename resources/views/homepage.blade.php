@extends('layout.app')
@section('content')    
    <div class="jumbotron">
        <div class="current">
            current series
        </div>  
    </div>
    <div class="bg-dark">
        <div class="container">
            <div class="row py-5">
                @foreach ($comics as $comic)
                <div class="col-2">
                    <div class="square-img">
                        <img src="{{$comic['thumb']}}" alt="{{$comic['title']}}">
                        <span class="text-white"> 
                            {{$comic['title']}}    
                        </span>
                    </div>
                </div>    
                @endforeach
            </div>
        </div>
    </div>
    <div class="bg-main-blue">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="d-flex">
                        <div class="banner-card">
                            <img src="{{ Vite::asset('resources/img/buy-comics-digital-comics.png')}}" alt="image">
                            <p>dc comics</p>
                        </div>
                        <div class="banner-card">
                            <img src="{{ Vite::asset('resources/img/buy-comics-merchandise.png')}}" alt="image">
                            <p>dc merchandaise</p>
                        </div>
                        <div class="banner-card">
                            <img src="{{ Vite::asset('resources/img/buy-comics-subscriptions.png')}}" alt="image">
                            <p>subscription</p>
                        </div>
                        <div class="banner-card">
                            <img src="{{ Vite::asset('resources/img/buy-comics-shop-locator.png')}}" alt="image">
                            <p>comic shop locator</p>
                        </div>
                        <div class="banner-card">
                            <img src="{{ Vite::asset('resources/img/buy-dc-power-visa.svg')}}" alt="image">
                            <p>dc power visa</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection