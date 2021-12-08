<!doctype html>
<html>
<head>
    <meta charset="utf8">
    <title>@yield('title', 'Home Page')</title>
    <!-- Styles -->
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/customStyle.css')}}">

<!-- Liens des templates bootstrap -->
    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/carousel/">
    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/album/">
    <!-- Bootstrap core CSS -->
    <link href="https://getbootstrap.com/docs/5.1/dist/css/bootstrap.min.css" rel="stylesheet" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="https://getbootstrap.com/docs/5.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- Custom styles for this template -->
    <link href="https://getbootstrap.com/docs/5.1/examples/carousel/carousel.css" rel="stylesheet" rel="stylesheet">
 
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">

</head>
<body>
<div id="app">
    <nav class="navbar fixed-top navbar-expand-md navbar-light bg-white shadow-sm">
        <div class="container">
            <a href="{{route('home.index')}}" class="navbar-brand">
                {{config('app.name', 'Laravel')}}
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse"
            data-target="#navbarSupportedContent" aria-expanded="false"
                    aria-label="{{__('Toggle navigation')}}">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Left side of navbar -->
                <ul class="navbar-nav">
                    <!-- future left side link -->
                    <a href="{{route('trombi.trombi')}}" class="navbar-brand">Trombi</a>
                    <a href="{{route('produits.produits')}}" class="navbar-brand">Produits</a>
                    <a href="{{route('actus.actus')}}" class="navbar-brand">Actus</a>
                </ul>

                <!-- Right side of navbar -->
                <ul class="navbar-nav ml-auto">
                    <!-- future right side link -->
                    <a href="{{route('auth.login')}}" class="navbar-brand">Login</a>
                    <a href="{{route('auth.register')}}" class="navbar-brand">Register</a>
                </ul>
            </div>
        </div>
    </nav>

    <main class="py-4">
        @yield('content')

    </main>
</div>
</body>

<!-- scripts -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

<!-- Script des templates bootstrap -->
<script src="https://getbootstrap.com/docs/5.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script>window.jQuery || document.write('<script src="https://getbootstrap.com/docs/5.1/assets/js/vendor/jquery-slim.min.js"><\/script>') </script>
<script src="https://getbootstrap.com/docs/5.1/dist/js/bootstrap.bundle.min.js"></script>


</html>

