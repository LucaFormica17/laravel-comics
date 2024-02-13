<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>DC Comics</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Styles -->
    @vite('resources/js/app.js')

</head>
    @include('partials/header')
    <body>
        <main>
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
        </main>
    </body>
    @include('partials/footer')
</html>