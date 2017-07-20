<!doctype html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="<?php echo asset('css/style.css')?>" type="text/css"> 
        <link rel="stylesheet" href="<?php echo asset('css/app.css')?>" type="text/css">
        <script src="<?php echo asset('js/app.js')?>"></script>
        <script src="<?php echo asset('js/mind.js')?>"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
        <style>
            html, body {
            background-color: #fff;
            color: black;
            font-family: 'Raleway', sans-serif;
            font-weight: 100;
            height: 100vh;
            margin: 0;
            }
            a{
            color: rgb(220, 15, 99);
            }
        </style>
    <body>
    <!-- First Header -->
    <div class="container-fluid header-style" style="color: #dc0f63;">
        <div class="col-sm-10">
            <a href="registration"><button class="header-button" id="registration" type="button">Register</button></a>
            <a href="login"><button class="header-button" id="login" type="button">Log in</button></a>
            <a href="contact"><button class="header-button" id="login" type="button">Contact</button></a>
            <a href="contact"><button class="header-button" id="login" type="button">About</button></a>
        </div>
    </div>
    <!-- Second Header -->
    <div class="container-fluid header-2">
        U.J.O.Q.S
    </div>
    <!-- Third Header -->
    <div class="amit-container">
        <div class="header-3">
        <div class="col-sm-1 n1-category block-1">
            <i class="fa fa-bars" id="menu" aria-hidden="true"></i>
            <div data-toggle="modal" data-target="#myModal-1" class="u-hider" style="color:white;float: right;">Upload</div>
        </div>
        <div class="col-sm-2 category block-2" id="home">Home</div></a>
        <div class="col-sm-2 category block-3" id="jokes">Jokes</div></a>
        <div class="col-sm-2 category block-4" id="shayari">Shayari</div></a>
        <div class="col-sm-2 category block-5" id="quotes">Quotes</div></a>
        <div data-toggle="modal" data-target="#myModal-1" class="nu-hider"><div class="col-sm-2 category block-5">Upload</div>
        <div class="col-sm-1 n-category block-7"></div>
        </div>
        </div>
    </div>
    <div id="content" style="width: 100%;height: auto;">
    @include('template.body')
    </div>
    <script type="text/javascript">
        $(document).ready(function(){
            $('#jokes').click(function(){
            $('#content').load('jokes');
            });
        });
    </script>
    <script type="text/javascript">
        $(document).ready(function(){
            $('#home').click(function(){
            $('#content').load('mainbody');
            });
        });
    </script>
    <script type="text/javascript">
        $(document).ready(function(){
            $('#shayari').click(function(){
            $('#content').load('shayari');
            });
        });
    </script>
    <script type="text/javascript">
        $(document).ready(function(){
            $('#quotes').click(function(){
            $('#content').load('quotes');
            });
        });
    </script>
<!--     <script type="text/javascript">
        $(document).ready(function(){
            $('#registration').click(function(){
            $('#content').load('registration');
            });
        });
    </script>
    <script type="text/javascript">
        $(document).ready(function(){
            $('#login').click(function(){
            $('#content').load('login');

            });
        });
    </script> -->
    @include('template.footer')
    @yield('header-1')
</body>
</html>
