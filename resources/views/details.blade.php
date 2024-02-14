@extends('layout.app')
@section('content-details')  
    <div class="jumbotron"></div>
    <div class="bg-main-blue my-pos">
        <img src="{{$comic['thumb']}}" alt="img">
    </div>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="d-flex my-5">
                    <div class="text-container me-5">
                        <h2 class="text-uppercase mb-1">{{$comic['title']}}</h2>
                        <div class="bg-green d-flex justify-content-between border border-secondary my-2">
                            <div class=" p-2">

                                <span class="text-body-secondary me-5">US Price <span class="text-white">{{$comic['price']}}</span></span>
                                <span class="text-body-secondary ms-5">AVAIABLE</span>
                            </div>
                            <div class="border-start border-secondary p-2">

                                <span class="text-white">Check Availlability</span>
                            </div>
                        </div>
                        <p>{{$comic['description']}}</p>
                    </div>
                    <img src="{{$comic['thumb']}}" alt="img" class="w-25">
                </div>
            </div>
        </div>
    </div>
    <div class="bg-lightgrey pt-5">
        <div class="container">
            <div class="row mb-5">
                <div class="col-6">
                    <h2>Talent</h2>
                    <ul class="list-unstyled">
                        <hr>
                        <li>
                            <div class="d-flex justify-content-between">
                                <div class="text-dark w-50">Art by:</div>
                                <div class="text-primary">
                                    José Luis García-López, Clay Mann, Rafael Albuquerque, Patrick Gleason, Dan Jurgens, Joe Shuster, Neal Adams, Curt Swan, John Cassaday, Olivier Coipel, Jim Lee
                                </div>
                            </div>
                        </li>
                        <hr>
                        <li>
                            <div class="d-flex justify-content-between">
                                <div class="text-dark w-50">Written by:</div>
                                <div class="text-primary">

                                    José Luis García-López, Clay Mann, Rafael Albuquerque, Patrick Gleason, Dan Jurgens, Joe Shuster, Neal Adams, Curt Swan, John Cassaday, Olivier Coipel, Jim Lee
                                </div>
                            </div>
                        </li>
                        <hr>
                    </ul>
                </div>
                <div class="col-6">
                    <h2>Specs</h2>
                    <ul class="list-unstyled">
                        <hr>
                        <li>
                            <div class="d-flex">
                                <div class="text-dark me-5">Series:</div>
                                <div class="text-primary text-uppercase">
                                    {{$comic['series']}}
                                </div>
                            </div>
                        </li>
                        <hr>
                        <li>
                            <div class="d-flex">
                                <div class="text-dark me-5">U.S. Price:</div>
                                <div class="text-dark">
                                    {{$comic['price']}}
                                </div>
                            </div>
                        </li>
                        <hr>
                        <li>
                            <div class="d-flex">
                                <div class="text-dark me-5">On Sale Date:</div>
                                <div class="text-dark">
                                    {{$comic['sale_date']}}
                                </div>
                            </div>
                        </li>
                        <hr>
                    </ul>
                </div>
            </div>
            <div class="row text-secondary mt-5">
                <div class="col-3 border border-light">
                    <div class="d-flex justify-content-between align-items-start">
                        <span class="text-uppercase">digital comics</span>
                        <img src="{{ Vite::asset('resources/img/buy-comics-digital-comics.png')}}" alt="img" class="w-25">
                    </div>
                </div>
                <div class="col-3 border border-light">
                    <div class="d-flex justify-content-between align-items-start">
                        <span class="text-uppercase">shop dc</span>
                        <img src="{{ Vite::asset('resources/img/buy-comics-subscriptions.png')}}" alt="img" class="w-25">
                    </div>
                </div>
                <div class="col-3 border border-light">
                    <div class="d-flex justify-content-between align-items-start">
                        <span class="text-uppercase">comic shop locator</span>
                        <img src="{{ Vite::asset('resources/img/buy-comics-shop-locator.png')}}" alt="img" class="w-25">
                    </div>
                </div>
                <div class="col-3 border border-light">
                    <div class="d-flex justify-content-between align-items-start">
                        <span class="text-uppercase">subscriptions</span>
                        <img src="{{ Vite::asset('resources/img/buy-comics-merchandise.png')}}" alt="img" class="w-25">
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection