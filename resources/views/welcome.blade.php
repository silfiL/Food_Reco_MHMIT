<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Food Recommendation MHMIT</title>

        <!--Favicon-->
        <link rel="shortcut icon" href="{{{ asset('images/favicon.png') }}}">

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link href="{{ asset('css/myApp.css') }}" rel="stylesheet">
        <style>
            html,body{
                font-family: 'Raleway',sans-serif;
            }
            .show{
                display: inline-block;
                float: left;
                padding: 0 10px;
            }
        </style>
    </head>
    <body>
        <div id="one" class="grey-blue">
            <div class="left">
                <img class="logo" src="{{ asset('images/Logo.png')}}" />
            </div>
            <div class="right">
                <h1 class="text-white">A website to recommend you all about <span id="special" class="text-orange">"food"</span></h1>
                <h3 class="text-white">Don't miss out all of our recommendation features ! To try them, <span class="text-orange">register</span> here !</h3>
                <div class="btn-box center">
                @if (Route::has('login'))
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a class="btn text-orange transparent border-orange" type="button" href="{{ route('login') }}">Login</a>
                        <a class="btn orange focus" type="button" href="{{ route('register') }}">Register</a>
                    @endauth
                @endif
                </div>
            </div>
        </div>
        <div id="two">
            <div class="left">
                <h1>Recommend Food</h1>
                <h3>Don't know what food to eat for today? We'll help you with that, you just need to answer some questions!</h3>
            </div>
            <div class="right">
                <img class="img-responsive img-thumbnail" src="{{ asset('images/dessert.jpg')}}" />
                <img class="img-responsive img-thumbnail" src="{{ asset('images/noodles.jpg')}}" />
            </div>
        </div>
        <div id="three">
            <div class="left">
                <img class="img-responsive img-thumbnail" src="{{ asset('images/restaurant.jpg')}}" />
            </div>
            <div class="right">
                <h1>Recommend Food Stalls</h1>
                <h3>It's end of the month and you are broke? Don't worry, we'll recommend you an affordable place to eat</h3>
            </div>
        </div>
        <div id="four">
            <div class="left">
                <h1>Recommend Recipe</h1>
                <h3>You like cooking but don't know what to cook? Just tell us the ingredients you have and we'll recommend you some</h3>
                <a class="btn blue text-white top-button" id="top" type="button">Back to top <span></span></a>
            </div>
            <div class="middle">
                <img class="img-responsive img-thumbnail" id="showRecipe" src="{{ asset('images/fried-rice.jpg')}}" />
            </div>  
            <div class="right">  
                <div class="text-grey-blue" id="recipe">
                    <p>Fried Rice</p>
                    <span>Simple ingredients such as rice, corns, peas, eggs, garlics, oil and seasonings</span><br>
                    <span>* Boil the vegetables first</span><br>
                    <span>* Dice the garlics</span><br>
                    <span>* Heat the oil and fry the garlics</span><br>
                    <span>(Register to view the complete recipe..)</span>
                </div>
            </div>
        </div>
        <script>
            var btn = document.getElementById("top");
            btn.addEventListener("click",function(){
                document.documentElement.scrollTop = 0;
            })
            var img = document.getElementById("showRecipe");
            img.addEventListener("click",function(){
                var text = document.getElementById("recipe");
                text.classList.add("show");
            })
        </script>
    </body>
</html>
